<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function form1()
    {
        return view('form.form1');
    }
    public function form1_data(Request $request)
    {
        // dd($request->all());
        // dd($request->except(['name','_token']));
        // dd($request->only(('age')));
        $name = $request->name;
        $age = $request->age;
        $email = $request->email;
        return "Weclome $name,your age is $age,your email is $email";
    }

    public function form2()
    {
        return view('form.form2');
    }

    function form2_data(Request $request)
    {
        // dd($request->all());
        // $name = $request->name;
        // $email = $request->email;
        // $message = $request->message;

// Mail::to('admin@example.com')->send(new TestMail());

Mail::to('admin@example.com')->send(new ContactUsMail($request->except('_token')));

        // return view('form.form2_data', compact('name', 'email'))->with('message', $message);
    }

    public function form3()
    {
        return view('form.form3');
    }
    function form3_data(Request $request)
    {
        // $request->validate([

        //     'name' => 'required|min:2',
        //     'email' => 'required',
        //     'age' => 'required|numeric|gt:18|lt:100'
        // ]);

        $hussein = [];

        foreach ($request->all() as $key => $value) {
            $hussein[$key] = 'required';
        }
        $request->validate($hussein);
        $name = htmlspecialchars($request->name);
        // dd($hussein);
        dd($request->all());
    }



    public function form4()
    {
        return view('form.form4');
    }
    public function form4_data(Request $request)
    {
        $request->validate([

            'image' => ['required', 'image', 'mimes:png,jpg', 'max:5120']

        ]);



        // dd($request->all());*
        $name = rand() . $request->file('image')->getClientOriginalName();
        // a.png=>34534523542a.png
        $request->file('image')->move(public_path('uploads'), $name);
        //
        //spical for facebook
        // $ex=$request->file('image')->getClientOriginalExtension();
        // $name=rand().'_'.rand().rand().'_'.rand().'_n.'.$ex;
        // //ee.pang=>4323424_2423423424323432_5676756_n.png
        // $request->file('image')->move(public_path('uploads'),$name);
    }


    public function full_form()
    {
        return view('form.full_form');
    }

    public function full_form_data(Request $request)
    {
        dd($request->all());
    }
}

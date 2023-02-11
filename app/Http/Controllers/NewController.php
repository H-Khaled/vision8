<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    function welcome() {
        $name='hussein';
        $age=20;
        $password="hussein444sdcv";
        $url=route('welcome1',[$name,$age,$password]);
        // $url= url('/'. $name.'/'.$age.'/'.$password);
        // // return $url;
        return "<a href='$url'>Click me</a>";
    }

public function index()
{$name='Hussein';

    return view('index')->with('name',$name);
}

public function about()
{
    return 'about page';
}

public function contact()
{
    return view('contact');
}
public function contact_data()
{
return 'hfhhfh';
}


}

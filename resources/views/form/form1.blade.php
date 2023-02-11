
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <h1>Basic Form</h1>
        <form action="{{ route('form1_data') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            {{-- {{ csrf_field() }} --}}
            {{-- @csrf --}}
            <div class="mt-3">
                <label>Name</label>
                <input type="text" placeholder="Name" name="name" class="form-control"/>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="text" placeholder="Email" name="email" class="form-control" />
            </div>

            <div class="mb-3">
                <label>Age</label>
                <input type="number" placeholder="Age" name="age" class="form-control" />
            </div>
{{-- <input type="submit" class="btn btn-success" name="submit" value="Login"> --}}
            <button class="btn btn-success">Send</button>
        </form>

    </div>
  </body>
</html>

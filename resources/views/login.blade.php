<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <!-- <link rel="stylesheet" href="resources/css/app.css"> -->
</head>
<body>
    <a class="regbtn" href="{{ route ('register')}}">Register</a>
    <h2 class="text">Login Here</h2>


   


    <form action="{{ route ('logging') }}" method="post">

        @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
        @csrf
        <input type="text" name="name" placeholder="name" required />
        <input type="password" name="password" placeholder="password" required/>

        <button type="submit" class="btn">Login</button> 
    </form>
    
    
</body>
</html>
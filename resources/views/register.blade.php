<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    
</head>
<body>
    <a class="regbtn" href="{{ route ('login')}}">Login</a>
    <h2 class="text">Create an account</h2>

    <form action="{{ route ('registration') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name" required />
        <input type="password" name="password" placeholder="password" required/>
        <input type="email" name="email" placeholder="email" required  />

        <button type="submit" class="btn">Sign up</button>
    </form>
    
</body>
</html>
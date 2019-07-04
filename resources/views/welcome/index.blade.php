<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BRACU Messenger Bot</title>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="background-color: black">
<nav class="navbar p-3 justify-content-between" style="background-color: black">
    <a href="#" class="navbar-brand" style="color: white; font-size:25px; font-family: 'Righteous', cursive;">Bot Brain</a>
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a class="btn btn-dark" href="{{ route('/admin') }}">Home</a>
            @else
                <a class="btn btn-dark" href="{{ route('login') }}">Admin Login</a>

            @endauth
        </div>
    @endif
</nav>
<div class="jumbotron text-center" style="background-color: #080909; color: white; font-weight: bolde;">
    <h1>BRACU Messenger Bot</h1>
    <p><i>The most convenient way to surf through the academic informations!</i></p>
</div>
</body>
</html>
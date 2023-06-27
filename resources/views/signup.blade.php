
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Signup</title>
</head>
<body>
 @include ('header');
    <form action="" method="post">
    
       @csrf
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email"  autofocus>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" >
      
          <label for="password-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="password-repeat" >
      
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
      
         
      
          <div class="clearfix">
            {{-- <button type="button" class="cancelbtn">Cancel</button> --}}
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
</body>
</html>
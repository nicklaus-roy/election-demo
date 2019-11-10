<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Signin</title>
    <style>
      html, body {
        height: 100%;
      }
      .login-container{
        display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      width: 100%;
      }

    </style>
    <!-- Bootstrap core CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class='login-container'>
      <form class="form-signin" style="width:30%" method="POST" action="./auth/login.php">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="username" class="sr-only">Username:</label>
        <input type="text" id="username" name='username' class="form-control" placeholder="Username" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name='password' class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name='submit'>Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
      </form>      
    </div>
</body>
</html>

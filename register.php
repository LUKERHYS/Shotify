<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to shotify</title>
  </head>
  <body>
    <div id="inputContainer">
      <form id="loginForm" action="register.php" method="POST">
        <h2>Login to your account</h2>
        <p>
        <label for="loginUserame">Username</label>
        <input id="loginUserame" type="text" name="loginUserame" placeholder="e.g. Bart Simpson" required>
        </p>
        <P>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
      </p>
        <button type="submit" name="loginButton">Login</button>


        <form id="registerForm" action="register.php" method="POST">
          <h2>Login to your account</h2>
          <p>
          <label for="loginUserame">Username</label>
          <input id="loginUserame" type="text" name="loginUserame" placeholder="e.g. Bart Simpson" required>
          </p>
          <P>
          <label for="password">Password</label>
          <input id="password" type="password" name="password" required>
        </p>
          <button type="submit" name="loginButton">Login</button>

      </form>
    </div>
  </body>
</html>

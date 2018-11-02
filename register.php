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
        <label for="loginPassword">Password</label>
        <input id="loginPassword" type="password" placeholder="Your Password" name="loginPassword" required>
      </p>
        <button type="submit" name="loginButton">Login</button>


        <form id="registerForm" action="register.php" method="POST">
          <h2>Create your free account</h2>
          <p>
          <label for="userame">Username</label>
          <input id="userame" type="text" name="userame" placeholder="e.g. Bart Simpson" required>
          </p>
          <p>
          <label for="firstName">First Name</label>
          <input id="firstName" type="text" name="firstName" placeholder="e.g. Bart" required>
          </p>
          <p>
          <label for="lastName">Last Name</label>
          <input id="lastName" type="text" name="lastName" placeholder="e.g. Simpson" required>
          </p>
          <p>
          <label for="email">Email</label>
          <input id="email" type="email" name="email" placeholder="e.g. hello@example.com" required>
          </p>
          <p>
          <label for="email2">Confirm Email</label>
          <input id="email2" type="email" name="email2" placeholder="e.g. hello@example.com" required>
          </p>
          <P>
          <label for="password">Password</label>
          <input id="password" type="password" placeholder="Your Password" name="password" required>
          </p>
          <P>
          <label for="password2">Confirm Password</label>
          <input id="password2" type="password" placeholder="Your Password" name="password2" required>
        </p>
          <button type="submit" name="registerButton">SIGN UP</button>
      </form>
    </div>
  </body>
</html>

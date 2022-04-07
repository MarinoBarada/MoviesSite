<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login
    </title>
      <!-- GOOGLE FONTS -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
      <!-- BOX ICONS -->
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <!-- APP CSS -->
      <link rel="stylesheet" href="style/index.css">
</head>
<body>
   <div class="center">
       <h1>Login</h1>
       <form action="includes/login.inc.php" method="post">
            <div class="txt_field">
                <input type="text" name="uid" required autocomplete="on">
                <span></span>
                <label>Username/Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="pass" required >
                <span></span>
                <label>Password</label>
            </div>
            <button type="submit" name="submit" style= 'color: var(--text-color); padding: 0.25rem 1.5rem; text-transform: uppercase; font-size: 1.25rem; font-weight: 700; height: 50px; background:  var(--main-color); cursor: pointer; outline: none; width:100%;'>Login</button>
            <div class="signup_link">
                Not a member? <a href="signup.php">Signup</a>
            </div>
       </form>
   </div>
</body>
</html>

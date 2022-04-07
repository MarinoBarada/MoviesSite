<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Signup
    </title>
      <!-- GOOGLE FONTS -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
      <!-- BOX ICONS -->
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <!-- APP CSS -->
      <link rel="stylesheet" href="style/signup.css">
</head>
<body>
    <div class="center">
        <h1>Signup</h1>
        <form action="includes/signup.inc.php" class="form" id="form" method="post" onsubmit="return Validate();">
            <div class="form-control ">
                <input type="text"  id="username" name="username" autocomplete="off"  required >
                <span></span>
                <label>Username</label>
                <small>Error message</small>
            </div>
            <div class="form-control ">
                <input type="text" required id="email" name="email" autocomplete="off">
                <span></span>
                <label>Email</label>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input type="password" required id="pass" name="pass">
                <span></span>
                <label>Password</label>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input type="password" required id="passc" name="passc">
                <span></span>
                <label>Password check</label>
                <small>Error message</small>
            </div>  
            <button type="submit" name="submit" style= 'color: var(--text-color); padding: 0.25rem 1.5rem; text-transform: uppercase; font-size: 1.25rem; font-weight: 700; height: 50px; background:  var(--main-color); cursor: pointer; outline: none; width:100%;'>Signup</button>
            <div class="login_link">
                Allready a member? <a href="index.php">Login</a>
            </div>
        </form>
    </div>


    <!--APP SKRIPT-->
    <script src="skripts/valid.js"></script>
</body>
</html>
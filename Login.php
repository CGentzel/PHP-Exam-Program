<?php  
session_start(); 
$error = ''; 
if (isset($_POST['login'])) { 
  $username = trim($_POST['username']); 
  $password = $_POST['pw']; 
  // users 
  $allUsers = array(
    "Linda" => "password",
    "Ralph" => "password",
    "Sam" => "password"             //Cadmus Gentzel
  );
  $redirect = 'Quiz 3.php'; 
  //authenticate 
  if(array_key_exists($username, $allUsers) && $password == $allUsers[$username] ) { 
      $_SESSION['authenticated'] = 'Yes'; 
      $_SESSION['user'] = $username; 
      $_SESSION['start'] = time(); 
      header("Location: $redirect"); 
      exit(); 
  } 
  else { 
    $error = 'Invalid username or password.'; 
  } 
} 
?> 
<!DOCTYPE HTML> 
    <html><head> 
    <meta charset="utf-8"> 
    <title>Login Page</title> 
    </head><body> 
        <?php 
        if ($error) { 
          echo "<p>$error</p>"; 
        } 
        ?> 
        <form id="form1" method="post" action=""> 
            <p> <label for="username">Username:</label><input type="text" name="username"></p> 
            <p> <label for="pw">Password:</label> <input type="text" name="pw"> </p> 
            <p> <input name="login" type="submit" value="Log in"> </p> 
        </form> 
</body></html>
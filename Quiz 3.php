<?php 
session_start(); 

if (!isset($_SESSION['authenticated'])) {      // no session value no page
  header('Location: login.php'); 
  exit(); 
} 

//Cadmus Gentzel
if (isset($_POST['logout'])) { 
   
  $_SESSION = array();  
      if (isset($_COOKIE[session_name()])) { 
        setcookie(session_name(), '', time()-86400, '/'); 
      }  
  session_destroy(); 
  header('Location: http://localhost/Login.php'); 
  exit(); 
} 
?> 


<!DOCTYPE HTML> 
<html><head> 
<meta charset=iso-"utf-8"> 
<title>Welcome</title> 
</head> 
    <body> 
        <h1>Welcome <?php echo $_SESSION['user']; ?> to Quiz3</h1> 
        <form id="form1" method="post" action="exam results.php"> 
        <p>1.) I want the following score on this quiz</p>
            
        <p><input type="radio" id="QuestionResult" name="QuestionResult" value="100%"> 100% 
        <input type="radio" id="QuestionResult" name="QuestionResult" value="50%"> 50%
        <input type="radio" id="QuestionResult" name="QuestionResult" value="25%"> 25%
        </p>
        <p> <input name="Submit" type="submit" value="submit"> </p>
        </form> 
    </body> 
</html>
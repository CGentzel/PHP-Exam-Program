<?php 
    session_start(); 
?> 

//Cadmus Gentzel
<!DOCTYPE HTML> 
<html><head> 
<meta charset=iso-"utf-8"> 
<title>Welcome</title> 
</head> 
    <body> 
        <h1>Quiz 3 results for <?php echo $_SESSION['user']; ?></h1> 
        <p><?php echo $_SESSION['user']; ?></p>
        <?php
            $result = $_POST['QuestionResult'];
            echo "Quiz result:" .  $result;
        ?>
        <form id="logoutForm" method="post" action="Login.php"> 
        <p><input name="logout" type="submit" id="logout" value="Log out"></p> 
        </form>
    </body> 
</html>
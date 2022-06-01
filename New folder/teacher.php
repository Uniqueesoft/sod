<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home </title>
<link rel="stylesheet" type="text/css" href="./css/home.css">

<style>
    input{
        width: 280px;
        height:30px;
        background:transparent;
        border-bottom:1px solid gray;
        border-top:none;
        border-left:none;
        border-right:none;
        cursor:pointer;
        color:white;
        font-size:18px;
    }
    input:focus{
        outline:none;

    }
    input[type=submit]{
        background:darkorange;
    }
    .mine{
        background:darkslategrey;
        width:40%;
        cursor:pointer;
        border-radius:20px;
        font-family:tahoma;

    }
    input[type=date]{
        width:180;
    }
</style>

</head>
<body>
    <center>
    <form action="" method="POST">
        <div class="mine">
      <h2><u>Create new account</u> </h2>
      <table>
      <tr><td><input type="text" name="names" placeholder="Enter fullnames"></td></tr>
      <tr><td><input type="text" name="phone" placeholder="Enter Phonenumber"></td></tr>
      <tr><td><input type="text" name="gender" placeholder="Enter gender"></td></tr>
      <tr><td>birthdate:<br><input type="date" name="adress" placeholder="Enter birthdate"></td></tr>
      <tr><td><input type="text" name="position" placeholder="Enter position"></td></tr>
      <tr><td><input type="text" name="adress" placeholder="Enter adress"></td></tr>
      
      <a href="continue.php"><tr><td><input type="submit" value="Continue" name="sbt"></td></tr></a>
      </table>
      </div>



      <?php
      $conn=mysqli_connect('localhost','root','','webmentain');

      if(isset($_POST['sbt'])){


          
        header("location:continue.php");  
      }
      ?>

    </form>
    </center>
</body>
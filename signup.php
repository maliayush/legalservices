<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""  method="POST" style="border:1px solid #ccc">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
      
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form> 
      <?php
      $E= $_POST['email'];
 $P = $_POST['psw'];
 $RP= $_POST['psw-repeat'];
 die("hello");
 //mysqli_conn('hostname','user name','password','database')
//$conn= mysqli_connect('localhost','root','','register');

 //$query="insert into  student(Email,password,Repeat password) value('{$E}','{$P}',{$RP})";
  
 //mysqli_query($conn,$query);

 echo "your Email is ::", $E,"<br>";
 echo "your psw is ::", $P,"<br>";
 echo "your psw-repeat ::", $RP,"<br>";
 
?>
</body>
</html>
</body>
</html>
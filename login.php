<?php
$userexists=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'server.php';
    $name=$_POST['name'];//form input tag
    $password=$_POST['password'];
    $sql="SELECT * FROM interior WHERE name='$name' AND password='$password'";
    $result=mysqli_query($con,$sql);
    
  if($result)
  {$num=mysqli_num_rows($result);
            if($num>0)
            {
            session_start();
            $logged=1;
            $_SESSION['name']=$name;
            header('location: welcome1.php');
            }
            else
      {
            $invalid=1;
            echo '<center><p style="color: #cc0000;background-color:#ff8080">invalid username or password <br>If you do not have create an account first</p></center>';
      }
    }
  }
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"> </script>
      <title>Log In</title>

      <script>
        function formValidation()
        {
            let X=document.form["form1"]["name"].value;
            if(X=="")
            {
                alert("Fill in the details");
                return false;
            }
        }
        function newfunction()
        {
            document.get element by id("form1").reset()

        }

      </script>


        <style>
            @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
 background-repeat: no-repeat;
 background-attachment: fixed;
 background-size: 100% 100%;
 background-image: url('https://img.freepik.com/premium-vector/abstract-template-dark-luxury-premium-background-with-luxury-square-pattern-gold-lighting-lines_545205-385.jpg?w=1060');
}
::selection{
  background: #121316;
  color: #fff;
}
.wrapper{
  width: 380px;
  background: #fff;
  border-radius: 15px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: #fff;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: linear-gradient(-135deg, #131213, #4158d0);
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #4158d0;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #4158d0;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: #fff;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: linear-gradient(-135deg, #1c181b, #4158d0);
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #262626;
  margin-top: 20px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #4158d0;
  text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
}

a {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
          }
          a:hover {
            background-color: #ddd;
            color: black;
          }
          .previous {
            background-color: #231d1d;
            color: rgb(207, 199, 199);
          }
          .round {
            border-radius: 50%;
          }



        </style>
    </head>
   <body>

   <?php
  if($userexists)
  {
    echo '<div class="alert alert-danger" role="button">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>FAILED!</strong><p>Incorrect password</p>
  </div>';
  }
  ?>

<?php
  if($invalid)
  {
    echo '<div class="alert alert-danger" role="button">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>FAILED!</strong><p>Incorrect password</p>
  </div>';
  }
  ?>

  
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <nav class="navbar navbar-expand-sm bg-white navbar-basic">
            <div class="container-fluid" style="justify-content: center;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="collections.php">Collections</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
              </li>
            </ul>
          </div>
        </nav><hr>
      
         <form action="#" method="POST">
            <div class="field">
               <input type="text" name="name" required>
               <label>User Name</label>
            </div>
            <div class="field">
               <input type="password" name="password"required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login"><br>
            </div>
            <a href="index.php" class="previous round">&#8249</a>
         </form>
     <centre> <p>Not Have An Account? <a href="signup.php">SignUp Here </a></p></centre>
      </div>
   </body>
</html>
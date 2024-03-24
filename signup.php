<?php
$userexists=0;
$registered=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'server.php';
$name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM interior WHERE name='$name' AND phonenumber='$phonenumber' AND email='$email' AND password='$password'";
$result=mysqli_query($con,$sql);
if($result)
{
  $num=mysqli_num_rows($result);
  if($num>0){
    $userexists=1;
  }
  else{
    $sql="INSERT INTO interior (name,phonenumber,email,password) VALUES('$name','$phonenumber','$email','$password')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
      $registered=1;
    }
    else{
      die(mysqli_error($con));
    }

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
     <title>Sign Up</title>
     <style>
      *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background-size: 100% 100%;
  background-repeat: no-repeat;
  background-image: url('https://t3.ftcdn.net/jpg/05/40/04/46/360_F_540044645_euvM4jng8cjqkpwT6NkjyfHePtREP3JA.jpg');


}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #e67179, #9b59b6);
 }
 form .button input:hover{
  background: linear-gradient(-135deg, #e67179, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
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
     if($userexists){
      echo'<div class="alert alert-danger alert-dismissible fade show" role="button">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>USER ALREADY EXISITS</strong> 
    </div>';
     }
     if($registered){
      echo'<div class="alert alert-success alert-dismissible fade show">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Successfully Registered!!!</strong> 
    </div>';
     }
  ?>

  
  <div class="container">
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

    <div class="title">Sign Up</div>
    <div class="content">

    <form action="signup.php" method="post">

        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name"placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email"placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phonenumber" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Sign Up">
        </div>
      </form>
    <p>By Clicking the Sign Up Button, you agree to our
      <a href="#">Terms and Conditions</a> and <a href="#">Policy Privacy</a>
    </p>
    <p>Already have an account? <a href="login.php">Login Here</a></p>
       

      <a href="index.php" class="previous round"> Home</a>

    </div>
  </div>
</body>
</html>
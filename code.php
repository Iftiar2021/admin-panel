<?php
include('security.php');

//User Login

if (isset($_POST['login_btn'])) { 
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM admin_info WHERE email='$email' ";
  $query_run = mysqli_query($connection, $query);

      if(!isset($_COOKIE["email"])) {
            $query .= " AND password = '" . ($_POST["password"]) . "'";
    }
  if (mysqli_fetch_array($query_run)) {
    $_SESSION['username'] = $email;
    header("Location: index.php");

    if(!empty($_POST["remember"])) {
                setcookie ("email",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
            } else {
                if(isset($_COOKIE["email"])) {
                    setcookie ("email","");
                }
            }
    } 

  }
  else{
   $_SESSION['status'] = 'Email ID / Password is Invalid';
    header("Location: login.php"); 
  }


//User Register

  if (isset($_POST['register_btn'])) { 
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['confirm_password'];

  if ($password === $cpassword) {
      $query = "INSERT INTO admin_info (email,password) VALUES ('$email','$password')";
      $query_run = mysqli_query($connection, $query);

if ($query_run) {
  $_SESSION['success'] = "Successfully Added New Admin.";
  header('Location: register.php');
}

else{
  $_SESSION['status'] = "Password and Confirm Password Does Not Matched";
  header('Location: register.php');
}
}

}

?>
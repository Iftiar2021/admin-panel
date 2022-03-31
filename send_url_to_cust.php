<?php 
    //session_start();
      include('../database/dbconfig.php');
      include('includes/header.php'); 
      include('includes/navbar.php');
?>

<?php
$user_url = "";

if (isset($_POST['submit'])) {
  $user_url = $_POST["user_url"];
    if (empty($_POST["user_url"])) {
    $user_url = "";
  } else {
    $user_url = test_input($user_url);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)

    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$user_url)) {
      $user_urlErr = "Invalid URL";
    }
  }

  $query = "INSERT INTO product_req (req_url) VALUES ('$user_url')";
      $query_run = mysqli_query($connection, $query);

      if ($query_run) {
 echo '<script>alert("URL Added")</script>';
}

else{
 echo '<script>alert("URL Not Added")</script>';
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




<?php include('includes/scripts.php');
      include('includes/footer.php');
?>
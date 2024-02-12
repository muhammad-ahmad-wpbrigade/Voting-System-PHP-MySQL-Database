<?php
    session_start();
    session_destroy();
?>
<?php
    header('Location: index.php');
    exit(); 
?>
<?php
  $link = $_GET["link"];
  if($link == "logout")
  {
     session_destroy();
  }
?>
<?php
if(isset($_GET['logout'])) {
    // session variable is clear, display logged out message
}
?>


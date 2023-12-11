<?php
$id = $_GET["id"];
if ($id) {
  include("../connection.php");
  $sqlDelete = "DELETE FROM post WHERE id =$id";
  if (mysqli_query($conn, $sqlDelete)) {
    session_start();
        $_SESSION["delete"]= "Post deleted successfully";
    header("Location:index.php");
  }else {
    die("something is not right. Data is not Deleted");
  }
}else {
  echo "Post not found";
}
?>
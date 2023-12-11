<?php
if (isset($_POST["create"])) {
    include("../connection.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);

    $sqlInsert = "INSERT INTO post(date, title, summary, content) VALUES ('$date', '$title', '$summary', '$content')";
    if (mysqli_query($conn, $sqlInsert)){
        session_start();
        $_SESSION["create"]= "Post added successfully";
        header("Location:index.php");
    }else{
      die("data not inserted");
    }
}

?>

<?php
if (isset($_POST["update"])) {
    include("../connection.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    $sqlUpdate = "UPDATE post SET title = '$title', summary = '$summary', content = '$content', date = '$date' WHERE id = $id";
    if (mysqli_query($conn, $sqlUpdate)){
        session_start();
        $_SESSION["update"]= "Post updated successfully";
        header("Location:index.php");
    }else{
      die("data not updated");
    }
}

?>
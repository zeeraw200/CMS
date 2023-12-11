<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./CSS/style.css">
  <title>Simple Blog</title>
</head>
<body>
  <header class="p-4 text-center">
    <h1><a href="index.php" class="text-light text-decoration-none">Simple Blog</a></h1>
  </header>
  <div class="post-list mt-5">
    <div class="container">
    <?php
      $id = $_GET['id'];
      if ($id) {
        include("connection.php");
        $sqlSelect = "SELECT * FROM post WHERE id =$id";
        $result = mysqli_query($conn,$sqlSelect);
        while ($data = mysqli_fetch_array($result)) {
        ?>
            <div class="post bg-light p-4 mt-5">
              <h1><?php echo $data['title']; ?></h1>
              <p><?php echo $data['date']; ?></p>
              <p><?php echo $data['content']; ?></p>
            </div>

        <?php
      }
      }else {
        echo "No post Found";
      }
      
    ?>
    </div>
  </div>

  <div class="footer p-4 mt-4">
    <a href="./admin/index.php" class="text-light text-decoration-none">Admin Panel</a>
  </div>
</body>
</html>
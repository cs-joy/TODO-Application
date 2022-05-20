<?php

include('../db_connection/setting.php');

$query = "SELECT * FROM `todo_application`  WHERE id=2";
$result = mysqli_query($connect, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $title = $row['title'];
    $category = $row['category'];
    $description = $row['description'];
    $writer = $row['writer'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App - Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <div class="alert alert-success" role="alert">
            <?php echo '
                  <h4 class="alert-heading">
                  ' . $title . '
                  </h4>
                ';
            ?>

            <?php echo '
                  <h6 class="alert-heading">
                  ' . $category . '
                  </h6>
                ';
            ?>


            <p>
                <?php echo '
                  <p class="alert-heading">
                  ' . $description . '
                  </p>
                ';
                ?>
            </p>
            <hr>
            <?php echo 'Written by: ' . $writer . ' 
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">UPDATE</a></button>
            '; ?>
        </div>
        
    </div>
</body>

</html>
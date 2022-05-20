<?php

include('../db_connection/setting.php');

$id = $_GET['updateid'];

$query = "SELECT * FROM `todo_application` WHERE id=$id";

$execute = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($execute);
$title = $row['title'];
$category = $row['category'];
$description = $row['description'];
$writer = $row['writer'];

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $writer = $_POST['writer'];

    $sql = "UPDATE `todo_application` SET id=$id, title='$title', category='$category', description='$description', writer='$writer' WHERE id=$id";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "Updated Successfully, Please Reload...";
    } else {
        die(mysqli_error($connect));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container my-5">

        <form method="post">
            <div class="input-group flex-nowrap my-2">
                <span class="input-group-text" id="addon-wrapping">Name</span>
                <input type="text" class="form-control" name="writer" value=<?php echo $title; ?> autocomplete="off" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" value=<?php echo $writer; ?>>
            </div>
            <div class="input-group flex-nowrap my-2">
                <span class="input-group-text" id="addon-wrapping">Title</span>
                <input type="text" class="form-control" name="title" autocomplete="off" placeholder="Title of your blog" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap my-2">
                <span class="input-group-text" id="addon-wrapping">Category Name</span>
                <input type="text" class="form-control" name="category" autocomplete="off" placeholder="Category Of Your Blog" value=<?php echo $category; ?> aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group my-2">
                <span class="input-group-text">Description</span>
                <textarea class="form-control" name="description" autocomplete="off" placeholder="Description Of Your Blog" value=<?php echo $description; ?> aria-label="With textarea"></textarea>
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-primary" name="update">Submit</button>
            </div>
        </form>

    </div>

</body>

</html>
<?php

include('../db_connection/setting.php');

if(isset($_POST['submit'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $writer = $_POST['writer'];

    $sql = "INSERT INTO `todo_application` (`title`, `description`, `category`, `writer`) VALUES('$title', '$description', '$category', '$writer')";
    $execution = mysqli_query($connect, $sql);

    if($execution) {
        echo "Data Inserted!";
    } else {
        die(mysqli_error($connect));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="input-group flex-nowrap my-2">
                <span class="input-group-text" id="addon-wrapping">Name</span>
                <input type="text" class="form-control" name="writer" autocomplete="off" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap my-2">
                <span class="input-group-text" id="addon-wrapping">Title</span>
                <input type="text" class="form-control" name="title" autocomplete="off" placeholder="Title of your blog" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap my-2">
                <span class="input-group-text" id="addon-wrapping">Category Name</span>
                <input type="text" class="form-control" name="category" autocomplete="off" placeholder="Category Of Your Blog" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group my-2">
                <span class="input-group-text">Description</span>
                <textarea class="form-control" name="description" autocomplete="off" placeholder="Description Of Your Blog" aria-label="With textarea"></textarea>
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
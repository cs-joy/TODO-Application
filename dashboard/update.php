<?php

include('../db_connection/setting.php');

$id = $_GET['updateid'];

$query = "SELECT * FROM `todo_application` WHERE id=$id";

$execute = mysqli_query($connect, $query);

if ($execute) {
    $row = mysqli_fetch_assoc($execute);
    $title = $row['title'];
    $category = $row['category'];
    $description = $row['description'];
    $writer = $row['writer'];
}

if (isset($_POST['update'])) {
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

        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">
                <input type="text" class="form-control-plaintext" name="title" value=<?php echo $title; ?>>
            </h4>
            <h6 class="alert-heading">
                <input type="text" class="form-control-plaintext" name="category" value=<?php echo $category; ?>>
            </h6>
            <p>
                <input type="text" class="form-control-plaintext" name="description" value=<?php echo $description; ?>>
            </p>
            <hr>
            <p class="mb-0">
                <input type="text" class="form-control-plaintext" name="writer" value=<?php echo $writer; ?>>
            </p>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-primary" name="update">
                Update
            </button>

        </div>

</body>

</html>
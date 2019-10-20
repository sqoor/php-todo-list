<?php
session_start();
$_SESSION['list'] = $_SESSION['list'] ? $_SESSION['list'] : [];

if (isset($_GET['add'])) {
    $_SESSION['list'][count($_SESSION['list'])] = $_GET['new-item'];
    $_['add'] = null;
} else if (isset($_GET['clear'])) {
    $_SESSION['list'] = [];
    $_['add'] = null;
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>To-Do List</title>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center m-4">To-Do List</h2>
    <div class="d-flex justify-content-end">
        <form method="get" class="form-inline">
            <input class="form-control" type="text" name="new-item" placeholder="Add new task..."/>
            <button class="btn btn-primary ml-2" type="submit" name="add">Add</button>
            <button class="btn btn-danger ml-2" type="submit" name="clear">Clear</button>
        </form>
    </div>
    <ul class="list-group">
        <?php
        for ($i = 0; $i < count($_SESSION['list']); $i++) {
            echo "<li class='list-group-item'>" . $_SESSION['list'][$i] . "</li>";
        }
        ?>
    </ul>
</div>

</body>
</html>
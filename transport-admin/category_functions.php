<?php

include 'db.php';

$name = $_POST['name'];
$description = $_POST['description'];
$get_id = $_GET['id'];


//ADD
if (isset($_POST['add'])) {

    if (!move_uploaded_file($_FILES["file"]["tmp_name"], './img/categories/' . $_FILES["file"]["name"])) {
        echo "Не вдалося завантажити файл";
    }

    $photo_sql = ("INSERT INTO photos (photo) VALUES (?)");
    $photo_query = $pdo->prepare($photo_sql);
    $photo_query->execute([$_FILES['file']['name']]);

    $id_sql = $pdo->prepare("SELECT `id` FROM `photos` WHERE photo = ?");
    $id_sql->execute([$_FILES['file']['name']]);
    $id_array = $id_sql->fetchAll(PDO::FETCH_OBJ);


    $sql = ("INSERT INTO category (Name, Description, Photo) VALUES (?, ?, ?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $description, $id_array[0]->id]);

    if ($query) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}

//READ
$sql = $pdo->prepare("SELECT category.id, `Name`, `Description`, photos.photo FROM category INNER JOIN photos ON category.Photo = photos.id");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);



//UPDATE
if (isset($_POST['edit'])) {

    if (strcasecmp($_FILES["file"]["tmp_name"], '') != 0) {
        if (!move_uploaded_file($_FILES["file"]["tmp_name"], './img/categories/' . $_FILES["file"]["name"])) {
            echo "Не вдалося завантажити файл";
        }

        $photo_sql = ("INSERT INTO photos (photo) VALUES (?)");
        $photo_query = $pdo->prepare($photo_sql);
        $photo_query->execute([$_FILES['file']['name']]);

        $id_sql = $pdo->prepare("SELECT `id` FROM `photos` WHERE photo = ?");
        $id_sql->execute([$_FILES['file']['name']]);
        $id_array = $id_sql->fetchAll(PDO::FETCH_OBJ);


        $sql = ("UPDATE `category` SET Name=?,Description=?,Photo=? WHERE id=?");
        $query = $pdo->prepare($sql);
        $query->execute([$name, $description, $id_array[0]->id, $get_id]);
        if ($query) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
    } else {
        $sql = ("UPDATE `category` SET Name=?,Description=? WHERE id=?");
        $query = $pdo->prepare($sql);
        $query->execute([$name, $description, $get_id]);
        if ($query) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
    }
}


//DELETE
if (isset($_POST['delete'])) {
    $sql = ("DELETE FROM `category` WHERE id=?");
    $query = $pdo->prepare($sql);
    $query->execute([$get_id]);
    if ($query) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}

<?php

include 'db.php';

$name = $_POST['name'];
$purpose = $_POST['purpose'];
$description = $_POST['description'];
$id_category = $_POST['idCategory'];
$get_id = $_GET['id'];


//ADD
if (isset($_POST['add'])) {

    if (!move_uploaded_file($_FILES["file"]["tmp_name"], './img/transport/' . $_FILES["file"]["name"])) {
        echo "Не вдалося завантажити файл";
    }

    $photo_sql = ("INSERT INTO photos (photo) VALUES (?)");
    $photo_query = $pdo->prepare($photo_sql);
    $photo_query->execute([$_FILES['file']['name']]);

    $id_sql = $pdo->prepare("SELECT `id` FROM `photos` WHERE photo = ?");
    $id_sql->execute([$_FILES['file']['name']]);
    $id_array = $id_sql->fetchAll(PDO::FETCH_OBJ);


    $sql = ("INSERT INTO vehicle (Name, Purpose, Description, IdCategory, IdPhoto) VALUES (?, ?, ?, ?, ?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $purpose, $description, $id_category, $id_array[0]->id]);

    if ($query) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}

//READ
$sql = $pdo->prepare("SELECT vehicle.id, vehicle.Name, Purpose, vehicle.Description, photos.photo, category.Name as Category FROM vehicle INNER JOIN photos ON vehicle.IdPhoto = photos.id INNER JOIN category ON vehicle.IdCategory = category.id");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);

$categorySql = $pdo->prepare("SELECT id, Name FROM `category`");
$categorySql->execute();
$category = $categorySql->fetchAll(PDO::FETCH_OBJ);



//UPDATE
if (isset($_POST['edit'])) {

    if (strcasecmp($_FILES["file"]["tmp_name"], '') != 0) {
        if (!move_uploaded_file($_FILES["file"]["tmp_name"], './img/transport/' . $_FILES["file"]["name"])) {
            echo "Не вдалося завантажити файл";
        }

        $photo_sql = ("INSERT INTO photos (photo) VALUES (?)");
        $photo_query = $pdo->prepare($photo_sql);
        $photo_query->execute([$_FILES['file']['name']]);

        $id_sql = $pdo->prepare("SELECT `id` FROM `photos` WHERE photo = ?");
        $id_sql->execute([$_FILES['file']['name']]);
        $id_array = $id_sql->fetchAll(PDO::FETCH_OBJ);


        $sql = ("UPDATE vehicle SET Name=?, Purpose=?, Description=?, IdCategory=?, IdPhoto=? WHERE id=?");
        $query = $pdo->prepare($sql);
        $query->execute([$name, $purpose, $description, $id_category, $id_array[0]->id, $get_id]);
        if ($query) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
    } else {
        $sql = ("UPDATE vehicle SET Name=?, Purpose=?, Description=?, IdCategory=? WHERE id=?");
        $query = $pdo->prepare($sql);
        $query->execute([$name, $purpose, $description, $id_category, $get_id]);
        if ($query) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
    }
}


//DELETE
if (isset($_POST['delete'])) {
    $sql = ("DELETE FROM `vehicle` WHERE id=?");
    $query = $pdo->prepare($sql);
    $query->execute([$get_id]);
    if ($query) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}

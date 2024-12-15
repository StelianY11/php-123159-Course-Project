<?php

require_once('../functions.php');
require_once('../db.php');


// debug($_POST);
// exit;

$title = trim($_POST['title'] ?? '');
$price = trim($_POST['price'] ?? '');
$image = trim($_POST['image'] ?? '');

if (mb_strlen($title) == 0 || mb_strlen($price) == 0) {
    $_SESSION['flash']['message']['type'] = 'danger';
    $_SESSION['flash']['message']['text'] = 'Моля въведете всички полета!';

    header('Location: ../index.php?page=add_product');
    exit;
}

if (mb_strlen($image) == 0) {
    $_SESSION['flash']['message']['type'] = 'danger';
    $_SESSION['flash']['message']['text'] = 'Моля въведете изображение!';

    header('Location: ../index.php?page=add_product');
    exit;
}

    $query = "INSERT INTO products (title, price, image) VALUES (:title, :price, :image)";
    $stmt = $pdo->prepare($query);

    $params = [
        ":title" => $title,
        ':price' => $price,
        ':image' => $image,
    ];

    if ($stmt->execute($params)) {
        $_SESSION['flash']['message']['type'] = 'success';
        $_SESSION['flash']['message']['text'] = 'Продукта е добавен успешно!';

        header('Location: ../index.php?page=add_product');
        exit;
    } else {
        $_SESSION['flash']['message']['type'] = 'danger';
        $_SESSION['flash']['message']['text'] = 'Възникна грешка при добавянето на продукта!';

        header('Location: ../index.php?page=add_product');
        exit;

}

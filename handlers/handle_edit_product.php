<?php

require_once('../functions.php');
require_once('../db.php');

if (!is_admin()) {
    $_SESSION['flash']['message']['type'] = 'warning';
    $_SESSION['flash']['message']['text'] = 'Нямате достъп до тази страница!';
    header('Location: ../index.php?page=home');
    exit;
}

$title = trim($_POST['title'] ?? '');
$price = trim($_POST['price'] ?? '');
$image = trim($_POST['image'] ?? '');
$product_id = intval($_POST['id'] ?? 0);

if (mb_strlen($title) == 0 || mb_strlen($price) == 0 || $product_id <= 0) {
    $_SESSION['flash']['message']['type'] = 'danger';
    $_SESSION['flash']['message']['text'] = 'Моля попълнете всички полета!';

    header('Location: ../index.php?page=edit_product&id=' . $product_id);
    exit;
}

if (mb_strlen($image) == 0) {
    $_SESSION['flash']['message']['type'] = 'danger';
    $_SESSION['flash']['message']['text'] = 'Моля въведете изображение!';

    header('Location: ../index.php?page=add_product');
    exit;
}

$query = "
        UPDATE products
        SET title = :title, price = :price, image = :image
        WHERE id = :id
    ";

$stmt = $pdo->prepare($query);
$params = [
    ':title' => $title,
    ':price' => $price,
    ':image' => $image,
    ':id' => $product_id
];

if ($stmt->execute($params)) {
    $_SESSION['flash']['message']['type'] = 'success';
    $_SESSION['flash']['message']['text'] = 'Продуктът е редактиран успешно!';
} else {
    $_SESSION['flash']['message']['type'] = 'danger';
    $_SESSION['flash']['message']['text'] = 'Възникна грешка при редакцията на продукта!';
}

header('Location: ../index.php?page=edit_product&id=' . $product_id);
exit;

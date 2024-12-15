<?php
    // добавяне/редакция на продукт
?>

<form class="form-container border rounded p-4 w-50 mx-auto mt-5" method="POST" action="./handlers/handle_add_product.php" enctype="multipart/form-data">
    <h3 class="text-center">Добави продукт</h3>
    <div class="mb-3">
        <label for="title" class="form-label">Заглавие:</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Цена:</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Изображение:</label>
        <input type="text" class="form-control" id="image" name="image" accept="image/*">
    </div>
    <button type="submit" class="btn btn-brown">Добави</button>
</form>

<style>
    .btn-brown {
        background-color: #D2B48C; 
        color: #fff; 
        border: none;
        padding: 10px 20px;
    }

    .btn-brown:hover {
        background-color: #A67C52; 
        color: #fff; 
    }

    .form-container {
        background-color: #fff; 
        border: 1px solid #ddd; 
    }

    .form-label {
        font-weight: 500; 
    }

    .form-control {
        border-radius: 5px; 
        padding: 10px; 
    }

    h3 {
        color: #333; 
    }
</style>

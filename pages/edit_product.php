<?php
    // добавяне/редакция на продукт
    $product_id = intval($_GET['id'] ?? 0);

    if ($product_id > 0) {
        $query = "SELECT * FROM products WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute([':id' => $product_id]);
        $product = $stmt->fetch();
    }
?>

<form class="border rounded p-4 w-50 mx-auto mt-5" method="POST" action="./handlers/handle_edit_product.php" enctype="multipart/form-data">
    <h3 class="text-center">Редактирай продукт</h3>
    <div class="mb-3">
        <label for="title" class="form-label">Заглавие:</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $product['title'] ?? '' ?>">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Цена:</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" value="<?php echo $product['price'] ?? '' ?>">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Изображение:</label>
        <input type="text" class="form-control" id="image" name="image" value="<?php echo $product['image'] ?? '' ?>" accept="image/*">
    </div>

    <div class="mb-3">
        <img class="img-fluid" src="<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>" style="max-width: 200px; height: auto;">
    </div>
    <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
    <button type="submit" class="btn btn-brown mx-auto">Редактирай</button>
</form>

<style>
    /* Button Color for form */
    .btn-brown {
        background-color: #D2B48C; /* Light brown (Tan) */
        color: #fff; /* White text */
        border: none;
        padding: 10px 20px;
    }

    .btn-brown:hover {
        background-color: #A67C52; /* Slightly darker brown on hover */
        color: #fff; /* Ensure text stays white on hover */
    }

    /* Image Styling */
    .img-fluid {
        max-width: 200px; /* Set a max-width to make the image smaller */
        height: auto; /* Keep the aspect ratio intact */
    }
</style>

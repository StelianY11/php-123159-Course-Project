<?php
    // страница продукти
    $products = [];

    $search = $_GET['search'] ?? '';

    // правим заявка към базата данни
    $query = "SELECT * FROM products WHERE title LIKE :search";
    $stmt = $pdo->prepare($query);
    $stmt->execute([':search' => "%$search%"]);
    while ($row = $stmt->fetch()) {
        $fav_query = "SELECT id FROM favorite_products_users WHERE user_id = :user_id AND product_id = :product_id";
        $fav_stmt = $pdo->prepare($fav_query);
        $fav_params = [
            ':user_id' => $_SESSION['user_id'] ?? 0,
            ':product_id' => $row['id']
        ];
        $fav_stmt->execute($fav_params);
        $row['is_favorite'] = $fav_stmt->fetch() ? 1 : 0;

        $products[] = $row;
    }

    
?>

<div class="row mb-4">
    <form class="w-100" method="GET">
        <div class="input-group">
            <input type="hidden" name="page" value="products">
            <input type="text" class="form-control" placeholder="Търси продукт" name="search" value="<?php echo $search ?>">
            <button class="btn btn-brown" type="submit">Търсене</button>
        </div>
    </form>
    <?php
        if (isset($_COOKIE['last_search'])) {
            echo '
                <div class="alert alert-info w-100" role="alert">
                    Последно търсене: ' . $_COOKIE['last_search'] . '
                </div>
            ';
        }
    ?>
</div>

<?php
    if (count($products) == 0) {
        echo '
            <div class="alert alert-warning w-100" role="alert">
                Няма намерени продукти
            </div>
        ';
    } else {
        echo ' <div class="d-flex flex-wrap justify-content-between">';
        foreach($products as $product) {
            $fav_btn = $edit_delete_buttons = '';
            if (isset($_SESSION['user_name'])) {
                if ($product['is_favorite'] == '1') {
                    $fav_btn = '
                        <div class="card-footer text-center">
                            <button class="btn btn-danger btn-sm remove-favorite" data-product="' . $product['id'] . '">Премахни от любими</button>
                        </div>
                    ';
                } else {
                    $fav_btn = '
                        <div class="card-footer text-center">
                            <button class="btn btn-primary btn-sm add-favorite" data-product="' . $product['id'] . '">Добави в любими</button>
                        </div>
                    ';
                }
            }

            if (is_admin()) {
                $edit_delete_buttons = '
                    <div class="card-header d-flex flex-row justify-content-between">
                        <a href="?page=edit_product&id=' . $product['id'] . '" class="btn btn-sm btn-edit">Редактирай</a>
                        <form method="POST" action="./handlers/handle_delete_product.php">
                            <input type="hidden" name="id" value="' . $product['id'] . '">
                            <button type="submit" class="btn btn-sm btn-delete">Изтрий</button>
                        </form>
                    </div>
               ';
            }

            echo '
                <div class="card mb-4" style="width: 18rem; border: 1px solid #D2B48C;">
                    ' . $edit_delete_buttons . '
                    <img src="' . htmlspecialchars($product['image']) . '" class="card-img-top" alt="Product Image" style="height: 200px; object-fit: cover;">
                    <div class="card-body" style="background-color: #f8f4e1;">
                        <h5 class="card-title" style="color: #6c4f3d;">' . htmlspecialchars($product['title']) . '</h5>
                        <p class="card-text" style="color: #6c4f3d;">' . htmlspecialchars($product['price']) . ' лв.</p>
                    </div>
                    ' . $fav_btn . '
                </div>
            ';
        }
        echo '</div>';
    }
?>

<style>
    /* Styling for search form */
    .input-group .form-control {
        border: 1px solid #D2B48C; /* Light brown border */
        background-color: #f8f4e1; /* Light beige background */
        color: #6c4f3d; /* Dark brown text color */
    }

    .btn-brown {
        background-color: #D2B48C; /* Light brown */
        color: white;
        border: none;
    }

    .btn-brown:hover {
        background-color: #A67C52; /* Darker brown */
    }

    /* Product card styling */
    .card {
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-header, .card-body {
        background-color: #f8f4e1; /* Light beige background for card */
    }

    .card-title, .card-text {
        color: #6c4f3d; /* Dark brown text color */
    }

    /* Edit Button */
    .btn-edit {
        background-color: #B8860B; /* Muted tan color */
        color: white;
        border: none;
    }

    .btn-edit:hover {
        background-color: #8B6B1F; /* Darker tan */
    }

    /* Delete Button */
    .btn-delete {
        background-color: #C83E44; /* Dark red for Delete */
        color: white;
        border: none;
    }

    .btn-delete:hover {
        background-color: #9C2E36; /* Slightly darker red on hover */
    }

    /* General button styles */
    .btn-primary, .btn-danger, .btn-warning {
        background-color: #D2B48C; /* Light brown */
        color: white;
        border: none;
    }

    .btn-primary:hover, .btn-danger:hover, .btn-warning:hover {
        background-color: #A67C52; /* Darker brown on hover */
    }

    .alert-info {
        background-color: #D2B48C; /* Light brown */
        color: #6c4f3d;
        border-color: #6c4f3d;
    }

    .alert-warning {
        background-color: #FFEDCC;
        color: #6c4f3d;
    }

    .card-footer {
        background-color: #f8f4e1;
    }
</style>

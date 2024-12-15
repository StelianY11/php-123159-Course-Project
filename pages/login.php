<?php
    // страница login
?>

<form class="border rounded p-4 w-50 mx-auto mt-5" method="POST" action="./handlers/handle_login.php">
    <h3 class="text-center mb-4">Вход в системата</h3>
    <div class="mb-3">
        <label for="email" class="form-label">Имейл</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $_COOKIE['user_email'] ?? '' ?>" placeholder="Въведете вашия имейл" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Парола</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Въведете вашата парола" required>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-brown w-50">Вход</button>
    </div>
</form>

<style>
    /* General form styling */
    .form-label {
        font-weight: 600;
        color: #6c4f3d; /* Dark brown for text */
    }

    .form-control {
        border: 1px solid #D2B48C; /* Light brown border */
        padding: 10px;
        border-radius: 5px;
        background-color: #f8f4e1; /* Light beige background */
    }

    /* Button styling (brown theme) */
    .btn-brown {
        background-color: #D2B48C; /* Light brown (Tan) */
        color: #fff; /* White text */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
    }

    .btn-brown:hover {
        background-color: #A67C52; /* Slightly darker brown on hover */
    }

    /* Add space between elements */
    .mt-5 {
        margin-top: 5rem !important;
    }

    .mb-4 {
        margin-bottom: 1.5rem !important;
    }

    .d-flex {
        display: flex;
        justify-content: center;
    }
</style>

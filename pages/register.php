<?php
    // страница register
?>

<form class="border rounded p-4 w-50 mx-auto mt-5" method="POST" action="./handlers/handle_register.php">
    <h3 class="text-center mb-4">Регистрация</h3>
    <div class="mb-3">
        <label for="names" class="form-label">Имена</label>
        <input type="text" class="form-control" id="names" name="names" value="<?php echo $flash['data']['names'] ?? '' ?>" placeholder="Въведете вашето име" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Имейл</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $flash['data']['email'] ?? '' ?>" placeholder="Въведете вашия имейл" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Парола</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Въведете паролата" required>
    </div>
    <div class="mb-3">
        <label for="repeat_password" class="form-label">Повтори парола</label>
        <input type="password" class="form-control" id="repeat_password" name="repeat_password" placeholder="Повторете паролата" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Тип на потребителя</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="is_admin" id="user" value="0" checked>
            <label class="form-check-label" for="user">Потребител</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="is_admin" id="admin" value="1">
            <label class="form-check-label" for="admin">Администратор</label>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-brown w-50">Регистрирай се</button>
    </div>
</form>

<style>
    .form-label {
        font-weight: 600;
        color: #6c4f3d; 
    }

    .form-control {
        border: 1px solid #D2B48C; 
        padding: 10px;
        border-radius: 5px;
        background-color: #f8f4e1; 
    }

    .btn-brown {
        background-color: #D2B48C; 
        color: #fff; 
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
    }

    .btn-brown:hover {
        background-color: #A67C52; 
    }

    .form-check-input {
        background-color: #D2B48C;
        border-color: #D2B48C;
        width: 20px;
        height: 20px;
        margin-top: 3px;
    }

    .form-check-input:checked {
        background-color: #D2B48C; 
        border-color: #D2B48C;
    }

    .form-check-input:focus {
        border-color: #D2B48C;
        box-shadow: 0 0 0 0.2rem rgba(108, 79, 61, 0.25);
    }

    .form-check-label {
        font-size: 16px;
        color: #D2B48C;
    }

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

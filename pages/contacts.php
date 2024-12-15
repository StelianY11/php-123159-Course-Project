<?php
// страница контакти

if (isset($_POST['submit'])) {
    $errors = [];
    foreach ($_POST as $key => $value) {
        if ($key != 'submit' && empty($value)) {
            $errors[] = "Полето $key не е попълнено!";
        }
    }

    if (count($errors) == 0) {
        echo '
            <div class="alert alert-success" role="alert">
                Здравейте, ' . $_POST['name'] . '! Вашето съобщение е изпратено успешно! Моля, очаквайте отговор на ' . $_POST['email'] . '!
            </div>
        ';
    } else {
        echo '
            <div class="alert alert-danger" role="alert">
                ' . implode('<br>', $errors) . '
            </div>
        ';
    }

}
?>
<h1 class="text-center">Свържете се с нас</h1>
<form method="POST" class="mt-4">
    <div class="mb-3">
        <label for="name" class="form-label">Имена</label>
        <input type="text" class="form-control" id="name" placeholder="Вашето име" name="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Имейл</label>
        <input type="email" class="form-control" id="email" placeholder="Вашият имейл" name="email">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Съобщение</label>
        <textarea class="form-control" id="message" rows="4" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-custom-brown btn-lg" name="submit">Изпрати</button>
</form>

<style>
    .btn-custom-brown {
        background-color: #D2B48C; 
        color: #fff; 
        border: none;
    }

    .btn-custom-brown:hover {
        background-color: #A67C52; 
        color: #fff; 
    }
</style>

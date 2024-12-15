<?php
// страница 404 not found
http_response_code(404);
?>

<div class="d-flex justify-content-center align-items-center pt-4" style="min-height: 60vh; background-color: #F5F5DC;">
    <div class="text-center">
        <h1 class="display-3" style="color: #D2B48C; font-weight: bold;">Грешка 404</h1>
        <p class="lead" style="color: #6c4f3d;">Страницата не е намерена ;(</p>
        <div class="mt-4">
            <a href="?page=home" class="btn btn-brown btn-lg">Върни се на началната страница</a>
        </div>
        <div class="mt-4">
            <img src="https://http.cat/images/404.jpg" alt="404 Image" class="img-fluid" style="max-width: 80%; height: auto;">
        </div>
    </div>
</div>

<style>
    /* Styling for brown buttons */
    .btn-brown {
        background-color: #D2B48C; /* Light brown */
        color: white;
        border: none;
    }

    .btn-brown:hover {
        background-color: #A67C52; /* Darker brown on hover */
    }

    /* Smaller container and centered content */
    .d-flex {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-top: 50px;
    }

    /* Adjust font size for better fit */
    .display-3 {
        font-size: 2.5rem; /* Smaller font size for the header */
    }

    .lead {
        font-size: 1.2rem; /* Slightly smaller text for the message */
    }

    .btn-lg {
        font-size: 1.1rem; /* Slightly smaller button text */
    }

    /* Ensure image size stays compact and centered */
    .img-fluid {
        max-width: 80%;
        height: auto;
    }
</style>

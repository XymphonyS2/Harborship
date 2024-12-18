<?php
require_once "./actions/c-login.php";

if (!empty($_SESSION['harborship'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .login-container {
            min-width: 500px;
            max-width: 500px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .masuk-btn {
            background-color: #ffc107;
            border: none;
            padding: 12px;
            width: 100%;
            font-weight: 500;
            color: white !important;
        }

        .masuk-btn:hover {
            background-color: #ffb300;
            color: white !important;
        }

        .forgot-password {
            color: #757575;
            text-decoration: none;
            font-size: 14px;
        }

        .signup-text {
            color: #757575;
            font-size: 14px;
        }

        .signup-link {
            color: #0d6efd;
            text-decoration: none;
        }
    </style>
</head>

<body">
    <div class="bg-light">
        <div class="d-flex flex-column align-items-center w-100 mx-auto p-4 justify-content-center mt-4" style="background: white;">
            <img src="./assets/img/ProyekBaru.svg" alt="logo" style="max-width: 200px; width: 100%;" />
        </div>
    </div>

    <div class="container">
        <div class="login-container">
            <h2 class="text-center mb-4">Masuk</h2>
            <p class="signup-text text-center mb-4">
                Belum punya akun? <a href="./register.php" class="signup-link">Daftar sekarang</a>
            </p>

            <form method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email"
                        required>
                    <div class="form-text">contoh harborship@hotmail.com</div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Kata Sandi"
                        required>
                </div>

                <div class="mb-3 text-end">
                    <a href="#" class="forgot-password">Lupa Kata Sandi?</a>
                </div>

                <button type="submit" class="btn masuk-btn text-white">MASUK</button>
            </form>
        </div>



        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
        <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
        <?php
        if (isset($_SESSION['sweet_harbor']['trigger'])) {
        ?>
            <script>
                swal({
                    type: "<?= $_SESSION['sweet_harbor']['trigger'] ?>",
                    title: "<?= $_SESSION['sweet_harbor']['title'] ?>",
                    text: "<?= $_SESSION['sweet_harbor']['text'] ?>",
                    confirmButtonText: "Okay"
                });
            </script>
        <?php
            unset($_SESSION['sweet_harbor']);
        }
        ?>
        </body>

</html>
<?php
require 'koneksi.php';


<strong class="header-main__link hidden-sm" data-controller="login" data-action="click->login#register">
    <?php 
        session_start();
        echo isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : 'Sign Up'; 
    ?>
</strong>
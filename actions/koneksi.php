<?php
session_start();
// Membuat koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "harborship");

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    function query($statement)
    {
        global $conn;
        return mysqli_query($conn, $statement);
    }

    function fetch($statement)
    {
        return mysqli_fetch_array($statement);
    }

    function rows($statement)
    {
        return mysqli_num_rows($statement);
    }

    function myData($statement)
    {
        return $_SESSION['harborship'][$statement];
    }

    function alert_harbor($trigger, $title, $text) {
        $_SESSION['sweet_harbor']['trigger'] = $trigger;
        $_SESSION['sweet_harbor']['title'] = $title;
        $_SESSION['sweet_harbor']['text'] = $text;
    }
}

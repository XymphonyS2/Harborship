<?php
// Set up database connection
$host = 'localhost'; 
$dbname = 'harbroship';
$username = 'root'; 
$password = ''; 

// Create a PDO connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Retrieve form data
$originPort = $_POST['originPort'] ?? null;
$destinationPort = $_POST['destinationPort'] ?? null;
$serviceClass = $_POST['serviceClass'] ?? null;
$userType = $_POST['userType'] ?? null;
$checkinDate = $_POST['checkinDate'] ?? null;
$checkinTime = $_POST['checkinTime'] ?? null;
$lansia = $_POST['lansia'] ?? 0;
$dewasa = $_POST['dewasa'] ?? 0;
$anak = $_POST['anak'] ?? 0;
$bayi = $_POST['bayi'] ?? 0;

// Validate required fields
if (!$originPort || !$destinationPort || !$serviceClass || !$userType || !$checkinDate || !$checkinTime) {
    die("Semua field yang ditandai wajib harus diisi.");
}

try {
    // Insert ticket search data
    $insertQuery = "INSERT INTO ticket_search (
        origin_port_id, 
        destination_port_id, 
        service_class_id, 
        user_type_id, 
        checkin_date, 
        checkin_time, 
        jumlah_lansia, 
        jumlah_dewasa, 
        jumlah_anak, 
        jumlah_bayi
    ) VALUES (
        :origin_port, 
        :destination_port, 
        :service_class, 
        :user_type, 
        :checkin_date, 
        :checkin_time, 
        :lansia, 
        :dewasa, 
        :anak, 
        :bayi
    )";

    $stmt = $pdo->prepare($insertQuery);
    $stmt->bindParam(':origin_port', $originPort);
    $stmt->bindParam(':destination_port', $destinationPort);
    $stmt->bindParam(':service_class', $serviceClass);
    $stmt->bindParam(':user_type', $userType);
    $stmt->bindParam(':checkin_date', $checkinDate);
    $stmt->bindParam(':checkin_time', $checkinTime);
    $stmt->bindParam(':lansia', $lansia);
    $stmt->bindParam(':dewasa', $dewasa);
    $stmt->bindParam(':anak', $anak);
    $stmt->bindParam(':bayi', $bayi);

    $stmt->execute();

    // Redirect or show success message
    echo "Pencarian tiket berhasil disimpan!";
    
    // Optional: Redirect to a results or confirmation page
    // header("Location: results.php");
    // exit();

} catch (PDOException $e) {
    // Handle potential errors
    echo "Error: " . $e->getMessage();
}
?>
require 'koneksi.php';


<strong class="header-main__link hidden-sm" data-controller="login" data-action="click->login#register">
    <?php 
        session_start();
        echo isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : 'Sign Up'; 
    ?>
</strong>


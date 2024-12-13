include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil dan sanitasi data dari form
    $originPort = mysqli_real_escape_string($koneksi, $_POST['originPort']);
    $destinationPort = mysqli_real_escape_string($koneksi, $_POST['destinationPort']);
    // dan seterusnya untuk setiap input

    // Query database atau lakukan logika bisnis lainnya
    // Misalnya, simpan data ke database atau cek ketersediaan

    // Redirect atau kirimkan output
    header('Location: successPage.html'); // Atau tampilkan pesan kesalahan
    exit();
}
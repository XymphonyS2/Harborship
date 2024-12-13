include 'koneksi.php'; // Sertakan file koneksi

// Query untuk mengambil daftar pelabuhan
$query = "SELECT id_rute, pelabuhan_asal, pelabuhan_tujuan FROM rute";
$result = mysqli_query($koneksi, $query);

$pelabuhanAsal = [];
$pelabuhanTujuan = [];

while ($row = mysqli_fetch_assoc($result)) {
    $pelabuhanAsal[$row['id_rute']] = $row['pelabuhan_asal'];
    $pelabuhanTujuan[$row['id_rute']] = $row['pelabuhan_tujuan'];
}

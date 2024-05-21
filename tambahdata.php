<?php

// Connect to database (replace with your connection details)
$servername = "localhost";
$username = "printer";
$password = "";
$dbname = "";

$conn = mysqli_connect("localhost","printer","","");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$nama_merek = $_POST["nama_merek"];
$warna = $_POST["warna"];
$jumlah = $_POST["jumlah"];

// Insert data into database (modify query based on your table structure)
$sql = "INSERT INTO produk (nama_merek, warna, jumlah) VALUES ('$nama_merek', '$warna', '$jumlah')";

if (mysqli_query($conn, $sql)) {
  // Data inserted successfully
  echo "<script>alert('Data produk berhasil ditambahkan!'); window.location.href='index.php';</script>";
} else {
  // Error inserting data
  echo "<script>alert('Gagal menambahkan data: " . mysqli_error($conn) . "'); window.location.href='tambah_data.php';</script>";
}

mysqli_close($conn);

?>

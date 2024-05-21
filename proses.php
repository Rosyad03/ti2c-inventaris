<?php

// Array data produk (replace with database connection later)
$produk = array(
    array(
        "no" => 1,
        "nama_merek" => "CANON",
        "warna" => "HITAM",
        "jumlah" => 20
    ),
    array(
        "no" => 2,
        "nama_merek" => "HP C33XP",
        "warna" => "BIRU",
        "jumlah" => 100
    ),
    array(
        "no" => 3,
        "nama_merek" => "PIXMA MP237",
        "warna" => "HITAM",
        "jumlah" => 200
    )
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <style>
        body {
            background-color: #f0f0f0; /* Background color */
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto; /* Center the table */
            background-color: #fff; /* White background for the table */
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f0f0f0;
        }

        .tambah-data {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .tambah-data a {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h1>Data Produk</h1>

<div class="tambah-data">
    <a href="tambah_data.php">Tambah Data</a>
</div>

<table>
    <tr>
        <th>No</th>
        <th>Nama Merek</th>
        <th>Warna</th>
        <th>Jumlah</th>
    </tr>
    <?php foreach ($produk as $data) { ?>
        <tr>
            <td><?php echo $data["no"]; ?></td>
            <td><?php echo $data["nama_merek"]; ?></td>
            <td><?php echo $data["warna"]; ?></td>
            <td><?php echo $data["jumlah"]; ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>

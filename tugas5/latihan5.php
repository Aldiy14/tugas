<?php

// Definisikan associative array dengan 10 elemen dan 5 field data
$data = array(
    array(
        "no" => "01",
        "foto" => "<img src = '1.jpeg' width ='190' height = '150'>", 
        "Nama" => "Edward jenner", 
        "deskripsi" => "<p>Ia adalah tokoh penemu dunia di bidang medis yang menemukan vaksin untuk mengatasi cacar. Kini, vaksin terus dikembangkan. Sampai yang terakhir adalah vaksin untuk virus Covid-19.</p>",
        "Tahun ditemukan" => "Tahun 1796", 
        "kebangsaan" => "Inggris"),

    array(
     "no" => "02",   
     "foto" => "<img src = '2.jpeg' width ='190' height = '150'>",
     "Nama" => "William T.G mortoon", 
     "deskripsi" => "<p>Penemu anestesi atau bius  Hingga kini, anestesi masih terus dikembangkan untuk membantu meringankan rasa sakit saat dilakukan proses operasi.</p>",
     "Tahun ditemukan" => "tahun 1846", 
     "kebangsaan" => "Amerika"),

    array(
     "no" => "03",   
     "foto" => "<img src = '3.jpeg' width ='190' height = '150'>",
     "Nama" => "Louis pasteur", 
     "deskripsi" => " <p>menemukan organisme mikroskopik tertentu atau patogen . Cara ini membantu mencegah epidemi yang menyebabkan ribuan korban akibat wabah penyakit menular</p>",
     "Tahun ditemukan" => "tahun 1846", 
     "kebangsaan" => "Perancis"),

    array(
     "no" => "04",   
     "foto" => "<img src = '4.jpeg' width ='190' height = '150'>",
     "Nama" => "Wilhelm conrad rontgen", 
     "deskripsi" => "penemu X-Ray yang ditemukan secara tidak sengaja oleh Wilhelm Rontgen. Temuan ini menjadi salah satu temuan terbesar di bidang medis.", 
     "Tahun ditemukan" => "tahun 1895", 
     "kebangsaan" => "Jerman"),

    array(
     "no" => "05",   
     "foto" => "<img src = '5.jpeg' width ='190' height = '150'>",
     "Nama" => "Alexander fleming", 
     "deskripsi" => "penemu Antibiotik yang kita minum saat ini,  Hingga kini antibiotik terus dikembangkan untuk melawan bakteri yang resisten terhadap antibiotik yang sudah ada.", 
     "Tahun ditemukan" => "tahun 1928", 
     "kebangsaan" => "Skotlandia"),

    array(
     "no" => "06",   
     "foto" => "<img src = '6.jpeg' width ='190' height = '150'>",
     "Nama" => "Dr.joseph murray", 
     "deskripsi" => "penemu transplantasi organ", 
     "Tahun ditemukan" => "tahun 1954", 
     "kebangsaan" => " Amerika"),

    array(
     "no" => "07",   
     "foto" => "<img src = '7.jpeg' width ='190' height = '150'>",
     "Nama" => "Rene laennec", 
     "deskripsi" => "penemu stetoskop",  
     "Tahun ditemukan" => "tahun 1816", 
     "kebangsaan" => "Perancis"),

    array(
     "no" => "08",   
     "foto" => "<img src = '8.jpeg' width ='190' height = '150'>",
     "Nama" => "Galileo galilei", 
     "deskripsi" => "penemu termometer untuk mengukur suhu tubuh", 
     "Tahun ditemukan" => "tahun 1593", 
     "kebangsaan" => "Italia"),

    array(
     "no" => "09",   
     "foto" => "<img src = '9.jpeg' width ='190' height = '150'>",
     "Nama" => "Joseph lister", 
     "deskripsi" => "penemu sterilisasi sebelum melakukan operasi", 
     "Tahun ditemukan" => "tahun 1940", 
     "kebangsaan" => "Britania raya"),

    array(
     "no" => "10",   
     "foto" => "<img src = '10.jpeg' width ='190' height = '150'>",
     "Nama" => "Marie curie", 
     "deskripsi" => "penemu kemoterapi yang hingga saat ini dilakukan untuk pengobatan penyakit kanker", 
     "Tahun ditemukan" => "tahun 1900", 
     "kebangsaan" => "Polandia"),
);
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        .foto {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php
    // Menampilkan data dalam bentuk tabel HTML
    
echo "<table border='1'>";
echo "<tr><th>No</th><th>FOTO</th><th>NAMA </th><th>DESKRIPSI</th><th>TAHUN DITEMUKAN</th><th>KEBANGSAAN</th></tr>";

// Menggunakan loop untuk menampilkan data ke dalam tabel
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row['no'] . "</td>";
    echo "<td>" . $row['foto'] . "</td>";
    echo "<td>" . $row['Nama'] . "</td>";
    echo "<td>" . $row['deskripsi'] . "</td>";
    echo "<td>" . $row['Tahun ditemukan'] . "</td>";
    echo "<td>" . $row['kebangsaan'] . "</td>";
    echo "</tr>";
}

echo "</table>";


    ?>

</body>
</html>




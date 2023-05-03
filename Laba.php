<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perkalian</title>
</head>
<body>
    <?php
        // Inisialisasi variabel dengan nilai yang diberikan
        $namaBarang = "Kaos Olahraga";
        $hargaBeli = 30000;
        $hargaJual = 40000;
        $pajak = 0.1;
        $jumlahBarang = 5;

        // Menghitung total pembelian, total penjualan, dan laba kotor
        $totalPembelian = $hargaBeli * $jumlahBarang;
        $totalPenjualan = $hargaJual * $jumlahBarang;
        $labaKotor = $totalPenjualan - $totalPembelian;

        // Menghitung laba bersih setelah dipotong pajak
        // Laba bersih adalah laba kotor dikurangi pajak
        $labaBersih = $labaKotor - ($labaKotor * $pajak);

        // Menampilkan hasil dengan statement teks
        echo "Nama Barang: " . $namaBarang . "<br>";
        echo "Total Pembelian: " . $totalPembelian . "<br>";
        echo "Total Penjualan: " . $totalPenjualan . "<br>";
        echo "Laba Kotor: " . $labaKotor . "<br>";
        echo "Laba Bersih: " . $labaBersih . "<br>";
    ?>

</body>
</html>
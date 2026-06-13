<?php

require_once __DIR__ . "/Koneksi.php";
require_once __DIR__ . "/TiketRegular.php";
require_once __DIR__ . "/TiketIMAX.php";
require_once __DIR__ . "/TiketVelvet.php";

$koneksi = new Koneksi();
$conn = $koneksi->getConnection();

$query = "SELECT * FROM tabel_tiket ORDER BY jenis_studio, id_tiket ASC";
$result = $conn->query($query);

$tiketRegular = [];
$tiketIMAX = [];
$tiketVelvet = [];

while ($row = $result->fetch_assoc()) {
    if ($row['jenis_studio'] == 'Regular') {
        $tiketRegular[] = new TiketRegular(
            $row['id_tiket'],
            $row['nama_film'],
            $row['jadwal_tayang'],
            $row['jumlah_kursi'],
            $row['harga_dasar_tiket'],
            $row['tipe_audio'],
            $row['lokasi_baris']
        );
    } elseif ($row['jenis_studio'] == 'IMAX') {
        $tiketIMAX[] = new TiketIMAX(
            $row['id_tiket'],
            $row['nama_film'],
            $row['jadwal_tayang'],
            $row['jumlah_kursi'],
            $row['harga_dasar_tiket'],
            $row['kacamata_3d_id'],
            $row['efek_gerak_fitur']
        );
    } elseif ($row['jenis_studio'] == 'Velvet') {
        $tiketVelvet[] = new TiketVelvet(
            $row['id_tiket'],
            $row['nama_film'],
            $row['jadwal_tayang'],
            $row['jumlah_kursi'],
            $row['harga_dasar_tiket'],
            $row['banta_selimut_pack'],
            $row['layanan_butler']
        );
    }
}

function formatRupiah($angka)
{
    return "Rp " . number_format($angka, 0, ',', '.');
}

function tampilkanTabelTiket($judul, $dataTiket)
{
    ?>
    <section class="card">
        <h2><?= $judul; ?></h2>

        <table>
            <thead>
                <tr>
                    <th>ID Tiket</th>
                    <th>Nama Film</th>
                    <th>Jadwal Tayang</th>
                    <th>Jumlah Kursi</th>
                    <th>Harga Dasar</th>
                    <th>Fasilitas Studio</th>
                    <th>Total Harga</th>
                </tr>
            </thead>

            <tbody>
                <?php if (count($dataTiket) > 0): ?>
                    <?php foreach ($dataTiket as $tiket): ?>
                        <tr>
                            <td><?= $tiket->getIdTiket(); ?></td>
                            <td><?= $tiket->getNamaFilm(); ?></td>
                            <td><?= $tiket->getJadwalTayang(); ?></td>
                            <td><?= $tiket->getJumlahKursi(); ?></td>
                            <td><?= formatRupiah($tiket->getHargaDasarTiket()); ?></td>
                            <td><?= $tiket->tampilkanInfoFasilitas(); ?></td>
                            <td class="total"><?= formatRupiah($tiket->hitungTotalHarga()); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">Belum ada data tiket.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
    <?php
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Tiket Bioskop</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #222;
        }

        header {
            background: #111827;
            color: white;
            padding: 25px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        header p {
            margin-top: 8px;
            color: #d1d5db;
        }

        main {
            padding: 30px;
        }

        .card {
            background: white;
            padding: 24px;
            margin-bottom: 28px;
            border-radius: 14px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.08);
        }

        .card h2 {
            margin-top: 0;
            padding-left: 12px;
            border-left: 5px solid #111827;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #374151;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
            vertical-align: top;
        }

        tr:hover {
            background: #f9fafb;
        }

        .total {
            font-weight: bold;
            color: #047857;
        }
    </style>
</head>
<body>

<header>
    <h1>Data Pemesanan Tiket Bioskop</h1>
    <p>Menampilkan tiket berdasarkan jenis studio dengan konsep polymorphism overriding</p>
</header>

<main>
    <?php tampilkanTabelTiket("Studio Regular", $tiketRegular); ?>
    <?php tampilkanTabelTiket("Studio IMAX", $tiketIMAX); ?>
    <?php tampilkanTabelTiket("Studio Velvet", $tiketVelvet); ?>
</main>

</body>
</html>
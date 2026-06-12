<?php

require_once "Tiket.php";

class TiketRegular extends Tiket
{
    private $tipeAudio;
    private $lokasiBaris;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $tipeAudio, $lokasiBaris)
    {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);

        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }

    public function hitungTotalHarga()
    {
        return $this->hargaDasarTiket * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas()
    {
        return "Tipe Audio: " . $this->tipeAudio . ", Lokasi Baris: " . $this->lokasiBaris;
    }

    public function getTipeAudio()
    {
        return $this->tipeAudio;
    }

    public function getLokasiBaris()
    {
        return $this->lokasiBaris;
    }
}

?>
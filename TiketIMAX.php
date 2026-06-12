<?php

require_once "Tiket.php";

class TiketIMAX extends Tiket
{
    private $kacamata3dId;
    private $efekGerakFitur;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $kacamata3dId, $efekGerakFitur)
    {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);

        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    public function hitungTotalHarga()
    {
        $biayaTambahanIMAX = 25000;

        return ($this->hargaDasarTiket + $biayaTambahanIMAX) * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas()
    {
        return "Kacamata 3D ID: " . $this->kacamata3dId . ", Efek Gerak Fitur: " . $this->efekGerakFitur;
    }

    public function getKacamata3dId()
    {
        return $this->kacamata3dId;
    }

    public function getEfekGerakFitur()
    {
        return $this->efekGerakFitur;
    }
}

?>
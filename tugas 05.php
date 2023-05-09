<?php

class Pegawai {
  private $nip;
  private $nama;
  private $jabatan;
  private $agama;
  private $status;
  private $gaji_pokok;
  private $tunjangan_jabatan;
  private $tunjangan_keluarga;
  private $zakat_profesi;
  private $gaji_bersih;

  // constructor
  public function __construct($nip, $nama, $jabatan, $agama, $status, $gaji_pokok) {
    $this->nip = $nip;
    $this->nama = $nama;
    $this->jabatan = $jabatan;
    $this->agama = $agama;
    $this->status = $status;
    $this->gaji_pokok = $gaji_pokok;

    // hitung tunjangan jabatan
    $this->tunjangan_jabatan = 0.2 * $this->gaji_pokok;

    // hitung tunjangan keluarga
    $this->tunjangan_keluarga = ($this->status == "Menikah") ? 0.1 * $this->gaji_pokok : 0;

    // hitung zakat profesi
    $this->zakat_profesi = ($this->agama == "Islam" && $this->gajiKotor() >= 6000000) ? 0.025 * $this->gajiKotor() : 0;

    // hitung gaji bersih
    $this->gaji_bersih = $this->gajiKotor() - $this->zakat_profesi;
  }

  // getter
  public function getNip() {
    return $this->nip;
  }

  public function getNama() {
    return $this->nama;
  }

  public function getJabatan() {
    return $this->jabatan;
  }

  public function getAgama() {
    return $this->agama;
  }

  public function getStatus() {
    return $this->status;
  }

  public function getGajiPokok() {
    return $this->gaji_pokok;
  }

  public function getTunjanganJabatan() {
    return $this->tunjangan_jabatan;
  }

  public function getTunjanganKeluarga() {
    return $this->tunjangan_keluarga;
  }

  public function getZakatProfesi() {
    return $this->zakat_profesi;
  }

  public function getGajiBersih() {
    return $this->gaji_bersih;
  }

  // hitung gaji kotor
  private function gajiKotor() {
    return $this->gaji_pokok + $this->tunjangan_jabatan + $this->tunjangan_keluarga;
  }

  // cetak informasi pegawai
  public function cetakGaji() {
    echo "NIP: " . $this->nip . "<br>";
    echo "Nama: " . $this->nama . "<br>";
    echo "Jabatan: " . $this->jabatan . "<br>";
    echo "Agama: " . $this->agama . "<br>";
    echo "Status: " . $this->status . "<br>";
    echo "Gaji Pokok: " . number_format($this->gaji_pokok, 0, ".",

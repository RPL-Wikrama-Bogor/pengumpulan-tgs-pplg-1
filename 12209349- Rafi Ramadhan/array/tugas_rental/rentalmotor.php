<?php
class MotorRental {
    private $nama;
    private $waktuPeminjaman;
    private $jenisMotor;
    private $pajak;
    private $biayaPerHari;
    private $member;
    private $daftarMember = ['baim', 'banu', 'rafi'];

    public function __construct($nama, $waktuPeminjaman, $jenisMotor) {
        $this->nama = strtolower($nama);
        $this->waktuPeminjaman = $waktuPeminjaman;
        $this->jenisMotor = $jenisMotor;
        $this->pajak = 10000;

        switch ($this->jenisMotor) {
            case 'scoopy':
                $this->biayaPerHari = 70000;
                break;
            case 'mio':
                $this->biayaPerHari = 100000;
                break;
            case 'supra':
                $this->biayaPerHari = 80000;
                break;
            default:
                $this->biayaPerHari = 0;
        }

        $this->member = $this->cekMember();
    }

    private function cekMember() {
        return in_array($this->nama, $this->daftarMember);
    }

    public function hitungBiayaPeminjaman() {
        $biayaTotal = $this->biayaPerHari * $this->waktuPeminjaman + $this->pajak;
        if ($this->member) {
            $diskon = $biayaTotal * 0.05;
            $biayaTotal -= $diskon;
        }

        return $biayaTotal;
    }

    public function tampilkanDetailPeminjaman() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Waktu Peminjaman (hari): " . $this->waktuPeminjaman . "<br>";
        echo "Jenis Motor: " . $this->jenisMotor . "<br>";
        echo "Pajak: " . $this->pajak . "<br>";
        echo "Biaya Peminjaman per hari: Rp " . number_format($this->biayaPerHari, 0, ',', '.') . "<br>";
        echo "Total Biaya Peminjaman: Rp " . number_format($this->hitungBiayaPeminjaman(), 0, ',', '.') . "<br>";
        if ($this->member) {
            echo "Status: Member<br>";
        } else {
            echo "Status: Non-member<br>";
        }
}
}
?>
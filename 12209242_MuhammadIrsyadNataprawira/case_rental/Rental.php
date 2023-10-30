<?php
class Rental
{
    private $memberList = ["Dudung", "Joko", "Jajang", "Yayan"];

    public function isMember($nama)
    {
        return in_array($nama, $this->memberList);
    }

    public function hitungDiskon($lamaWaktu, $isMember)
    {
        if ($isMember && $lamaWaktu > 0) {
            return 5;
        }
        return 0;
    }
}

class Checkout extends Rental
{
    public function tampilkanInformasiRental($nama, $lamaWaktu, $jenisMotor)
    {
        $isMember = $this->isMember($nama);

        $diskon = $this->hitungDiskon($lamaWaktu, $isMember);

        $hargaPerHari = $this->hargaRentalPerHari($jenisMotor);

        $totalSebelumDiskon = $hargaPerHari * $lamaWaktu;

        $totalDiskon = ($totalSebelumDiskon * $diskon) / 100;

        $totalSetelahDiskon = $totalSebelumDiskon - $totalDiskon;

        $pajak = 10_000;

        $totalBiaya = $totalSetelahDiskon + $pajak;

        echo "Hello <strong>$nama</strong>, Silahkan lihat detail rent dibawah: <br/>";
        echo "<strong>". $nama ."</strong> berstatus sebagai " . ($isMember ? "Member" : "Non-Member") . " ";
        echo ($isMember ? "mendapatkan diskon sebesar " . $diskon . "%" : "mendapatkan diskon sebesar 0%") . "<br/>";
        echo "Jenis motor yang di rental adalah " . $jenisMotor . " selama " . $lamaWaktu . " hari<br/>";
        echo "Harga rental per harinya: Rp. " . number_format($hargaPerHari, 0, ',', '.') . "<br/>";
        echo "Total harga setelah diskon: Rp. ".number_format($totalSetelahDiskon, 0, ',', '.') . "<br/>";
        echo "Besar yang harus di bayarkan adalah (termasuk pajak):<b> Rp. " . number_format($totalBiaya, 0, ',', '.') . "<br/>";
    }

    public function hargaRentalPerHari($jenisMotor)
    {
        $perDay = 0;

        switch ($jenisMotor) {
            case 'scooter':
                $perDay = 60_000;
                break;
            case 'aerox':
                $perDay = 90_000;
                break;
            case 'vario':
                $perDay = 80_000;
                break;
            case 'mio':
                $perDay = 50_000;
                break;
        }

        return $perDay;
    }
}
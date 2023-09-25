<?php
error_reporting(0);

class Rental
{
    protected $name;
    protected $price;
    protected $day;
    public $totalPrice;

    public function __construct($price, $day)
    {
        $this->price = $price;
        $this->day = $day;
    }

    public function totalPriceNonMember()
    {
        return $totalPrice = $this->price * $this->day + (10000 * $this->day);
        
    }
    public function totalPriceMember()
    {
        return $totalPrice = $this->price * $this->day + (10000 * $this->day) * 0.9;
    }
}

$bike = [
    'Scooter' => '50000',
    'Street Bike' => '75000',
    'Sport Bike' => '100000',
    'Touring Bike' => '125000'
];
?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudiCase 2 OOP PHP </title>
    <link rel="stylesheet" href="style.css">
    <style>
        :root {
            --bs-dark: #212529;
        }

        .theme-container {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.5s;
        }

        .theme-container:hover {
            opacity: 0.8;
        }

        .shadow-dark {
            background: linear-gradient(145deg, #23282c, #1e2125);
            box-shadow: 17px 17px 23px #1a1d20,
                -17px -17px 23px #282d32, inset 5px 5px 4px #1e2226,
                inset -5px -5px 4px #24282c;
        }

        .shadow-light {
            box-shadow: 7px 7px 15px -10px #bbcfda, -4px -4px 13px #ffffff,
                inset 7px 7px 3px rgba(209, 217, 230, 0.35),
                inset -11px -11px 3px rgba(255, 255, 255, 0.3)
        }

        @keyframes change {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.4);
            }
        }

        .change {
            animation-name: change;
            animation-duration: 1s;
            animation-direction: alternate;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="section">
            <form action="" method="post">
                <label for="">Nama Peminjam</label>
                <input type="text" name="name" style="width: 100%;padding: 10px;margin-bottom: 10px;border: 1px solid #ccc;border-radius: 5px;font-size: 16px;">
                <label for="">Tipe Motor</label>
                <select name="type" id="type">
                    <?php
                    foreach ($bike as $key => $bikes) {
                        echo "<option value='$key'>" . $key . " = Rp. " . number_format($bikes) .  "</option>";
                    }
                    ?>
                </select>
                <br>
                <label for="">Hari Peminjaman</label>
                <input type="number" name="day" id="day">
                <br>
                <input type="submit" name="submit">
            </form>

            <?php

            $member = [
                'wahyu', 'udin', 'octo', 'icha'
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = $_POST['name'];
                $type = $_POST['type'];
                $day = $_POST['day'];
            }

            if (isset($bike[$type]) && $name && is_numeric($day) && $day > 0) {
                $pricePerDay = $bike[$type];
                $name = strtolower($name);
                $req = new Rental($pricePerDay, $day);
                $totalPriceMember = $req->totalPriceMember();
                $totalPriceNonMember = $req->totalPriceNonMember();
                $checkMember = in_array($name, $member);

                if ($checkMember == 1) {
                    echo ucfirst($name) . " Adalah Member Sehingga Mendapatkan Potongan Harga Sebesar 10% <br>";
                    echo "Jenis Motor Yang Di Rental Adalah " . $type . " Selama " . $day . " Hari <br>";
                    echo "Harga Rental Perharinya Adalah Rp. " . number_format($pricePerDay) . "<br>";
                    echo "Biaya Perawatan Rp. 10,000 Per Hari <br>";
                    echo "Total Biaya Perawatan Selama " . $day . " Adalah " . number_format($day*10000) . "<br>";
                    echo "Harga Yang Harus Dibayarkan Adalah Rp. " . number_format($totalPriceMember);
                } else {
                    echo ucfirst($name) . " Bukanlah Member Sehingga Tidak Mendapatkan Potongan Harga<br>";
                    echo "Jenis Motor Yang Di Rental Adalah " . $key . " Selama " . $day . " Hari <br>";
                    echo "Harga Rental Perharinya Adalah Rp. " . number_format($pricePerDay) . "<br>";
                    echo "Biaya Perawatan Rp. 10,000 Per Hari <br>";
                    echo "Total Biaya Perawatan Selama " . $day . " Adalah " . number_format($day*10000) . "<br>";
                    echo "Harga Yang Harus Dibayarkan Adalah Rp. " . number_format($totalPriceNonMember);
                }
            }
            ?>
        </div>
    </div>
    <div class="theme-container shadow-dark">
        <img id="theme-icon" src="https://www.uplooder.net/img/image/2/addf703a24a12d030968858e0879b11e/moon.svg" alt="ERR">
    </div>
    <script>
        document.body.style = "background-color: var(--bs-dark);transition: 0.5s;"
        const sun = "https://www.uplooder.net/img/image/55/7aa9993fc291bc170abea048589896cf/sun.svg";
        const moon = "https://www.uplooder.net/img/image/2/addf703a24a12d030968858e0879b11e/moon.svg"

        var theme = "dark";
        const root = document.querySelector(":root");
        const container = document.getElementsByClassName("theme-container")[0];
        const themeIcon = document.getElementById("theme-icon");
        container.addEventListener("click", setTheme);

        function setTheme() {
            switch (theme) {
                case "dark":
                    setLight();
                    theme = "light";
                    break;
                case "light":
                    setDark();
                    theme = "dark";
                    break;
            }
        }

        function setLight() {
            root.style.setProperty(
                "--bs-dark",
                "linear-gradient(318.32deg, #c3d1e4 0%, #dde7f3 55%, #d4e0ed 100%)"
            );
            container.classList.remove("shadow-dark");
            setTimeout(() => {
                container.classList.add("shadow-light");
                themeIcon.classList.remove("change");
            }, 300);
            themeIcon.classList.add("change");
            themeIcon.src = sun;
        }

        function setDark() {
            root.style.setProperty("--bs-dark", "#212529");
            container.classList.remove("shadow-light");
            setTimeout(() => {
                container.classList.add("shadow-dark");
                themeIcon.classList.remove("change");
            }, 300);
            themeIcon.classList.add("change");
            themeIcon.src = moon;
        }
    </script>
</body>

</html>
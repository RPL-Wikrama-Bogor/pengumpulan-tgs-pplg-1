<?php
error_reporting(0);

class Gas
{

    private $price;
    private $tax;
    private $totalGas;
    protected $result;
    public $taxResult;

    public function __construct($price, $totalGas, $tax = 0.1)
    {
        $this->price = $price;
        $this->tax = $tax;
        $this->totalGas = $totalGas;
    }

    public function calculateTax()
    {
        $taxResult = $this->price * $this->totalGas * $this->tax;
        return $taxResult;
    }

    public function calculateTotalCost()
    {
        $result = $this->price * $this->totalGas * (1 + $this->tax);
        return $result;
    }
}

$gasOptions = [
    'Pertalite' => 10000,
    'Pertamax' => 13300,
    'Pertamax Turbo' => 14500,
    'Solar' => 7500
];

$selectedGas = '';
$liter = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $selectedGas = $_POST['gas'];
    $liter = $_POST['totalLiter'];
}

?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudiCase 1 OOP PHP </title>
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
                <label for=""> Jenis Bahan Bakar </label>
                <select name="gas" id="gas">
                    <?php
                    foreach ($gasOptions as $key => $gass) {
                        echo "<option value='$key'>" . $key . " = " . "Rp. " . number_format($gass) .  "</option>";
                    }
                    ?>
                </select>
                <br>
                <label for="">Jumlah (Liter)</label>
                <input type="number" name="totalLiter" id="totalLiter" value="<?php echo $liter; ?>">
                <br>
                <input type="submit" name="submit">
            </form>

            <?php
            if (isset($gasOptions[$selectedGas]) && is_numeric($liter) && $liter > 0) {
                $pricePerLiter = $gasOptions[$selectedGas];
                $req = new Gas($pricePerLiter, $liter);
                $tax = $req->calculateTax();
                $totalCost = $req->calculateTotalCost();
                echo "Bahan Bakar Yang Dipilih " .  $selectedGas . "<br>";
                echo "Harga Per Liter = Rp. " . number_format($pricePerLiter) . "<br>";
                echo "Jumlah Yang Dikeluarkan (Liter) = " . number_format($liter) . "<br>";
                echo "Pajak = Rp. " . number_format($tax) . "<br>";
                echo "Total (Termasuk Pajak 10%) = Rp. " . number_format($totalCost);
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
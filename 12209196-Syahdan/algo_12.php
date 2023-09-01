<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menghitung Waktu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <style>
        <style>
    body {
        font-family: Arial, sans-serif;
    }

    center {
        margin-top: 50px;
    }

    h3 {
        color: #333;
    }

    table {
        border-collapse: collapse;
        width: 300px;
        margin: 0 auto;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    input[type="number"] {
        width: 50px;
        padding: 5px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 14px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center">Input Jam, Menit, Detik</h3>
                <form method="post" action="#">
                    <div class="mb-3">
                        <label for="hh" class="form-label">Input hh</label>
                        <input type="number" class="form-control" id="hh" name="hh" min="0" max="23">
                    </div>
                    <div class="mb-3">
                        <label for="mm" class="form-label">Input mm</label>
                        <input type="number" class="form-control" id="mm" name="mm" min="0" max="59">
                    </div>
                    <div class="mb-3">
                        <label for="ss" class="form-label">Input ss</label>
                        <input type="number" class="form-control" id="ss" name="ss" min="0" max="59">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    $hh = intval($_POST['hh']);
                    $mm = intval($_POST['mm']);
                    $ss = intval($_POST['ss']);

                    $ss += 1;
                    if ($ss >= 60) {
                        $ss = 0;
                        $mm += 1;
                        if ($mm >= 60) {
                            $mm = 0;
                            $hh += 1;
                            if ($hh >= 24) {
                                $hh = 0;
                            }
                        }
                    }

                    echo "Waktu setelah ditambah 1 detik: " . sprintf("%02d:%02d:%02d", $hh, $mm, $ss);
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

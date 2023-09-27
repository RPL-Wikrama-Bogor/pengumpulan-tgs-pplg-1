<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Pilih Film</title>
</head>

<body>
    <form method="POST" action="proses.php">
        <label for="film">Pilih Film:</label>
        <select name="film" id="film">
            <option value="boboiboy">Boboiboy</option>
            <option value="pokemon">Pokemon</option>
            <option value="the nun II">The nun II</option>
            <option value="jigsaw">Jigsaw</option>
        </select>

        <br>

        <label for="usia">Usia Anda:</label>
        <input type="number" name="usia" id="usia" required>

        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>

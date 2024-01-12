<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjoitus 1</title>
</head>
<body>
    <?php require "header.php"?>
    <main class="main">
    <h1>Harjoitus 1</h1>
    <p>Bensan hinta on 1,97 € per litra. Laskuri kertoo, kuinka paljon saat milläkin rahasummalla.</p>
    <form>
        <label for="money">Rahamäärä</label>
        <input id="money" type="number" name="money">
        <input type="submit" value="Laske">
    </form>
</main>
</body>
</html>
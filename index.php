<?php require_once('./cars.php') ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Mini-App Cars</title>
</head>

<body>

    <main>

        <?php

        // Sort cars from cheapest to most expensive
        $price = array_column($cars, 'price');
        array_multisort($price, SORT_ASC, $cars);

        // Loop through all cars
        foreach ($cars as &$car) {
            // Calculate weight / power ratio and round result to 2 decimals
            $car['ratio'] = round($car['weight'] / $car['power'], 2);
            // Turn price into string and add thousand separators
            $car['price'] = number_format($car['price'], 0, ',', ' ');

        ?>

            <!-- Display every single car in the HTML -->
            <div class='car'>
                <img src=<?= $car['img'] ?> alt="<?= $car['brand'] ?> <?= $car['model'] ?>">
                <div class='right-part'>
                    <div>
                        <h2><?= $car['brand'] ?></h2>
                        <h3><?= $car['model'] ?></h3>
                        <div><?= "{$car['price']} €" ?></div>
                        <div><?= "{$car['power']} ch" ?></div>
                        <div><?= "{$car['weight']} kg" ?></div>
                        <div><?= "{$car['ratio']} kg/ch" ?></div>
                    </div>
                    <a href=""><button>Voir l'annonce</button></a>
                </div>

            </div>

        <?php
            // End of foreach loop
        }
        ?>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>
    <script src="./app.js"></script>

</body>

</html>
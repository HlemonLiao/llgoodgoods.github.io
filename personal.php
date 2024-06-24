<?php

// Hongxuan Liao
// personal.php
// Mar 30, 2024

// create the $title variable
$title = 'Hongxuan Liao\'s Personal PHP Webpage';

// create the $name variable
$name = 'Hongxuan Liao';

// create the $homepage variable
$homepage = "https://google.com";

// create the $greeting variable
$greeting = "😀 Hi there. This is Hongxuan Liao 👻. I love baking, coffee, piano and making websites.";

// create a $classes array with your courses (at least 31 & 31L)
$classes = [ 
    "CISW 31 - Secure Web Server Programming in PHP",
    "CISW 31L - Secure Web Server Programming in PHP Laboratory",
    "CISW 17 - HTML, CSS, and JavaScript",
    "ADJU 50 - Criminal Forensic Science"
    ];

// create a $fun_fact variable
$fun_fact = "This my second semester in the CIS department. I like baking, maybe I can make a websites to record my recipes later.";

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title><?= $title ?></title>
</head>

<body>
    <header>
        <h1><?= $name ?></h1>
        <p><a href="<?= $homepage ?>" target="_blank">My Homepage</a></p>
    </header>
    <p><?= $greeting ?></p>
    <section>
        <h2>Current Courses</h2>
        <p>Here are some courses I am taking this semester.</p>
        <ul>
            <?php foreach ($classes as $class) { ?>

                <li><?= $class ?></li>

            <?php } ?>

        </ul>
    </section>
    <section>
        <p><?= $fun_fact ?></p>
    </section>
</body>

</html>
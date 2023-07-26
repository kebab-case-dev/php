<DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="PHP Projekte">
    <meta name="author" content="Bilal Kuzey">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="PHP, PHP-Projekte">
    <title>PHP Projekte</title>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h1 class="title">PHP Projekte</h1>
    <div class="content">
        <?php
            $projects = scandir('.');
            if (is_dir('$projects')) {
                $projects = scandir('projects');
            }
            foreach ($projects as $project) {
                echo '<div class="card">' . $project . '</div>';
            }
        ?>
        <div class="card">Erste Karte</div>
        <div class="card">Erste Karte</div>
        <div class="card">Erste Karte</div>
        <div class="card">Erste Karte</div>
        <div class="card">Erste Karte</div>
    </div>
</div>
</body>
</html>
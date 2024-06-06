<!DOCTYPE html>
<html>
<head>
    <title>Menú de Páginas Web</title>
    <style>
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #000;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            display: inline-block;
        }
        a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>Menú de Páginas Web</h1>

    <?php
    // Creación del arreglo asociativo
    $paginas = [
        'Google' => 'https://www.google.com',
        'Facebook' => 'https://www.facebook.com',
        'Twitter' => 'https://www.twitter.com',
        'LinkedIn' => 'https://www.linkedin.com',
        'GitHub' => 'https://www.github.com'
    ];

    // Imprimir el menú de páginas web
    echo "<ul>";

    foreach ($paginas as $nombre => $url) {
        echo "<li><a href='$url' target='_blank'>$nombre</a></li>";
    }

    echo "</ul>";
    ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Directorio Telefónico</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Directorio Telefónico</h1>

    <?php
    // Creación del arreglo asociativo
    $directorio = [
        '1' => [
            'nombre' => 'Daniel Vega',
            'telefono' => '61291621',
            'correo' => 'danielvegav6094@hotmail.com'
        ],
        '2' => [
            'nombre' => 'Melissa Montenegro',
            'telefono' => '305110407',
            'correo' => 'meli.28@gmail.com'
        ],
        '3' => [
            'nombre' => 'Carlos Sánchez',
            'telefono' => '304560269',
            'correo' => 'carlos.sanchez@gmail.com'
        ]
    ];

    // Imprimir el arreglo en una tabla
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Teléfono</th><th>Correo Electrónico</th></tr>";

    foreach ($directorio as $id => $info) {
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $info['nombre'] . "</td>";
        echo "<td>" . $info['telefono'] . "</td>";
        echo "<td>" . $info['correo'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>

<!DOCTYPE html>
<html>

<head>
    <title>Data Manipulation</title>
</head>

<body>
    <h1>Data Manipulation</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php

        $data = [
            ['id' => 1, 'name' => 'sahil sumra', 'email' => 'sahil@example.com'],
            ['id' => 2, 'name' => 'upvan chaudhari', 'email' => 'upvan@example.com'],
            ['id' => 3, 'name' => 'savan chaudhari', 'email' => 'savan@example.com'],

        ];

        // Loop through the data and display it in the table
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
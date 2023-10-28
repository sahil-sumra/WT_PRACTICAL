<!DOCTYPE html>
<html>
<head>
    <title>Record Display</title>
</head>
<body>
    <h1>Record Display</h1>
    <?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        
        $data = [
            1 => ["Name" => "John Doe", "Email" => "john@example.com"],
            2 => ["Name" => "Jane Smith", "Email" => "jane@example.com"]
        ];

        if (isset($data[$id])) {
            $record = $data[$id];
            echo "<h2>Record #$id</h2>";
            echo "<p><strong>Name:</strong> " . $record["Name"] . "</p>";
            echo "<p><strong>Email:</strong> " . $record["Email"] . "</p>";
        } else {
            echo "<p>Record not found.</p>";
        }
    } else {
        echo "<p>No record selected.</p>";
    }
    ?>
    <p><a href="table.php">Back to Table</a></p>
</body>
</html>

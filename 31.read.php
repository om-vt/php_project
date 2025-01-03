<?php
$CON = mysqli_connect('localhost', 'root', '', 'profile');

if (!$CON) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM singlefeild";
$result = mysqli_query($CON, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
    <style>
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            padding: 10px;
            border: 1px solid #000;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            margin: 10px auto;
            display: block;
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Data Records</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                      </tr>";
            }
        } else {
            echo "<tr>
                    <td colspan='2'>No records found</td>
                  </tr>";
        }
        ?>
    </table>
    <button onclick="window.location.href='31.php';">insert</button>
    <button onclick="window.location.href='31_edit.php';">edit</button>

</body>
</html>

<?php

?>

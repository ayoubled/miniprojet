<!DOCTYPE html>
<html>
<head>
    <title>Donation History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {background-color: #f5f5f5;}
    </style>
</head>
<body>

<h2>Donation History</h2>

<table>
    <tr>
        <th>Donor Name</th>
        <th>Amount</th>
        <th>Date</th>
    </tr>

    <?php
    include 'db_connt.php';

    $sql = "SELECT * FROM donation";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["donor_name"] . "</td>";
            echo "<td>" . $row["amount"] . "$"."</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No donations found</td></tr>";
    }
    ?>

</table>

</body>
</html>

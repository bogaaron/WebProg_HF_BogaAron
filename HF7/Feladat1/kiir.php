<?php
require_once 'conn.php';

$sql = "SELECT * FROM products";
if (isset($conn)) {
    $results = $conn->query($sql);

    echo "<br>" . "<a href='add.php'> 
    ADD Product
    </a>" . "<br>
    <br>";

    if ($results->num_rows > 0) {
        echo "<table border='1'>";


        while ($row = $results->fetch_assoc()) {

                        echo "<tr>";

                        echo "<td>" . $row['id'] . "</td>";

                        echo "<td>" . $row['title'] . "</td>";

                        echo "<td>" . $row['price'] . "</td>";

                        echo "<td>" . $row['category'] . "</td>";
                        $src = $row['image'];
                        
                        echo "<td>" . "<img src= '$src' height='100px'>" . "</td>";


                        echo "<td><a href = \"torol.php?id=" . $row['id'] . "\">DELETE</a></td>";
                        echo "</tr>";
        }
        echo "</table>";
    } 

    $conn->close();
}
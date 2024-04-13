<?php

/* Connection database */
require __DIR__ .  '/connection/db.php';


/* Query SQL */
$sql = "SELECT `users`.`username`, `users`.`email`, COUNT(`medias`.`user_id`) AS `num_media` 
        FROM `users` 
        LEFT JOIN `medias` ON `users`.`id` = `medias`.`user_id` 
        GROUP BY `users`.`username`, `users`.`email` 
        ORDER BY `num_media` DESC;";

$result = $connection->query($sql);

/* Print results in a table */
if ($result->num_rows > 0) {
    echo "<table class='table table-striped'>
            <thead class='thead-light'>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Number of Media</th>
                </tr>
            </thead>
            <tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["username"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["num_media"] . "</td>
              </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "Nessun risultato trovato.";
}

/* Close connection */
$connection->close();

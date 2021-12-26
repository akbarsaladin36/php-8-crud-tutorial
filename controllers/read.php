<?php 

require_once './config/db.php';

    $sql = "SELECT * FROM users";
    $result = $db->prepare($sql);
    $result->execute();
    $hasil = $result->fetchAll();
    $no = 1;

    foreach($hasil as $row) {
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$row['user_username']."</td>";
        echo "<td>".$row['user_email']."</td>";
        echo "<td>".$row['user_address']."</td>";
        echo "<td>";
        echo "<a href='/edit-page.php?id=".$row["user_id"]."' class='btn btn-success'>Update</a>";
        echo "<a href='/delete?id=".$row["user_id"]."' class='btn btn-danger ms-3'>Delete</a>";
        echo "</td>";
        echo "</tr>";
        $no++;
    }




?>
<?php 

    require_once './config/db.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE user_id = ?";
    $result = $db->prepare($sql);
    $result->execute(array($id));
    $edit_data = $result->fetch();

    echo '<form action="" method="post" class="mt-5">';

    echo '<div class="form-group mt-3">';
    echo '<label for="username">Username</label>';
    echo '<input type="text" name="username" value="'.$edit_data['user_username'].'" placeholder="Enter a username" class="form-control">';
    echo '</div>';

    echo '<div class="form-group mt-3">';
    echo '<label for="email">Email</label>';
    echo '<input type="email" name="email" value="'.$edit_data['user_email'].'" placeholder="Enter an email" class="form-control">';
    echo '</div>';

    echo '<div class="form-group mt-3">';
    echo '<label for="password">Password</label>';
    echo '<input type="password" name="password" placeholder="Enter a password" class="form-control">';
    echo '</div>';

    echo '<div class="form-group mt-3">';
    echo '<label for="address">Address</label>';
    echo '<input type="text" name="address" value="'.$edit_data['user_address'].'" placeholder="Enter an address" class="form-control">';
    echo '</div>';

    echo '<button type="submit" name="update" class="btn btn-primary form-control mt-3">UPDATE</button>';

    echo '</form>';

    echo '<a href="/index.php" class="btn btn-secondary form-control mt-3">Back</a>';



?>
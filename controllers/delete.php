<?php 

    require_once './config/db.php';

    if(isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        $sql = 'DELETE FROM users WHERE user_id = ?';
        $result = $db->prepare($sql);
        $result->execute(array($id));
        
        echo "<script>alert('Data telah berhasil dihapus');</script>";
        echo "<script>window.location='index.php';</script>";
    }


?>
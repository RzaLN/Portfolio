<?php
    include '../php/koneksi.php';
    if (isset($_POST['submit'])) { 
        
        $email = mysqli_real_escape_string($koneksi, $_POST['email']); 
        $message = mysqli_real_escape_string($koneksi, $_POST['message']); 

        $query = "INSERT INTO form (id_user,email, message, created_at)
        VALUES ('1','$email', '$message', CURRENT_TIMESTAMP)";

        if (mysqli_query($koneksi, $query)) {
            header('Location: ../php/index.php?status=success'); 
            exit();
        } else {
            echo "error: " . mysqli_error($koneksi);    
        }
        mysqli_close($koneksi);
    }
?>
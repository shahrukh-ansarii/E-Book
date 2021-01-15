<?php
    $conn = mysqli_connect('localhost','root','','ebook');
    if(!$conn)
    {
        echo "<script>alert('Database Connection Failed!')</script>";
    }
?>
<?php
include("../connection.php");
    $arch№ = $_POST['arch№'];
    $remove = "DELETE FROM logbook WHERE arch№='$arch№'";
    $query = mysqli_query($con, $remove);

        if($query){
            echo"<script>alert('Запись успешно удалена')</script>";
            echo"<script>window.open('../../JournalUch.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось удалить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('../../JournalUch.php','_self')</script>";
        }
?>
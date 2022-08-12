<?php
include("../connection.php");
    $number = $_POST['number'];
    $remove = "DELETE FROM outfittask WHERE `number`='$number'";
    $query = mysqli_query($con, $remove);

        if($query){
            echo"<script>alert('Запись успешно удалена')</script>";
            echo"<script>window.open('../../outfitTask.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось удалить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('../../outfitTask.php','_self')</script>";
        }
?>
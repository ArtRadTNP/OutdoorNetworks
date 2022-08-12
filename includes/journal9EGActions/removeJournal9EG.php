<?php
include("../connection.php");
    $number = $_POST['number'];
    $remove = "DELETE FROM journal9eg WHERE number='$number'";
    $query = mysqli_query($con, $remove);

        if($query){
            echo"<script>alert('Запись успешно удалена')</script>";
            echo"<script>window.open('../../journal9EG.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось удалить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('../../journal9EG.php','_self')</script>";
        }
?>
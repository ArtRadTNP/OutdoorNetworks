<?php
include("../connection.php");
    $id_record = $_POST['id_record'];
    $remove = "DELETE FROM maintenancestruct WHERE id_record='$id_record'";
    $query = mysqli_query($con, $remove);

        if($query){
            echo"<script>alert('Запись успешно удалена')</script>";
            echo"<script>window.open('../../maintenanceStruct.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось удалить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('../../maintenanceStruct.php','_self')</script>";
        }
?>
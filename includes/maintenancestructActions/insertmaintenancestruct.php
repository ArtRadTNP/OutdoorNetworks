<?php
    include("includes/connection.php");

    if(isset($_POST['add'])){
        $MIDate = htmlentities(mysqli_real_escape_string($con,$_POST['MIDateadd']));
        $passport = htmlentities(mysqli_real_escape_string($con,$_POST['passportadd']));
        $routeMap = htmlentities(mysqli_real_escape_string($con,$_POST['routeMapadd']));
        $locDevice = htmlentities(mysqli_real_escape_string($con,$_POST['locDeviceadd']));
        $gasPipe = htmlentities(mysqli_real_escape_string($con,$_POST['gasPipeadd']));

        

        $insert = "insert into maintenancestruct (MIDate,passport,routeMap,locDevice,gasPipe)
         values('$MIDate', '$passport', '$routeMap', '$locDevice','$gasPipe')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Запись успешно добавлена')</script>";
            echo"<script>window.open('maintenanceStruct.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось добавить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('maintenanceStruct.php','_self')</script>";
        }
    }
?>
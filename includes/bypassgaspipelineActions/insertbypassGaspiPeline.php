<?php
    include("includes/connection.php");

    if(isset($_POST['add'])){
        $route = htmlentities(mysqli_real_escape_string($con,$_POST['routeadd']));
        $data = htmlentities(mysqli_real_escape_string($con,$_POST['dataadd']));
        $moving = htmlentities(mysqli_real_escape_string($con,$_POST['movingadd']));
        $detector = htmlentities(mysqli_real_escape_string($con,$_POST['detectoradd']));
        $master = htmlentities(mysqli_real_escape_string($con,$_POST['masteradd']));
        $workers = htmlentities(mysqli_real_escape_string($con,$_POST['workersadd']));
        $inspection = htmlentities(mysqli_real_escape_string($con,$_POST['inspectionadd']));
        $accomplishment = htmlentities(mysqli_real_escape_string($con,$_POST['accomplishmentadd']));

        $check_route = "select * from bypassgaspipeline where route='$route'";
        $run_route = mysqli_query($con,$check_route);

        $check = mysqli_num_rows($run_route);

        if($check == 1){
            echo"<script>alert('Запись с таким маршрутом уже существует, пожалуйста проверьте корректность ввода данных')</script>";
            echo"<script>window.open('bypassGasPipeline.php','_self')</script>";
            exit();
        }

        $insert = "insert into bypassgaspipeline (route,data,moving,detector,master,
        workers,inspection,accomplishment) values ('$route', '$data', '$moving', '$detector','$master','$workers',
          '$inspection', '$accomplishment')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Запись успешно добавлена')</script>";
            echo"<script>window.open('bypassGasPipeline.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось добавить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('bypassGasPipeline.php','_self')</script>";
        }
    }
?>
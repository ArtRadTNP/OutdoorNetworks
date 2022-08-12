<?php
    include("includes/connection.php");

    if(isset($_POST['add'])){
        $data = htmlentities(mysqli_real_escape_string($con,$_POST['dataadd']));
        $number = htmlentities(mysqli_real_escape_string($con,$_POST['numberadd']));
        $kindWork = htmlentities(mysqli_real_escape_string($con,$_POST['kindWorkadd']));
        $jobGiven = htmlentities(mysqli_real_escape_string($con,$_POST['jobGivenadd']));
        $teamCompos = htmlentities(mysqli_real_escape_string($con,$_POST['teamComposadd']));

        $check_number = "select * from outfittask where number='$number'";
        $run_number = mysqli_query($con,$check_number);

        $check = mysqli_num_rows($run_number);

        if($check == 1){
            echo"<script>alert('Запись с таким номером уже существует, пожалуйста проверьте корректность ввода данных')</script>";
            echo"<script>window.open('outfitTask.php','_self')</script>";
            exit();
        }

        $insert = "insert into outfittask (data,number,kindWork,jobGiven,teamCompos)
         values('$data', '$number', '$kindWork', '$jobGiven','$teamCompos')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Запись успешно добавлена')</script>";
            echo"<script>window.open('outfitTask.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось добавить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('outfitTask.php','_self')</script>";
        }
    }
?>
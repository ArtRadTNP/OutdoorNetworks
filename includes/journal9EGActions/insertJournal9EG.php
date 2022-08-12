<?php
    include("includes/connection.php");

    if(isset($_POST['add'])){
        $number = htmlentities(mysqli_real_escape_string($con,$_POST['numberadd']));
        $dateIssue = htmlentities(mysqli_real_escape_string($con,$_POST['dateIssueadd']));
        $permGrant = htmlentities(mysqli_real_escape_string($con,$_POST['permGrantadd']));
        $addressWork = htmlentities(mysqli_real_escape_string($con,$_POST['addressWorkadd']));
        $typeWork = htmlentities(mysqli_real_escape_string($con,$_POST['typeWorkadd']));
        $permGive = htmlentities(mysqli_real_escape_string($con,$_POST['permGiveadd']));
        $active = htmlentities(mysqli_real_escape_string($con,$_POST['activeadd']));
        $controlled = htmlentities(mysqli_real_escape_string($con,$_POST['controlledadd']));

        $check_number = "select * from journal9eg where number='$number'";
        $run_number = mysqli_query($con,$check_number);

        $check = mysqli_num_rows($run_number);

        if($check == 1){
            echo"<script>alert('Запись с таким номером уже существует, пожалуйста проверьте корректность ввода данных')</script>";
            echo"<script>window.open('journal9EG.php','_self')</script>";
            exit();
        }

        $insert = "insert into journal9eg (number,dateIssue,permGrant,addressWork,typeWork,permGive,active,controlled)
         values('$number', '$dateIssue', '$permGrant', '$addressWork','$typeWork','$permGive', '$active', '$controlled')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Запись успешно добавлена')</script>";
            echo"<script>window.open('Journal9EG.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось добавить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('Journal9EG.php','_self')</script>";
        }
    }
?>
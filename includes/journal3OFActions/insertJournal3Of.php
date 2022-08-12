<?php
    include("includes/connection.php");

    if(isset($_POST['add'])){
        $data = htmlentities(mysqli_real_escape_string($con,$_POST['dataadd']));
        $title = htmlentities(mysqli_real_escape_string($con,$_POST['titleadd']));
        $FIOAplicant = htmlentities(mysqli_real_escape_string($con,$_POST['FIOAplicantadd']));
        $typeWork = htmlentities(mysqli_real_escape_string($con,$_POST['typeWorkadd']));
        $addressObj = htmlentities(mysqli_real_escape_string($con,$_POST['addressObjadd']));
        $applicAccept = htmlentities(mysqli_real_escape_string($con,$_POST['applicAcceptadd']));
        $appointRepres = htmlentities(mysqli_real_escape_string($con,$_POST['appointRepresadd']));
        $resultWork = htmlentities(mysqli_real_escape_string($con,$_POST['resultWorkadd']));

        $insert = "insert into journal3of (data,title,FIOAplicant,typeWork,addressObj,applicAccept,appointRepres,resultWork) 
        values('$data', '$title', '$FIOAplicant', '$typeWork','$addressObj','$applicAccept','$appointRepres','$resultWork')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Запись успешно добавлена')</script>";
            echo"<script>window.open('Journal3OF.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось добавить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('Journal3OF.php','_self')</script>";
        }
    }
?>
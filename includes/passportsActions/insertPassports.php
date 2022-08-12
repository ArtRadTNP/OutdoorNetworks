<?php
    include("includes/connection.php");

    if(isset($_POST['add'])){
        $passport = htmlentities(mysqli_real_escape_string($con,$_POST['passportadd']));
        $data = htmlentities(mysqli_real_escape_string($con,$_POST['dataadd']));
        $placeWork = htmlentities(mysqli_real_escape_string($con,$_POST['placeWorkadd']));
        $typeWork = htmlentities(mysqli_real_escape_string($con,$_POST['typeWorkadd']));
        $etc = htmlentities(mysqli_real_escape_string($con,$_POST['etcadd']));
        $persRespProd = htmlentities(mysqli_real_escape_string($con,$_POST['persRespProdadd']));
        

        

        if($check == 1){
            echo"<script>alert('Запись с таким паспортом уже существует, пожалуйста проверьте корректность ввода данных')</script>";
            echo"<script>window.open('pasports.php','_self')</script>";
            exit();
        }

        $insert = "insert into passport (passport,data,placeWork,typeWork,etc, persRespProd)
         values('$passport', '$data', '$placeWork', '$typeWork','$etc','$persRespProd')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Запись успешно добавлена')</script>";
            echo"<script>window.open('pasports.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось добавить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('pasports.php','_self')</script>";
        }
    }
?>
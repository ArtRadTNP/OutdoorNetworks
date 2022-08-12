<?php
    include("includes/connection.php");

    if(isset($_POST['add'])){
        $dateDiscovery = htmlentities(mysqli_real_escape_string($con,$_POST['dateDiscoveryadd']));
        $route = htmlentities(mysqli_real_escape_string($con,$_POST['routeadd']));
        $addressPlcDmg = htmlentities(mysqli_real_escape_string($con,$_POST['addressPlcDmgadd']));
        $№tankInstal = htmlentities(mysqli_real_escape_string($con,$_POST['№tankInstaladd']));
        $natureDmg = htmlentities(mysqli_real_escape_string($con,$_POST['natureDmgadd']));
        $excWork = htmlentities(mysqli_real_escape_string($con,$_POST['excWorkadd']));
        $dateCompletion = htmlentities(mysqli_real_escape_string($con,$_POST['dateCompletionadd']));
        $№outfitAdmis = htmlentities(mysqli_real_escape_string($con,$_POST['№outfitAdmisadd']));
        $FIO = htmlentities(mysqli_real_escape_string($con,$_POST['FIOadd']));
        $notice = htmlentities(mysqli_real_escape_string($con,$_POST['noticeadd']));

        $insert = "insert into journal6of (dateDiscovery,route,addressPlcDmg,№tankInstal,natureDmg,
        excWork,dateCompletion,№outfitAdmis,FIO,notice)
         values('$dateDiscovery', '$route', '$addressPlcDmg', '$№tankInstal','$natureDmg','$excWork',
          '$dateCompletion', '$№outfitAdmis', '$FIO', '$notice')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Запись успешно добавлена')</script>";
            echo"<script>window.open('Journal6OF.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось добавить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('Journal6OF.php','_self')</script>";
        }
    }
?>
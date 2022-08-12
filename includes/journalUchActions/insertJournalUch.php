<?php
    include("includes/connection.php");

    if(isset($_POST['add'])){
        $arch№ = htmlentities(mysqli_real_escape_string($con,$_POST['arch№add']));
        $titleObj = htmlentities(mysqli_real_escape_string($con,$_POST['titleObjadd']));
        $datePutOper = htmlentities(mysqli_real_escape_string($con,$_POST['datePutOperadd']));
        $dateCommis = htmlentities(mysqli_real_escape_string($con,$_POST['dateCommisadd']));
        $dateRealeaseGas = htmlentities(mysqli_real_escape_string($con,$_POST['dateRealeaseGasadd']));
        $fio = htmlentities(mysqli_real_escape_string($con,$_POST['fioadd']));
        $pasport = htmlentities(mysqli_real_escape_string($con,$_POST['pasportadd']));
        $route = htmlentities(mysqli_real_escape_string($con,$_POST['routeadd']));
        $balanceSheet = htmlentities(mysqli_real_escape_string($con,$_POST['balanceSheetadd']));
        $pressure = htmlentities(mysqli_real_escape_string($con,$_POST['pressureadd']));
        $tubeMaterial = htmlentities(mysqli_real_escape_string($con,$_POST['tubeMaterialadd']));
        $diameter = htmlentities(mysqli_real_escape_string($con,$_POST['diameteradd']));
        $length = htmlentities(mysqli_real_escape_string($con,$_POST['lengthadd']));
        $viewLaying = htmlentities(mysqli_real_escape_string($con,$_POST['viewLayingadd']));
        $countWells = htmlentities(mysqli_real_escape_string($con,$_POST['countWellsadd']));
        $countCellarage = htmlentities(mysqli_real_escape_string($con,$_POST['countCellarageadd']));
        $countEnty = htmlentities(mysqli_real_escape_string($con,$_POST['countEntyadd']));

        $check_arch№ = "select * from logbook where arch№='$arch№'";
        $run_arch№ = mysqli_query($con,$check_arch№);

        $check = mysqli_num_rows($run_arch№);

        if($check == 1){
            echo"<script>alert('Запись с таким архивным номером уже существует, пожалуйста проверьте корректность ввода данных')</script>";
            echo"<script>window.open('journalUch.php','_self')</script>";
            exit();
        }

        $insert = "insert into logbook (arch№,titleObj,datePutOper,dateCommis,dateReleaseGas,
        fio,pasport,route,balanceSheet,pressure,tubeMaterial,diameter,length,
        viewLaying,countWells,countСellarage,countEnty)
         values('$arch№', '$titleObj', '$datePutOper', '$dateCommis','$dateRealeaseGas','$fio',
          '$pasport', '$route', '$balanceSheet', '$pressure', '$tubeMaterial', '$diameter', $length, '$viewLaying',
           '$countWells', '$countCellarage', '$countEnty')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Запись успешно добавлена')</script>";
            echo"<script>window.open('JournalUch.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось добавить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('JournalUch.php','_self')</script>";
        }
    }
?>
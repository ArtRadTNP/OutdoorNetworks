
<?php
    include("includes/connection.php");

    $arch№id = $_GET['arch№'];

    if (isset($_POST['edit'])) {
        $arch№ = htmlentities($_POST['arch№Edit']);
        $titleObj = htmlentities($_POST['titleObjEdit']);
        $datePutOper = htmlentities($_POST['datePutOperEdit']);
        $dateCommis = htmlentities($_POST['dateCommisEdit']);
        $dateRealeaseGas = htmlentities($_POST['dateRealeaseGasEdit']);
        $fio = htmlentities($_POST['fioEdit']);
        $pasport = htmlentities($_POST['pasportEdit']);
        $route = htmlentities($_POST['routeEdit']);
        $balanceSheet = htmlentities($_POST['balanceSheetEdit']);
        $pressure = htmlentities($_POST['pressureEdit']);
        $tubeMaterial = htmlentities($_POST['tubeMaterialEdit']);
        $diameter = htmlentities($_POST['diameterEdit']);
        $length = htmlentities($_POST['lengthEdit']);
        $viewLaying = htmlentities($_POST['viewLayingEdit']);
        $countWells = htmlentities($_POST['countWellsEdit']);
        $countCellarage = htmlentities($_POST['countCellarageEdit']);
        $countEnty = htmlentities($_POST['countEntyEdit']);

        $update = "UPDATE logbook SET arch№='$arch№', titleObj='$titleObj', datePutOper='$datePutOper', dateCommis='$dateCommis', 
        dateReleaseGas='$dateRealeaseGas', fio='$fio', pasport='$pasport', route='$route', balanceSheet='$balanceSheet', pressure='$pressure',
        tubeMaterial='$tubeMaterial', diameter='$diameter', length='$length', viewLaying='$viewLaying', countWells='$countWells',
        countСellarage='$countСellarage', countEnty='$countEnty' WHERE 
        arch№='$arch№id'";
        $run = mysqli_query($con, $update);

        if($run){
            echo "<script>alert('Запись обновлена!')</script>";
            echo "<script>window.open('journalUch.php', '_self')</script>";
        }else{
            echo "<script>alert('Error while updating information.')</script>";
            echo "<script>window.open('journalUch.php', '_self')</script>";
        }
         
    }
?>
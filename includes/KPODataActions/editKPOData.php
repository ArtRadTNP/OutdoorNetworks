
<?php
    include("includes/connection.php");

    $arch№id = $_GET['arch№'];

    if (isset($_POST['edit'])) {
        $arch№ = htmlentities($_POST['arch№Edit']);
        $gasPipeline = htmlentities($_POST['gasPipelineEdit']);
        $passport = htmlentities($_POST['passportEdit']);
        $routeMap = htmlentities($_POST['routeMapEdit']);
        $typeSurvey = htmlentities($_POST['typeSurveyEdit']);
        $length = htmlentities($_POST['lengthEdit']);
        $dateReleaseGas = htmlentities($_POST['dateReleaseGasEdit']);
        $dateTransact = htmlentities($_POST['dateTransactEdit']);
        $№Conclusions = htmlentities($_POST['№ConclusionsEdit']);
        $defects = htmlentities($_POST['defectsEdit']);
        $Processed = htmlentities($_POST['ProcessedEdit']);

        $update = "UPDATE kpodata SET arch№='$arch№', gasPipeline='$gasPipeline', passport='$passport', routeMap='$routeMap', 
        typeSurvey='$typeSurvey', `length`='$length', dateReleaseGas='$dateReleaseGas', dateTransact='$dateTransact', №Conclusions='$№Conclusions',
        defects='$defects', Processed='$Processed' WHERE arch№='$arch№id'";
        $run = mysqli_query($con, $update);

        if($run){
            echo "<script>alert('Запись обновлена!')</script>";
            echo "<script>window.open('KPOData.php', '_self')</script>";
        }else{
            echo "<script>alert('Error while updating information.')</script>";
            echo "<script>window.open('KPOData.php', '_self')</script>";
        }
         
    }
?>
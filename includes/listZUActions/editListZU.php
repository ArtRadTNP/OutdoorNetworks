
<?php
    include("includes/connection.php");

    $arch№id = $_GET['arch№'];

    if (isset($_POST['edit'])) {
        $arch№ = htmlentities($_POST['arch№Edit']);
        $titleObj = htmlentities($_POST['titleObjEdit']);
        $pressDiamPipe = htmlentities($_POST['pressDiamPipeEdit']);
        $number = htmlentities($_POST['numberEdit']);
        $instalSite = htmlentities($_POST['instalSiteEdit']);
        $instalDate = htmlentities($_POST['instalDateEdit']);
        $dismantDate = htmlentities($_POST['dismantDateEdit']);
        $nominalDiam = htmlentities($_POST['nominalDiamEdit']);
        $connGasPipe = htmlentities($_POST['connGasPipeEdit']);
        $material = htmlentities($_POST['materialEdit']);
        $instalMethod = htmlentities($_POST['instalMethodEdit']);
        $compensator = htmlentities($_POST['compensatorEdit']);
        $yearManuf = htmlentities($_POST['yearManufEdit']);
        $funcPurpose = htmlentities($_POST['funcPurposeEdit']);
        $balanceOwnership = htmlentities($_POST['balanceOwnershipEdit']);
        $mainWizard = htmlentities($_POST['mainWizardEdit']);

        $update = "UPDATE listzu SET arch№='$arch№', titleObj='$titleObj', pressDiamPipe='$pressDiamPipe', `number`='$number', 
        instalSite='$instalSite', instalDate='$instalDate', dismantDate='$dismantDate', nominalDiam='$nominalDiam', connGasPipe='$connGasPipe', material='$material',
        instalMethod='$instalMethod', compensator='$compensator', yearManuf='$yearManuf', funcPurpose='$funcPurpose', balanceOwnership='$balanceOwnership',
        mainWizard='$mainWizard' WHERE arch№='$arch№id'";
        $run = mysqli_query($con, $update);

        if($run){
            echo "<script>alert('Запись обновлена!')</script>";
            echo "<script>window.open('listZU.php', '_self')</script>";
        }else{
            echo "<script>alert('Error while updating information.')</script>";
            echo "<script>window.open('listZU.php', '_self')</script>";
        }
         
    }
?>
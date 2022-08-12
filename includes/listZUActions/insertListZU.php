<?php
    include("includes/connection.php");

    if(isset($_POST['add'])){
        $arch№ = htmlentities(mysqli_real_escape_string($con,$_POST['arch№add']));
        $titleObj = htmlentities(mysqli_real_escape_string($con,$_POST['titleObjadd']));
        $pressDiamPipe = htmlentities(mysqli_real_escape_string($con,$_POST['pressDiamPipeadd']));
        $number = htmlentities(mysqli_real_escape_string($con,$_POST['numberadd']));
        $instalSite = htmlentities(mysqli_real_escape_string($con,$_POST['instalSiteadd']));
        $instalDate = htmlentities(mysqli_real_escape_string($con,$_POST['instalDateadd']));
        $dismantDate = htmlentities(mysqli_real_escape_string($con,$_POST['dismantDateadd']));
        $nominalDiam = htmlentities(mysqli_real_escape_string($con,$_POST['nominalDiamadd']));
        $connGasPipe = htmlentities(mysqli_real_escape_string($con,$_POST['connGasPipeadd']));
        $material = htmlentities(mysqli_real_escape_string($con,$_POST['materialadd']));
        $instalMethod = htmlentities(mysqli_real_escape_string($con,$_POST['instalMethodadd']));
        $compensator = htmlentities(mysqli_real_escape_string($con,$_POST['compensatoradd']));
        $yearManuf = htmlentities(mysqli_real_escape_string($con,$_POST['yearManufadd']));
        $funcPurpose = htmlentities(mysqli_real_escape_string($con,$_POST['funcPurposeadd']));
        $balanceOwnership = htmlentities(mysqli_real_escape_string($con,$_POST['balanceOwnershipadd']));
        $mainWizard = htmlentities(mysqli_real_escape_string($con,$_POST['mainWizardadd']));

        $check_arch№ = "select * from listZU where arch№='$arch№'";
        $run_arch№ = mysqli_query($con,$check_arch№);

        $check = mysqli_num_rows($run_arch№);

        if($check == 1){
            echo"<script>alert('Запись с таким архивным номером уже существует, пожалуйста проверьте корректность ввода данных')</script>";
            echo"<script>window.open('listZU.php','_self')</script>";
            exit();
        }

        $insert = "insert into listZU (arch№,titleObj,pressDiamPipe,number,instalSite, instalDate,
        dismantDate,nominalDiam,connGasPipe,material,instalMethod,compensator,yearManuf,funcPurpose,
        balanceOwnership,mainWizard)
        values('$arch№', '$titleObj', '$pressDiamPipe', '$number','$instalSite', '$instalDate','$dismantDate', '$nominalDiam',
        '$connGasPipe', '$material', '$instalMethod', '$compensator', '$yearManuf', $funcPurpose, '$balanceOwnership', '$mainWizard')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Запись успешно добавлена')</script>";
            echo"<script>window.open('listZU.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось добавить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('listZU.php','_self')</script>";
        }
    }
?>
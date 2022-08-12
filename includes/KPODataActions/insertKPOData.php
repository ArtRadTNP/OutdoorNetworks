<?php
    include("includes/connection.php");

    if(isset($_POST['add'])){
        $arch№ = htmlentities(mysqli_real_escape_string($con,$_POST['arch№add']));
        $gasPipeline = htmlentities(mysqli_real_escape_string($con,$_POST['gasPipelineadd']));
        $passport = htmlentities(mysqli_real_escape_string($con,$_POST['passportadd']));
        $routeMap = htmlentities(mysqli_real_escape_string($con,$_POST['routeMapadd']));
        $typeSurvey = htmlentities(mysqli_real_escape_string($con,$_POST['typeSurveyadd']));
        $length = htmlentities(mysqli_real_escape_string($con,$_POST['lengthadd']));
        $dateReleaseGas = htmlentities(mysqli_real_escape_string($con,$_POST['dateReleaseGasadd']));
        $dateTransact = htmlentities(mysqli_real_escape_string($con,$_POST['dateTransactadd']));
        $№Conclusions = htmlentities(mysqli_real_escape_string($con,$_POST['№Conclusionsadd']));
        $defects = htmlentities(mysqli_real_escape_string($con,$_POST['defectsadd']));
        $Processed = htmlentities(mysqli_real_escape_string($con,$_POST['Processedadd']));
        

        $check_arch№ = "select * from kpodata where arch№='$arch№'";
        $run_arch№ = mysqli_query($con,$check_arch№);

        $check = mysqli_num_rows($run_arch№);

        if($check == 1){
            echo"<script>alert('Запись с таким архивным номером уже существует, пожалуйста проверьте корректность ввода данных')</script>";
            echo"<script>window.open('KPOData.php','_self')</script>";
            exit();
        }

        $insert = "insert into kpodata (arch№,gasPipeline,passport,routeMap,typeSurvey,
        length,dateReleaseGas,dateTransact,№Conclusions,defects,Processed)
         values('$arch№', '$gasPipeline', '$passport', '$routeMap','$typeSurvey','$length',
          '$dateReleaseGas', '$dateTransact', '$№Conclusions', '$defects', '$Processed')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Запись успешно добавлена')</script>";
            echo"<script>window.open('KPOData.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось добавить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('KPOData.php','_self')</script>";
        }
    }
?>
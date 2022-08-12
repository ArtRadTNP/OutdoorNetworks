
<?php
    include("includes/connection.php");

    $id_record = $_GET['id_record'];

    if (isset($_POST['edit'])) {
        $MIDate = htmlentities($_POST['MIDateEdit']);
        $passport = htmlentities($_POST['passportEdit']);
        $routeMap = htmlentities($_POST['routeMapEdit']);
        $locDevice = htmlentities($_POST['locDeviceEdit']);
        $gasPipe = htmlentities($_POST['gasPipeEdit']);

        $update = "UPDATE maintenancestruct SET MIDate='$MIDate', passport='$passport', routeMap='$routeMap', locDevice='$locDevice', 
        gasPipe='$gasPipe' WHERE id_record='$id_record'";
        $run = mysqli_query($con, $update);

        if($run){
            echo "<script>alert('Запись обновлена!')</script>";
            echo "<script>window.open('maintenanceStruct.php', '_self')</script>";
        }else{
            echo "<script>alert('Error while updating information.')</script>";
            echo "<script>window.open('maintenanceStruct.php', '_self')</script>";
        }
         
    }
?>
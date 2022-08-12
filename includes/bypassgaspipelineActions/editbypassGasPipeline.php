
<?php
    include("includes/connection.php");

    $id_record = $_GET['id_record'];

    if (isset($_POST['edit'])) {
        $route = htmlentities($_POST['routeEdit']);
        $data = htmlentities($_POST['dataEdit']);
        $moving = htmlentities($_POST['movingEdit']);
        $detector = htmlentities($_POST['detectorEdit']);
        $master = htmlentities($_POST['masterEdit']);
        $workers = htmlentities($_POST['workersEdit']);
        $inspection = htmlentities($_POST['inspectionEdit']);
        $accomplishment = htmlentities($_POST['accomplishmentEdit']);

        $update = "UPDATE bypassgaspipeline SET `route`='$route', `data`='$data', `moving`='$moving', `detector`='$detector', 
        `master`='$master', `workers`='$workers', `inspection`='$inspection', `accomplishment`='$accomplishment' WHERE 
        `id_record`='$id_record'";
        $run = mysqli_query($con, $update);

        if($run){
            echo "<script>alert('Запись обновлена!')</script>";
            echo "<script>window.open('bypassGasPipeline.php', '_self')</script>";
        }else{
            echo "<script>alert('Error while updating information.')</script>";
            echo "<script>window.open('bypassGasPipeline.php', '_self')</script>";
        }
         
    }
?>
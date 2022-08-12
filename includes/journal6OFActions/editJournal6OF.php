
<?php
    include("includes/connection.php");

    $id_record = $_GET['id_record'];

    if (isset($_POST['edit'])) {
        $dateDiscovery = htmlentities($_POST['dateDiscoveryEdit']);
        $route = htmlentities($_POST['routeEdit']);
        $addressPlcDmg = htmlentities($_POST['addressPlcDmgEdit']);
        $№tankInstal= htmlentities($_POST['№tankInstalEdit']);
        $natureDmg= htmlentities($_POST['natureDmgEdit']);
        $excWork = htmlentities($_POST['excWorkEdit']);
        $dateCompletion = htmlentities($_POST['dateCompletionEdit']);
        $№outfitAdmis = htmlentities($_POST['№outfitAdmisEdit']);
        $FIO = htmlentities($_POST['FIOEdit']);
        $notice = htmlentities($_POST['noticeEdit']);

        $update = "UPDATE journal6of SET dateDiscovery='$dateDiscovery', `route`='$route', addressPlcDmg='$addressPlcDmg', №tankInstal='$№tankInstal', 
        natureDmg='$natureDmg', excWork='$excWork', dateCompletion='$dateCompletion', №outfitAdmis='$№outfitAdmis', FIO='$FIO', notice='$notice' WHERE id_record='$id_record'";
        $run = mysqli_query($con, $update);

        if($run){
            echo "<script>alert('Запись обновлена!')</script>";
            echo "<script>window.open('journal6OF.php', '_self')</script>";
        }else{
            echo "<script>alert('Error while updating information.')</script>";
            echo "<script>window.open('journal6OF.php', '_self')</script>";
        }
         
    }
?>
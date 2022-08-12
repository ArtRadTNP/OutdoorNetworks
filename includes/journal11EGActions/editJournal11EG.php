
<?php
    include("includes/connection.php");

    $id_record = $_GET['id_record'];

    if (isset($_POST['edit'])) {
        $data = htmlentities($_POST['dataEdit']);
        $title = htmlentities($_POST['titleEdit']);
        $permissNumber = htmlentities($_POST['permissNumberEdit']);
        $statusMark = htmlentities($_POST['statusMarkEdit']);
        $locksInitials = htmlentities($_POST['locksInitialsEdit']);
        $methodapplic = htmlentities($_POST['methodapplicEdit']);

        $update = "UPDATE journal11eg SET `data`='$data', title='$title', permissNumber='$permissNumber', statusMark='$statusMark', 
        locksInitials='$locksInitials', methodapplic='$methodapplic' WHERE `id_record`='$id_record'";
        $run = mysqli_query($con, $update);

        if($run){
            echo "<script>alert('Запись обновлена!')</script>";
            echo "<script>window.open('journal11EG.php', '_self')</script>";
        }else{
            echo "<script>alert('Error while updating information.')</script>";
            echo "<script>window.open('journal11EG.php', '_self')</script>";
        }
         
    }
?>
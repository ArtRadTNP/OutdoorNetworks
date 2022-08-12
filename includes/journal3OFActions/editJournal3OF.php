
<?php
    include("includes/connection.php");

    $id_record = $_GET['id_record'];

    if (isset($_POST['edit'])) {
        $data = htmlentities($_POST['dataEdit']);
        $title = htmlentities($_POST['titleEdit']);
        $FIOAplicant = htmlentities($_POST['FIOAplicantEdit']);
        $typeWork= htmlentities($_POST['typeWorkEdit']);
        $addressObj= htmlentities($_POST['addressObjEdit']);
        $applicAccept = htmlentities($_POST['applicAcceptEdit']);
        $appointRepres = htmlentities($_POST['appointRepresEdit']);
        $resultWork = htmlentities($_POST['resultWorkEdit']);

        $update = "UPDATE journal3of SET `data`='$data', `title`='$title', FIOAplicant='$FIOAplicant', typeWork='$typeWork', 
        addressObj='$addressObj', applicAccept='$applicAccept', appointRepres='$appointRepres', resultWork='$resultWork' WHERE id_record='$id_record'";
        $run = mysqli_query($con, $update);

        if($run){
            echo "<script>alert('Запись обновлена!')</script>";
            echo "<script>window.open('journal3OF.php', '_self')</script>";
        }else{
            echo "<script>alert('Error while updating information.')</script>";
            echo "<script>window.open('journal3OF.php', '_self')</script>";
        }
         
    }
?>
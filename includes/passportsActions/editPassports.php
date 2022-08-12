
<?php
    include("includes/connection.php");

    $id_record = $_GET['id_record'];

    if (isset($_POST['edit'])) {
        $passport = htmlentities($_POST['passportEdit']);
        $data = htmlentities($_POST['dataEdit']);
        $placeWork = htmlentities($_POST['placeWorkEdit']);
        $typeWork = htmlentities($_POST['typeWorkEdit']);
        $etc = htmlentities($_POST['etcEdit']);
        $persRespProd = htmlentities($_POST['persRespProdEdit']);

        $update = "UPDATE `passport` SET `passport` = '$passport', `data` = '$data', `placeWork` = '$placeWork', `typeWork` = '$typeWork', `etc` = '$etc', `persRespProd` = '$persRespProd'
                   WHERE id_record='$id_record'";
        $run = mysqli_query($con, $update);

        if($run){
            echo "<script>alert('Запись обновлена!')</script>";
            echo "<script>window.open('pasports.php', '_self')</script>";
        }else{
            echo "<script>alert('Error while updating information.')</script>";
            echo "<script>window.open('pasports.php', '_self')</script>";
        }
         
    }
?>

<?php
    include("includes/connection.php");

    $numberid = $_GET['number'];

    if (isset($_POST['edit'])) {
        $data = htmlentities($_POST['dataEdit']);
        $number = htmlentities($_POST['numberEdit']);
        $kindWork = htmlentities($_POST['kindWorkEdit']);
        $jobGiven = htmlentities($_POST['jobGivenEdit']);
        $teamCompos = htmlentities($_POST['teamComposEdit']);

        $update = "UPDATE outfittaskkpo SET `data`='$data', `number`='$number', typeWork='$kindWork', jobGiven='$jobGiven', 
        teamCompos='$teamCompos' WHERE `number`='$numberid'";
        $run = mysqli_query($con, $update);

        if($run){
            echo "<script>alert('Запись обновлена!')</script>";
            echo "<script>window.open('outfitTaskKPO.php', '_self')</script>";
        }else{
            echo "<script>alert('Error while updating information.')</script>";
            echo "<script>window.open('outfitTaskKPO.php', '_self')</script>";
        }
         
    }
?>

<?php
    include("includes/connection.php");

    $numberid = $_GET['number'];

    if (isset($_POST['edit'])) {
        $number = htmlentities($_POST['numberEdit']);
        $dateIssue = htmlentities($_POST['dateIssueEdit']);
        $permGrant = htmlentities($_POST['permGrantEdit']);
        $addressWork = htmlentities($_POST['addressWorkEdit']);
        $typeWork = htmlentities($_POST['typeWorkEdit']);
        $permGive = htmlentities($_POST['permGiveEdit']);
        $active = htmlentities($_POST['activeEdit']);
        $controlled = htmlentities($_POST['controlledEdit']);

        $update = "UPDATE journal9eg SET `number`='$number', dateIssue='$dateIssue', permGrant='$permGrant', addressWork='$addressWork', 
        typeWork='$typeWork', permGive='$permGive', active='$active', controlled='$controlled' WHERE `number`='$numberid'";
        $run = mysqli_query($con, $update);

        if($run){
            echo "<script>alert('Запись обновлена!')</script>";
            echo "<script>window.open('journal9EG.php', '_self')</script>";
        }else{
            echo "<script>alert('Error while updating information.')</script>";
            echo "<script>window.open('journal9EG.php', '_self')</script>";
        }
         
    }
?>
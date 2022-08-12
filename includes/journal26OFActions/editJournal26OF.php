
<?php
    include("includes/connection.php");

    $id_record = $_GET['id_record'];

    if (isset($_POST['edit'])) {
        $dateEvent = htmlentities($_POST['dateEventEdit']);
        $locationWork = htmlentities($_POST['locationWorkEdit']);
        $natureWork = htmlentities($_POST['natureWorkEdit']);
        $teamCompos= htmlentities($_POST['teamComposEdit']);
        $events= htmlentities($_POST['eventsEdit']);
        $persIssuedTask = htmlentities($_POST['persIssuedTaskEdit']);

        $update = "UPDATE journal26of SET dateEvent='$dateEvent', `locationWork`='$locationWork', natureWork='$natureWork', teamCompos='$teamCompos', 
        events='$events', persIssuedTask='$persIssuedTask' WHERE id_record='$id_record'";
        $run = mysqli_query($con, $update);

        if($run){
            echo "<script>alert('Запись обновлена!')</script>";
            echo "<script>window.open('journal26OF.php', '_self')</script>";
        }else{
            echo "<script>alert('Error while updating information.')</script>";
            echo "<script>window.open('journal26OF.php', '_self')</script>";
        }
         
    }
?>
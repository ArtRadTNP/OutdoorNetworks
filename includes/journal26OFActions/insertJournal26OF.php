<?php
    include("includes/connection.php");

    if(isset($_POST['add'])){
        $dateEvent = htmlentities(mysqli_real_escape_string($con,$_POST['dateEventadd']));
        $locationWork = htmlentities(mysqli_real_escape_string($con,$_POST['locationWorkadd']));
        $natureWork = htmlentities(mysqli_real_escape_string($con,$_POST['natureWorkadd']));
        $teamCompos = htmlentities(mysqli_real_escape_string($con,$_POST['teamComposadd']));
        $events = htmlentities(mysqli_real_escape_string($con,$_POST['eventsadd']));
        $persIssuedTask = htmlentities(mysqli_real_escape_string($con,$_POST['persIssuedTaskadd']));

        $insert = "insert into journal26of (dateEvent,locationWork,natureWork,teamCompos,events,
        persIssuedTask) values('$dateEvent', '$locationWork', '$natureWork', '$teamCompos','$events','$persIssuedTask')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Запись успешно добавлена')</script>";
            echo"<script>window.open('Journal26OF.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось добавить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('Journal26OF.php','_self')</script>";
        }
    }
?>
<?php
    include("includes/connection.php");

    if(isset($_POST['add'])){
        $data = htmlentities(mysqli_real_escape_string($con,$_POST['dataadd']));
        $title = htmlentities(mysqli_real_escape_string($con,$_POST['titleadd']));
        $permissNumber = htmlentities(mysqli_real_escape_string($con,$_POST['permissNumberadd']));
        $statusMark = htmlentities(mysqli_real_escape_string($con,$_POST['statusMarkadd']));
        $locksInitials = htmlentities(mysqli_real_escape_string($con,$_POST['locksInitialsadd']));
        $methodapplic = htmlentities(mysqli_real_escape_string($con,$_POST['methodapplicadd']));

        

        $insert = "insert into journal11eg (data,title,permissNumber,statusMark,locksInitials,methodapplic)
         values('$data', '$title', '$permissNumber', '$statusMark','$locksInitials','$methodapplic')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Запись успешно добавлена')</script>";
            echo"<script>window.open('Journal11EG.php','_self')</script>";
        }
        else{
            echo"<script>alert('Не удалось добавить запись, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('Journal11EG.php','_self')</script>";
        }
    }
?>
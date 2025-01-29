<?php

//--------------------Disable user accounts----------------------------------------//
if(isset($_GET['delete_userId'])) {
    
   $delete_user = mysqli_real_escape_string($db_connection, $_GET['delete_userId']);

    $sql = "UPDATE users SET Status=0 WHERE User_ID = '$delete_user'";
    $result = mysqli_query($db_connection, $sql);
    
    if ($result) {
    
        header('location: AdminUsers.php');

    } 
    else {
        echo "<script>alert('Sorry! Suspend User Account is Unsuccessful')</script>";
    }
}


//----------------------------Remove Flight----------------------------------------//
if(isset($_GET['delete_flightId'])) {
    
    $delete_flight = mysqli_real_escape_string($db_connection, $_GET['delete_flightId']);
 
     $sql = "DELETE FROM flight WHERE Flight_ID = '$delete_flight'";
     $result = mysqli_query($db_connection, $sql);
     
     if ($result) {
     
         header('location: AdminFlights.php');
 
     } 
     else {
         echo "<script>alert('Sorry! Remove Flight is Unsuccessful')</script>";
     }
 }

 //----------------------------Delete Schedule----------------------------------------//
if(isset($_GET['delete_scheduleNo'])) {
    
    $delete_schedule = mysqli_real_escape_string($db_connection, $_GET['delete_scheduleNo']);
 
     $sql = "DELETE FROM schedule WHERE Schedule_No='$delete_schedule'";
     $result=mysqli_query($db_connection, $sql);
     
     if ($result) {
     
         header('location: AdminSchedule.php');
 
     } 
     else {
         echo "<script>alert('Sorry! Remove Schedule is Unsuccessful')</script>";
     }
 }

 //-----------------------Add New Flight Form---------------------------------------------//
 if(isset($_POST["add_flight"])) {

    $flight_Id = mysqli_real_escape_string($db_connection, $_POST['fID']);
    $e_seat = mysqli_real_escape_string($db_connection, $_POST['eSeat']);
    $b_seat = mysqli_real_escape_string($db_connection, $_POST['bSeat']);
    $r_date = mysqli_real_escape_string($db_connection, $_POST['rDate']);

    $sql= "INSERT INTO flight (Flight_ID, E_Seat, B_Seat, Reg_Date) VALUES ('$flight_Id', $e_seat, $b_seat, '$r_date')";
    $result = mysqli_query($db_connection,$sql);

    if ($result) {
     
        header('location: AdminFlights.php');

    } 
    else {
        echo "<script>alert('Sorry! Add Flight is Unsuccessful')</script>";
    }
  
 }

 //--------------------------Add New Schedule Form------------------------------------------------//
 if(isset($_POST["add_schedule"])) {

    $flight_Id = mysqli_real_escape_string($db_connection, $_POST['fID']);
    $s_from = mysqli_real_escape_string($db_connection, $_POST['from_country']);
    $s_to = mysqli_real_escape_string($db_connection, $_POST['to_country']);
    $d_date = mysqli_real_escape_string($db_connection, $_POST['sDepDate']);
    $d_time = mysqli_real_escape_string($db_connection, $_POST['sDepTime']);
    $r_date = mysqli_real_escape_string($db_connection, $_POST['sReturnDate']);
    $r_time = mysqli_real_escape_string($db_connection, $_POST['sReturnTime']);
    $e_fare = mysqli_real_escape_string($db_connection, $_POST['sEcoFare']);
    $b_fare = mysqli_real_escape_string($db_connection, $_POST['sBsFare']);
  
    $sql= "INSERT INTO schedule ( Flight_ID, Start_From, End_To, D_Date, D_Time, R_Date, R_Time, E_Fare, B_Fare) VALUES ( '$flight_Id', '$s_from', '$s_to', '$d_date', '$d_time', '$r_date', '$r_time', $e_fare, $b_fare)";
    $result = mysqli_query($db_connection,$sql);

    if ($result) {
     
        header('location: AdminSchedule.php');

    } 
    else {
        echo "<script>alert('Sorry! Add Schedule is Unsuccessful')</script>";
    }
  
 }

 //--------------------Update Schedule --> redirect to schedule form----------------------------------//
 if(isset($_GET['selected_scheduleNo']) ){
    $selected_s_id = mysqli_real_escape_string($db_connection, $_GET['selected_scheduleNo']);
    $_SESSION['selected_schedule_id']=$selected_s_id;
    header('location: EditAdminScheduleForm.php'); 
 }

 //--------------------------------Update Schedule---------------------------------------------------//
 if(isset($_POST["update_schedule"])) {

    $flight_Id = mysqli_real_escape_string($db_connection, $_POST['fID']);
    $s_from = mysqli_real_escape_string($db_connection, $_POST['from_country']);
    $s_to = mysqli_real_escape_string($db_connection, $_POST['to_country']);
    $d_date = mysqli_real_escape_string($db_connection, $_POST['sDepDate']);
    $d_time = mysqli_real_escape_string($db_connection, $_POST['sDepTime']);
    $r_date = mysqli_real_escape_string($db_connection, $_POST['sReturnDate']);
    $r_time = mysqli_real_escape_string($db_connection, $_POST['sReturnTime']);
    $e_fare = mysqli_real_escape_string($db_connection, $_POST['sEcoFare']);
    $b_fare = mysqli_real_escape_string($db_connection, $_POST['sBsFare']);
  
    $sql= "UPDATE schedule SET  Flight_ID='$flight_Id', Start_From='$s_from', End_To='$s_to', D_Date='$d_date', D_Time='$d_time', R_Date='$r_date', R_Time='$r_time', E_Fare=$e_fare, B_Fare=$b_fare ";
    $result = mysqli_query($db_connection,$sql);

    if ($result) {
     
        header('location: AdminSchedule.php');

    } 
    else {
        echo "<script>alert('Sorry! Add Schedule is Unsuccessful')</script>";
    }
  
 }


?>
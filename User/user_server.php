<?php
//--------------------------------------------- Redirect to New Booking page---
if(isset($_GET['selected_u_scheduleId'])){  
    $selected_s_id = mysqli_real_escape_string($db_connection, $_GET['selected_u_scheduleId']);
    $_SESSION['selected_schedule_id']=$selected_s_id;
    header('location: UserNewBooking.php'); 

}

//----------------------------------Add new Booking---------------------------------------//

if (isset($_POST["add_Booking"])) {
    $full_name = mysqli_real_escape_string($db_connection, $_POST['fullname']);
    $u_email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $u_address = mysqli_real_escape_string($db_connection, $_POST['address']);
    $u_city = mysqli_real_escape_string($db_connection, $_POST['city']);
    $u_trip = mysqli_real_escape_string($db_connection, $_POST['trip_type']);
    $u_class = mysqli_real_escape_string($db_connection, $_POST['class_type']);
    $u_adults = mysqli_real_escape_string($db_connection, $_POST['adults']);
    $u_ScheduleNo = isset($_SESSION['selected_schedule_id']) ? $_SESSION['selected_schedule_id'] : null;
    $u_ID = isset($_SESSION['u_ID']) ? $_SESSION['u_ID'] : null;
    $u_Ddate = mysqli_real_escape_string($db_connection, $_POST['departure']);   
  
    if ($u_ScheduleNo !== null && $u_ID !== null) {
        $sql = "INSERT INTO booking (Full_Name, Email, U_Address, City, Trip_Type, Class, Adults, User_ID, Schedule_No, Departure_Date) VALUES ('$full_name', '$u_email', '$u_address', '$u_city', '$u_trip', '$u_class', $u_adults, $u_ID, $u_ScheduleNo, '$u_Ddate')";
        $result = mysqli_query($db_connection, $sql);

        if ($result) {
            header('location: Payment.php');
        } else {
            echo "<script>alert('Sorry! Add New Booking is Unsuccessful')</script>";
            echo "MySQL Error: " . mysqli_error($db_connection);
        }
    } else {
        echo "<script>alert('Sorry! User ID or Schedule ID not found in session')</script>";
    }
}


 //----------------------------Cancel Booking----------------------------------------//
if(isset($_GET['cancel_bookingId'])) {
    
    $cancel_booking = mysqli_real_escape_string($db_connection, $_GET['cancel_bookingId']);
 
     $sql = "DELETE FROM booking WHERE Reservation_ID = '$cancel_booking'";
     $result = mysqli_query($db_connection, $sql);
     
     if ($result) {
     
         header('location: UserViewBooking.php');
 
     } 
     else {
         echo "<script>alert('Sorry! Cancel is Unsuccessful')</script>";
     }
 }

  //----------------------------Delete History Booking----------------------------------------//
if(isset($_GET['delete_bookingId'])) {
    
    $delete_booking = mysqli_real_escape_string($db_connection, $_GET['delete_bookingId']);
 
     $sql = "DELETE FROM booking WHERE Reservation_ID = '$delete_booking'";
     $result = mysqli_query($db_connection, $sql);
     
     if ($result) {
     
         header('location: UserViewHistoryBooking.php');
 
     } 
     else {
         echo "<script>alert('Sorry! Cancel is Unsuccessful')</script>";
     }
 }





































?>
<?php
session_start();

// initializing variables
$ราคาห้อง = "";
$รายละเอียด    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'roomregis');

// REGISTER USER
if (isset($_POST['reg_room'])) {
  // receive all input values from the form
  $ราคาห้อง = mysqli_real_escape_string($db, $_POST['ราคาห้อง']);
  $รายละเอียด = mysqli_real_escape_string($db, $_POST['รายละเอียด']);
  $ค่าใช้จ่ายโดยเฉลี่ยต่อเดือน = mysqli_real_escape_string($db, $_POST[' ']);
 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "ราคาห้อง is required"); }
  if (empty($email)) { array_push($errors, "รายละเอียด is required"); }
  if (empty($password_1)) { array_push($errors, "ค่าใช้จ่ายโดยเฉลี่ยต่อเดือน is required"); }


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $room_check_query = "SELECT * FROM room WHERE ราคาห้อง='$ราคาห้อง' OR รายละเอียด='$รายละเอียด' LIMIT 1";
  $result = mysqli_query($db, $room_check_query);
  $room = mysqli_fetch_assoc($result);
  
 

  


?>
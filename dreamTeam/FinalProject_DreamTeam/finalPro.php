<?php

$conn = mysql_connect('localhost','user1','user1pass');
$db = mysql_select_db("test",$conn);
?>

<?php

$fname = ($_POST['fName']);
$lname = ($_POST['lName']);
$phone = ($_POST['Phone']);
$section = ($_POST['Section']);
$seats = ($_POST['Seats']);
$date = ($_POST['Date']);
$time = ($_POST['Time']);
$sql = "INSERT into reservation(res_Fname, res_Lname, res_Phone, email, seats, date, time, tlbSect) 
Values('$_POST[fName]','$_POST[lName]','$_POST[Phone]','$_POST[Email]','$_POST[Seats]','$_POST[Date]','$_POST[Time]','$_POST[Section]')";
$qury = mysql_query($sql);
#INSERT into reservations values

if(!$qury)
    echo "Failed ".mysql_error();
else
    echo "Thank you. Your reservation was an success!";
    echo "<br>";
    echo "Your reservation is for " .$date. " at " .$time. "pm<br/>";
    echo '<a href="#">Reservations Page</a>';
    echo "<br>";
    echo '<a href="#">Home Page</a>';   
  
  
  //email
$email = ($_POST['Email']);
$myemail= "jarelt.41@gmail.com";
$email1 = "$email, $myemail";
$subject = "Your reservation";

$message = "
Name: $fname $lname
Date: $date
Time: $time 
Section: $section
Seats: $seats
Phone Number: $phone
";
//email   
mail($email1,$subject,$message)
?>
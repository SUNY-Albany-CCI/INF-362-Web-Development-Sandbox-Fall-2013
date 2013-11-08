<?php

$conn = mysql_connect('localhost','user1','user1pass');
$db = mysql_select_db("test",$conn);
?>

<?php

$fname = ($_POST['fName']);
//$phone = ($_POST['Phone']);
//$seats = ($_POST['Seats']);
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
    echo '<a href="/~Jarel/finalProject.php">Reservations Page</a>';
    echo "<br>";
    echo '<a href="/~Jarel/finalProject.php">Home Page</a>';   
     

?>
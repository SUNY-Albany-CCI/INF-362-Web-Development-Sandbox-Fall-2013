<!DOCTYPE html>

<html>
<link rel="stylesheet" href="finalPro.css" type="text/css">
<head>
<script type="text/javascript" src="finalPro.js"></script>
<title>Reservations</title>
</head>



<body>
<h1>Reservations</h1>

<form action="finalPro.php" method="post">

<table align="center">
<tr>
<td>First Name: <input title="Enter your first name" type="text" name="fName" size="30" placeholder="First" required /></td>
</tr>

<tr>
<td>Last Name: <input title="Enter your last name" type="text" name="lName" size="30" placeholder="Last" required/></td>
</tr>

<tr>
<td>Phone: <input title="Enter your phone number" type="tel" name="Phone" size="12" placeholder="(000)555-5555" required/></td>
</tr>

<tr>
<td>Email: <input title="Enter your email" type="email" name="Email" size="20" placeholder="johndoe@email.com" required/></td>
</tr>

<tr>
<td>Seats: <select title="Select the amount of seats you need" name="Seats" required>
    <option></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    </select>
</td>
</tr>

<tr>
<td>Section: <select title="Select the section in which you wish to be seated" name="Section" required>
    <option></option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    </select>
</td>
</tr>

<tr>
<td>Date: <input title="Select a date" id="date" type="date" name="Date" size="10" placeholder="YYYY-MM-DD" required/></td>
</tr>

<tr>
<td>Time: <select title="Select a time" name="Time" required>
    <option></option>
    <option value="12:00">12:00</option>
    <option value="12:30">12:30</option>
    <option value="1:00">01:00</option>
    <option value="1:30">01:30</option>
    <option value="2:00">02:00</option>
    <option value="2:30">02:30</option>
    <option value="3:00">03:00</option>
    <option value="3:30">03:30</option>
    <option value="4:00">04:00</option>
    <option value="4:30">04:30</option>
    <option value="5:00">05:00</option>
    <option value="5:30">05:30</option>
    <option value="6:00">06:00</option>
    <option value="6:30">06:30</option>
    <option value="7:00">07:00</option>
    <option value="7:30">07:30</option>
    <option value="8:00">08:00</option>
    <option value="8:30">08:30</option>
    </select>
</td>
</tr>
</table>

<br/>

<input type="submit" value="Reserve"/>
</form>

</body>

</html>
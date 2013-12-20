<html>
	<head>
		<title>My Schedule</title>
		<link rel="stylesheet" type="text/css" href="schedule.css">
	</head>
	<body>
		<?php include('navBar.html'); ?>
	
		<h1>My Schedule</h1>
		<table id="scheduleTable">
			<?php
				$weeks = 5;
				$days = 7;
				$totalDays = 1;
				$firstEmptyRow = True;
				
				for($x = 0; $x < $weeks; $x++)
				{
					echo "<tr>";
					for($y = 0; $y < $days; $y++)
					{
						if($firstEmptyRow || $totalDays >30)
							echo "<td class='emptyCell'></td>";
						else
						{
							echo "<td>Day $totalDays <br/> <a href='' id='day$totalDays' >workout</a></td>";
							$totalDays++;
						}
					}
					if($firstEmptyRow)
					{
						$firstEmptyRow = False;
						$x--;
					}
					echo "</tr>";
				}
			?>
		</table>
	</body>


</html>
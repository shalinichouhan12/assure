<?php
 
$con=mysqli_connect("localhost","root","","task");
$r=mysqli_query($con,"select * from student");

echo "<table border=1 cellspacing=0 cellpadding=10 align='center'>";
	echo "<tr><td>Id</td>";
	echo "<td>Name</td>";
		echo "<td>Class</td>";
		echo "<td>Email</td></tr>";
			
			while($row=mysqli_fetch_array($r))
			{
				echo "</tr><td>$row[0]</td>";
				echo "<td>$row[1]</td>";
				echo "<td>$row[2]</td>";
				echo "<td>$row[3]</td></tr>";
			}
echo "</table>";			

?>
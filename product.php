 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "g4u";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT pid, pname, pmodel, pdimension, pweight, pcpu, pgpu, pdesc, pram, pdisplay, pstorage, pmemory, pos, pbattery,pcamera, psim, pwifi, pbluetooth, pusb, pprice
	FROM product";
$result = $conn->query($sql);
?>

<html>

<head>
	<title></title>

</head>

<body>
	<p align="right">
	<table cellpadding="5px">		
		<tbody>
		<?php
		if ($result->num_rows > 0) 
		{
			while ($row = $result->fetch_assoc())
			{
				if($row['pid'] == 1)
				{
					echo '<tr>'.
						'<td>'."ID:".'</td>'.
						'<td>'.$row['pid'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."NAME".'</td>'.
						'<td>'.$row['pname'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."MODEL".'</td>'.
						'<td>'.$row['pmodel'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."DIMENSION".'</td>'.
						'<td>'.$row['pdimension'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."WEIGHT".'</td>'.
						'<td>'.$row['pweight'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."CPU".'</td>'.
						'<td>'.$row['pcpu'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."GPU".'</td>'.
						'<td>'.$row['pgpu'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."RAM".'</td>'.
						'<td>'.$row['pram'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."DISPLAY".'</td>'.
						'<td>'.$row['pdisplay'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."STORAGE".'</td>'.
						'<td>'.$row['pstorage'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."MEMORY".'</td>'.
						'<td>'.$row['pmemory'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."OS".'</td>'.
						'<td>'.$row['pos'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."BATTERY".'</td>'.
						'<td>'.$row['pbattery'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."CAMERA".'</td>'.
						'<td>'.$row['pcamera'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."SIM".'</td>'.
						'<td>'.$row['psim'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."WIFI".'</td>'.
						'<td>'.$row['pwifi'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."BLUETOOTH".'</td>'.
						'<td>'.$row['pbluetooth'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."USB".'</td>'.
						'<td>'.$row['pusb'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."PRICE".'</td>'.
						'<td>'.$row['pprice'].'</td>'.
					 '</tr>';
				}

			}
		}

		else 
		{
    		echo "0 results";
    	}
				$conn->close();
		?>
		</tbody>
	</table>
</p>
</body>

</html>
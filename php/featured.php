<body>
<head>
	<style type="text/css">
		#product-image img{
			padding:1em;
			width: 100px;
			height: 100px;
		}
		#over{
			float:left;
			padding-right: 1px;
		}
	</style>
</head>
<body>
<?php
/**********************PRODUCTS*************************/
	//Preparing select statement
	$sql = "SELECT * from `product` WHERE ptag='FEATURED'";
	//Preparing statement for query!
	$fproduct = $db->query($sql);
	echo "<br><br>";
	if($fproduct->num_rows > 0){
	
	while($row = $fproduct->fetch_assoc()){
	
		echo '<div id="over">
				<div id="product-image"><a href=""><img src="data:image/jpeg;base64,'.base64_encode($row["pimage"]).'"/></a></div>';
		echo "<h4>".$row['pname'].$row['pmodel']."</h4>";
		echo "<h3>".$row['pprice']."</h3><br><br>
			</div>
		";
		
	}
}
?>
</body>
</html>
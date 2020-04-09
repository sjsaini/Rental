<!DOCTYPE html>
<html>
<head>



	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!-- fonawesome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/portfolio.png" type="image/gif">


	<title>Home</title>

	<style type="text/css">

		body{
			background: linear-gradient(to right,#369693,transparent,#369693);
			/*background-image: url(bg7.jpg);*/
		}

		#dest{
			text-decoration: none;
			color: black;
			background-color: rgba(0,0,0,0.3);
			padding: 4px 3px;
			border-radius: 3px;
			color: white;
			font-style: bolder;
		}

		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}

		#img_css{
			width:70px;
			height: 30px;
		}

		
	</style>



</script>

</head>
<body>



	<?php	

	echo "	<center><h3><b><span style='position:absolute; margin-left:-5%;'>Renting Portal</span?</b></h3></center>";

	echo "<span style='position:; margin-left: 83%; '>";
	echo "<mark><b>Welcome: </b>Buyer</mark>";
	echo "</span>";

	?>

	<hr>



<!--===================== Php code for fetching data of "teacher" from db and show on web page ===========================-->

<?php $conn=mysqli_connect("localhost","root","","rentaldb");
if (!$conn) {
	die("connection error".mysqli_connect_error());
}

$sql="select id,flattype,ownername,charges,contact from rentingdetails";
$get=mysqli_query($conn,$sql);
?>

<center><div title="Rental Specfications Shown Here" style="width: 80%; margin-left:%; padding: 8px; background-color:rgba(0,0,0,0.2); border-radius: 8px; box-shadow:1px 20px 10px grey;">

	<table id="myTable">
		<thead>

			<tr><a  data-toggle="modal" data-target="#myModal">
				<b>L<i class="fa fa-eye" aria-hidden="true" style="color: white; font-size: 15px; padding: 3px 5px;"></i><i class="fa fa-eye" aria-hidden="true" style="color: white; font-size: 15px; padding: 3px 5px;"></i>king For Rental Flats</b>
				
			</a></tr>

			<tr>
				<th>Id</th>
				<th>Flat-Type</th>
				<th>Owner-Name</th>
				<th>Charges</th>
				<th>Contact No.</th>	
			</tr>

		</thead>

		<tbody>
			<?php
			foreach ($get as $row) 
			{
				?>
				 <tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo $row['flattype']?></td>
					<td><?php echo $row['ownername']?></td>
					<td><?php echo $row['charges']?></td>
					<td><?php echo $row['contact']?></td>
				</tr>

				<?php
			}
			?> 
		</tbody>

	</table>
</div>
</center>

<script>

	$(document).ready( function () {
		$('#myTable').DataTable();
	} );

</script>
</body>
</html>



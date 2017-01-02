<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
      <link href="<?php echo base_url('theme/css/bootstrap.min.css')?>" rel="stylesheet">

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Listing de ma BD!</h1>

	<div id="body">
		<?php 
				$query = $this->db->query("select * from countries");


		 ?>
		 <table class="table table-striped">
		 	<tr >
		 		<td>Country code </td>
		 		<td>Country Name </td>
		 		<td>Population</td>
		 		<td>Action</td>
		 	</tr>	
		 	<?php 
		 	foreach ($query->result() as $row) {
		 		
		 	
		 	 ?>
		 	<tr>
		 		<td><?php echo $row->countryCode; ?></td>
		 		<td><?php echo $row->countryName; ?></td>
		 		<td><?php echo $row->population; ?></td>
		 		<td><a class="btn btn-danger" onclick="return confirm('Êtes-vous sûr ?')" href="<?php echo base_url("index.php/Home/delete/".$row->id);?>">Supprimer</a>

		 		<a class="btn btn-success" href="<?php echo base_url("index.php/Home/update/".$row->id);?>">Modifier</a></td>


		 	</tr>
		 	<?php
		 	}
		 	 ?>
		 </table>
	</div>

	
</div>

</body>
</html>
<html>
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
<?php if($res){ ?>
	<?php foreach ($res as $ligne) {
		?>
	
<div class="container">

<form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Home/update/'.$id); ?>">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">country Name</label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" name="c_name" value="<?php echo $ligne->countryName; ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="countryName" class="col-sm-2 control-label">country Code </label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" name="c_code" value="<?php echo $ligne->countryCode; ?>" >
		    </div>
		  </div>
		    <div class="form-group">
		    <label for="population" class="col-sm-2 control-label" name="pop">population</label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" name="population" value="<?php echo $ligne->population;  ?>"   >
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <input type="submit" class="btn btn-primary" name="up" value="Update"/>
		    </div>
		  </div>
</form>
</div>

<?php } ?>
<?php } ?>
</body>
</html>
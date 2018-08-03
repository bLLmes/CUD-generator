<?php include 'app/index.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>CUD-generator</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/css.php'; ?>
</head>
<body>
	<div class="jumbotron text-center">
	  <h1>CUD-generator</h1> 

	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">Upload CSV</div>
  					<div class="card-body">
  						<form id="formSubmit" method="POST" enctype="multipart/form-data">
  							
							<div class="appendInputGroup">
								<div class="input-group">
								  	<input type="text" class="form-control" name="dbColumnName[]">
								  	<input type="text" class="form-control" name="csvColumnName[]">
								  	<input type="text" class="form-control" name="columnType[]">
								  	<button type="button" class="close closeBtn" aria-label="Close">
							  			<span aria-hidden="true">&times;</span>
						      		</button>
								</div>
							</div>
							<br>
							<div class="addDivColumn">
								<button type="button" class="btn btn-default addColumn">Add Column</button>
							</div>
							<div style="clear: both;"></div>
							<br>
							<input class="btn btn-default" type="hidden" name="full_path_real">
							<input class="btn btn-default" type="file" name="filename" id="filename">
							<div style="clear: both;"></div><br>
							<button class="btn btn-default" type="button" name="submit">Submit</button>
						</form>
  						<?php submitCSV(); ?>
  					</div> 		
				</div>
			</div>
		</div>
	</div>
<?php include 'includes/js.php'; ?>
</body>
</html>

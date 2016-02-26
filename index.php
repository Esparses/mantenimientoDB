<?php 
	require_once "Controler/managerDB.php";
	$managerDB = new managerDB();
	$listData = $managerDB->getControler();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<title> Data Base Managent</title>
	<link type="text/css" rel="stylesheet" href="styleView/styleComponent.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="controlerView/submitData.js"></script>	
 </head>
 <body>
 		<div class="container">
				<div class="row-fluid">
					<div class="col-lg-6">
						<br>
						<br><br>
						<form class="form-horizontal formEx col-lg-5" action="Controler/managementUser.php" method="POST">
					  			<div class="form-group">
					    			<label for="inputID" class="col-sm-2 control-label">ID</label>
					    			<div class="col-sm-10">
					      			<input type="text" name="user" class="form-control" id="inputID" placeholder="User" required=>
					    			</div>
					  			</div>
					  			<div class="form-group">
					    			<label for="inputName"  class="col-sm-2 control-label">Name</label>
					    			<div class="col-sm-10">
					      			<input type="text" name="name" class="form-control" id="inputName" placeholder="Name of city " required>
					    			</div>
					  			</div>
					  			<div class="form-group">
					    			<label for="inputOperation" class="col-sm-2 control-label">Operation</label>
					    			<div class="col-sm-10">
					      			<input type="text" name="operation" class="form-control" id="inputOperation" placeholder="Select the Operation " >
					    			</div>
					  			</div>

					  			<div class="form-group">
					   				<div class="row-fluid">
					   					 <div class="col-md-6">
						     				<div class="dropdown">
											    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select the operation
											    <span class="caret"></span></button>
											    <ul class="dropdown-menu">
											      <li onclick="submitData(this)" data-operation="Insert" >Insert</li>
											      <li onclick="submitData(this)" data-operation="Update" >Update</li>
											      <li onclick="submitData(this)" data-operation="Delete" >Delete</li>
											      <li onclick="submitData(this)" data-operation="Select" >Select</li>
											    </ul>
										     </div>
										   </div>
										   <div class="col-md-6">
										   		<input class="btn btn-info"type="submit" id="submit" value="Submit Query">
										   </div>
									
					   				</div>

				   				 </div>

					</form>


					</div>
					<div class="col-lg-6">
						<br>
					  			<h2><strong>Result of the Operation</strong></h2>
					  			<br>

			  			<table class="table-hover table">
			  				<tr>
			  					<td class="info"><strong>ID</strong></td>
			  					<td class="info"><strong>Name</strong></td>
			  				</tr>
			  				<?php $i; foreach ($listData as $row):?> 
					            <tr> 
					                <td class="success"><?php echo $row['idAlmacen']; ?></td> 
					                <td class="success"><?php echo $row['lugar']; ?></td> 
					            </tr><!-- /TROW --> 
					         
					        <?php endforeach?>  
			  			</table>
					</div>
				

 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </body>
 </html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta id="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<style type="text/css">
	.btn {
	    padding: 14px 24px;
	    border: 0 none;
	    font-weight: 700;
	    letter-spacing: 1px;
	    text-transform: uppercase;
	}
	 
	.btn:focus, .btn:active:focus, .btn.active:focus {
	    outline: 0 none;
	}
	 
	.btn-primary {
	    background: #000000;
	    color: #ffffff;
	}
	 
	.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
	    background: #33a6cc;
	}
	 
	.btn-primary:active, .btn-primary.active {
	    background: #007299;
	    box-shadow: none;
	}
	</style>

	<?php require_once("process.php"); ?>

</head>
<body style="background-image: url('IMG_20170604_184004925.jpg');">
    
    <div class="container-fluid" style="text-align: center; margin-top: 16%;">
    	<h1 style="color: black; text-shadow: 0.2"><i>Welcome to KNSCCF</i></h1>
    	<br/>
    	<div class="row">
    		<div class="col-md-12">
    			<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#sign_in"> Sign In </a>

                <div class="modal fade" id="sign_in">
				    <div class="modal-dialog ">
				        <div class="modal-content">

					        <div class="modal-header"> 
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h3 class="modal-title">Sign In</h3>
		  					</div>
		  					<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
			  					<div class="modal-body">
								    <table class="table">
								    	<tbody>
								    		<tr>
								    			<td>Email :</td>
								    			<td><input name="email" type="text" placeholder="Email...."></input></td>
								    		</tr>
								    		<tr>
								    			<td>Password :</td>
								    			<td><input name="pass" type="password" placeholder="*******"></input></td>
								    		</tr>
								    	</tbody>
								    </table>		  						
			  					</div>

							    <div class="modal-footer">
							        <button type="submit" onclick="" class="btn btn-default">Sign In</button>
							        <a href="" class="btn btn-default" data-dismiss="close">Cancel</a>
							    </div>
							</form>
	 			        </div>
				    </div>
		        </div>

    			<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#sign_up"> Sign Up </a>

                <div class="modal fade" id="sign_up">
				    <div class="modal-dialog" style="width: 70%">
				        <div id="dialog_content" class="modal-content">

					        <div class="modal-header"> 
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h3 class="modal-title">Sign Up</h3>
		  					</div>

		  					<div class="modal-body">
							    <table class="table">
							    	<tbody>
							    		<tr>
							    			<td>Name :</td>
							    			<td><input id="user_name" type="text" placeholder="Username...."></input></td>
							    			<td>Id Number :</td>
							    			<td><input id="user_id" type="text" placeholder="Id Number...."></input></td>
							    		</tr>
							    		<tr>
							    			<td>Email :</td>
							    			<td><input id="user_email" type="text" placeholder="Email...."></input></td>
							    			<td>Password :</td>
							    			<td><input id="user_pass" type="password" placeholder="*******"></input></td>
							    		</tr>
							    		<tr>
							    			<td>D.O.B :</td>
							    			<td><input id="user_dob" type="text" placeholder="YYYY-MM-DD"></input></td>
							    			<td>Gender :</td>
							    			<td><input id="user_sex" type="text" placeholder="Gender...."></input></td>
							    		</tr>
							    		<tr>
							    			<td>Branch :</td>
							    			<td><input id="user_branch" type="text" placeholder="Branch...."></input></td>
							    			<td>Batch :</td>
							    			<td><input id="user_batch" type="text" placeholder="Batch...."></input></td>
							    		</tr>
							    		<tr>
							    			<td>Hostel :</td>
							    			<td><input id="user_hostel" type="text" placeholder="Hostel...."></input></td>
							    			<td>Room No. :</td>
							    			<td><input id="user_room" type="text" placeholder="Room No...."></input></td>
							    		</tr>
							    		<tr>
							    			<td>Advisor :</td>
							    			<td><input id="user_advisor" type="text" placeholder="Advisor...."></input></td>
							    			<td>College :</td>
							    			<td><input id="user_college" type="text" placeholder="College...."></input></td>
							    		</tr>
							    	</tbody>
							    </table>		  						
		  					</div>

						    <div class="modal-footer">
						        <button type="submit" onclick="sign_up()" class="btn btn-default">Sign Up</button>
						        <a href="" class="btn btn-default" data-dismiss="close">Cancel</a>
						    </div>
	 			        </div>
				    </div>
		        </div> 

    		</div>
    	</div>
    </div>

    

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="sign_up.js"></script>


</body>
</html>
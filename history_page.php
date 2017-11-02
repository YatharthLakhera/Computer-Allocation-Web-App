<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<?php 
		session_id("set");
        session_start();
        function logout(){ 
	        session_destroy();  
	        header("Location: login.php");
        }    
        if (isset($_GET['logout'])){
            logout();
        }
        if(isset($_SESSION['email']) == 0){
        	header("Location: login.php");
        }

	?>

</head>
<body style="background: white">


	<nav class="navbar navbar-default">
		<div class="container-fluid">

		    <!-- Title of KNSCCF --> 
			<div class="navbar-header">
				<a class="navbar-brand" href="">KNSCCF Admin</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="admin_page.php">Home</a></li>
				<li><a href="history_page.php">History</a></li>
		    </ul>


            <!-- Search form -->
			<form class="navbar-form navbar-left">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</div>
				</div>
			</form>

			<!-- logout button -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="admin_page.php?logout=true">Logout</a></li>
			</ul>

		</div>
	</nav>
    

    <!-- Content of page -->

    <div class="container">
    	<h2 style="color: grey">History</h2>

	    <table class="table table-striped">
	    	<thead>
	    		<tr>
	    			<th>System</th>
	    			<th>User Id</th>
	    			<th>Login Time</th>
	    			<th>Logout Time</th>
	    		</tr>
	    	</thead>

	    	<tbody id="history_disp_table">
	    	</tbody>
	    </table>
    </div>

    <!-- Bootstrap scripts -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="history.js"></script>


</body>
</html>
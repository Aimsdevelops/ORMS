
<!DOCTYPE html>
<html>
<head>
  <title>html class</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
  
  
</head>
<body>
	
<div class="container-fluid" style="background-color: #4CAF50; position: fixed;">
	<div class="row justify-content-between">
		<div class="col-md-8 col-6" style="min-height:40px;">
			<div class="logo">
				<img src="img/log.png" height="60" width="100">
			</div>
		</div>
		<div class="col-md-4 col-6" style="min-height: 40px;">
			<div class="social-media">
				<ul>
					<li>
						<a href="form.php">
						<i class="fas fa-home"></i>
						<span>Home</span>
					    </a>
					</li>
					<li>
						<a href="about.php">
						<i class="far fa-address-card"></i>
						<span>About</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
      
  <div id="banner">
  	<div class="container">
		<h2>Online Result Nepal</h2>
				<p><i>Welcome to Online Result Nepal, We wish you best for your result.<br></i></p><p><u>Click below to Check your result.</u></i></p>
				<button class="open-button" onclick="openForm()">Check Result</button>
			
			
			</div>
		</div>
	</div>
	<div class="form-popup" id="myForm">
				<form action="result.php" class="form-container" name="suggest_us"  onSubmit="return validateForm123()" method="post">
					<p style="font-size: 12px; padding: 28px;"><i>Fill the required field to check result.</i></p>
					<label><i>&ensp;Symbol no.</i></label>
					<input type="text" placeholder="Ex: 2013" name="roll" required>
					<label><i>&ensp;&nbspName</i></label>
					<input type="text" placeholder="Your Name" name="name" required>
					<label><i>&ensp;Class</i></label>
					<select id="inputState" class="form-control" name="class">
						<option selected>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
					</select></br>
					<button type="submit" onclick="myfuction()" value="submit" class="btn">Submit</button>
					<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
				</form>
	
		<script>
			function openForm() {
				document.getElementById("myForm").style.display = "block";
			}
			function closeForm() {
				document.getElementById("myForm").style.display = "none";
			}
		</script>

	





<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>


</body>
</html>
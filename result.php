<?php

require_once "Classes/PHPExcel.php";


if(isset($_POST['roll'])){
	$roll = @$_POST['roll'];
}
if(isset($_POST['class'])){
	$class = @$_POST['class'];
}



		$tmpfname = "data.xlsx";
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		//$worksheet = $excelObj->getActiveSheet(0);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();
		$lastcol = $worksheet->getHighestColumn();

		$excel_arr = $worksheet->toArray(null,true,true,true);

		//echo $excel_arr[1]["A"], $excel_arr[1]["B"], $excel_arr[1]["C"], $excel_arr[1]["D"];
	
?>
<!DOCTYPE html>
<html>
<head>
  <title>ResultNepal</title>
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
  		
  		<div class="row" id="student-detail">
  			<div id=name class="col-6">
  				Name:
  				<?php #name
  				for ($row = 1; $row <= $lastRow; $row++) {
      		$rolle = $worksheet->getCell('B'.$row)->getCalculatedValue();
      		$classe = $worksheet->getCell('A'.$row)->getCalculatedValue();
      		if($roll == $rolle && $class == $classe){
      			echo $worksheet->getCell('C'.$row)->getCalculatedValue();
      	
  			echo'</div>';
  			echo '<div id=name class="col-6">';
  				?>Class:<?
  					
      			echo $worksheet->getCell('A'.$row)->getCalculatedValue();
      		
  			echo'</div>';
  			echo '<div id=name class="col-6">';
  				?>Percentage:<?
  					
      			echo $worksheet->getCell('R'.$row)->getCalculatedValue();
      	         ?>%<?
  			echo'</div>';
  			echo '<div id=name class="col-6">';
  				?>Total Marks:<?
  					
      			echo $worksheet->getCell('Q'.$row)->getCalculatedValue();
      		}

      	}
      	?>	
      </div>


<table class="table" style="background-color: white">

  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col"><? echo $excel_arr[2]["D"];?></th>
      <th scope="col"><? echo $excel_arr[2]["E"];?></th>
      <th scope="col">Total Marks</th>
      <th scope="col"><? echo $excel_arr[1]["S"];?></th>
    </tr>
  </thead>

  <tbody>
  	<?php for ($row = 1; $row <= $lastRow; $row++) {
      		$rolle = $worksheet->getCell('B'.$row)->getCalculatedValue();
      		$classe = $worksheet->getCell('A'.$row)->getCalculatedValue();
      		

      		if($roll == $rolle && $class == $classe){
    echo "<tr>";
      echo "<th scope='row'>". $excel_arr[1]["D"]."</th>";
#<!-- SUBJECT 1 -->
      echo "<td>";#<!--th-->
      			echo $worksheet->getCell('D'.$row)->getCalculatedValue();
      			echo "</td>";
      			echo "<td>"; #<!--pr-->
      			echo $worksheet->getCell('E'.$row)->getCalculatedValue();	
      			echo "</td>";
      			echo "<td>"; #<!--total-->
 				echo $a=$worksheet->getCell('D'.$row)->getCalculatedValue() + $b=$worksheet->getCell('E'.$row)->getCalculatedValue();
 				echo "</td>";
 				echo "<td>"; #<!--Remark-->
      			echo $worksheet->getCell('S'.$row)->getCalculatedValue();
      			
      echo "</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<th scope='row'>". $excel_arr[1]["I"]."</th>";
#<!-- SUBJECT 2 -->
      echo "<td>";#<!--th-->
      			echo $worksheet->getCell('I'.$row)->getCalculatedValue();
      			echo "</td>";
      			echo "<td>"; #<!--pr-->
      			echo $worksheet->getCell('J'.$row)->getCalculatedValue();	
      			echo "</td>";
      			echo "<td>"; #<!--total-->
 				echo $a=$worksheet->getCell('I'.$row)->getCalculatedValue() + $b=$worksheet->getCell('J'.$row)->getCalculatedValue();
 				echo "</td>";
 				echo "<td>"; #<!--Remark-->
      			echo $worksheet->getCell('S'.$row)->getCalculatedValue();
      			
      echo "</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<th scope='row'>". $excel_arr[1]["K"]."</th>";
#<!-- SUBJECT 3 -->
      echo "<td>";#<!--th-->
      			echo $worksheet->getCell('K'.$row)->getCalculatedValue();
      			echo "</td>";
      			echo "<td>"; #<!--pr-->
      			echo $worksheet->getCell('L'.$row)->getCalculatedValue();	
      			echo "</td>";
      			echo "<td>"; #<!--total-->
 				echo $a=$worksheet->getCell('K'.$row)->getCalculatedValue() + $b=$worksheet->getCell('L'.$row)->getCalculatedValue();
 				echo "</td>";
 				echo "<td>"; #<!--Remark-->
      			echo $worksheet->getCell('S'.$row)->getCalculatedValue();
      			
      echo "</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<th scope='row'>". $excel_arr[1]["M"]."</th>";
#<!-- SUBJECT 4 -->
      echo "<td>";#<!--th-->
      			echo $worksheet->getCell('M'.$row)->getCalculatedValue();
      			echo "</td>";
      			echo "<td>"; #<!--pr-->
      			echo $worksheet->getCell('N'.$row)->getCalculatedValue();	
      			echo "</td>";
      			echo "<td>"; #<!--total-->
 				echo $a=$worksheet->getCell('M'.$row)->getCalculatedValue() + $b=$worksheet->getCell('N'.$row)->getCalculatedValue();
 				echo "</td>";
 				echo "<td>"; #<!--Remark-->
      			echo $worksheet->getCell('S'.$row)->getCalculatedValue();
      			
      echo "</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<th scope='row'>". $excel_arr[1]["O"]."</th>";
#<!-- SUBJECT 5 -->
      echo "<td>";#<!--th-->
      			echo $worksheet->getCell('O'.$row)->getCalculatedValue();
      			echo "</td>";
      			echo "<td>"; #<!--pr-->
      				
      			echo "</td>";
      			echo "<td>"; #<!--total-->
 				echo $worksheet->getCell('O'.$row)->getCalculatedValue();
 				echo "</td>";
 				
      			echo "</td>";
 				echo "<td>"; #<!--Remark-->
      			echo $worksheet->getCell('S'.$row)->getCalculatedValue();
      			
      echo "</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<th scope='row'>". $excel_arr[1]["P"]."</th>";
#<!-- SUBJECT 6 -->
      echo "<td>";#<!--th-->
      			echo $worksheet->getCell('P'.$row)->getCalculatedValue();
      			echo "</td>";
      			echo "<td>"; #<!--pr-->
      				
      			echo "</td>";
      			echo "<td>"; #<!--total-->
 				echo $worksheet->getCell('P'.$row)->getCalculatedValue();
      			echo "</td>";
 				echo "</td>";
 				echo "<td>"; #<!--Remark-->
      			echo $worksheet->getCell('S'.$row)->getCalculatedValue();
      			
      echo "</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<th scope='row'>". "Optional Math"."</th>";
#<!-- SUBJECT 7 -->
      echo "<td>";#<!--th-->
      			echo $worksheet->getCell('D'.$row)->getCalculatedValue();
      			echo "</td>";
      			echo "<td>"; #<!--pr-->
      			echo $worksheet->getCell('E'.$row)->getCalculatedValue();	
      			echo "</td>";
      			echo "<td>"; #<!--total-->
 				echo $a=$worksheet->getCell('D'.$row)->getCalculatedValue() + $b=$worksheet->getCell('E'.$row)->getCalculatedValue();
 				echo "</td>";
 				echo "<td>"; #<!--Remark-->
      			echo $worksheet->getCell('S'.$row)->getCalculatedValue();
      			
      echo "</td>";
    echo "</tr>";
    
	}
	/*
	else{

?><script type="text/javascript">
	alert('Please Enter Valid information');
</script>
<? break;
continue;
	}
*/
}

    ?>
    
    </tbody>
</table>
</div></div>
	





<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>


</body>
</html>
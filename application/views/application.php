<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

	<!--Icons-->
	<script src="<?php echo base_url(); ?>assets/js/lumino.glyphs.js"></script>
</head>
<body>
	<?php include('nav.php');?>
	<div id="sidebar-collapse" class="col-sm-3 col-md-2 sidebar">
		<br>
		<?php include('usidebar.php');?>
	</div>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<br>
		<?php if($new!=""){
			echo  '<div class="alert alert-success alert-dismissible" role="alert">';
			echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span  aria-hidden="true">&times;</span></button>';
			echo $new;
			echo "</div>";
		}
		?>
		
		<div class="details">
			<h1 class="text-center"><strong> STEP TOWARDS BETTERMENT</strong></h1>
			<h2 class="text-center"> Guidelines for scholarship application</h2>
			<div class="instruction"> 
				<h4 class="text-center">Attach the scan copies of these documents along with your application:</h4>
				<br></br>
				<OL>
					<div class="row">
						<div class="col-md-6"><li>Copies of Computerized NIC’s of all family members</li>
							<br>
							<input type="file" name="upload">
						</div>
						<div class="col-md-6">
							<li>Salary slip / Income certificate (or Pension slip) of earning family members</li>
							<br>
							<input type="file" name="upload">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6"><li>Utility bill of last month</li>
							<br>
							<input type="file" name="upload">
						</div>
						<div class="col-md-6">
							<li>your domicile address</li>
							<br>
							<input type="file" name="upload">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<li>Educational documents (F.A./ F.Sc/ H.Sc.) [ Marksheet, Admit Cards]</li>
							<br>
							<input type="file" name="upload">
						</div>
					</div>
				</OL>
				<br>	
				<p><strong>* Note: An income certificate is the document that shows monthly/annual income. If your parents/guardian is salaried, an
					original copy of a pay slip should be attached</strong></p>
					<h3 class="text-center"><strong>TIPS FOR COMPLETING APPLICATION FORM</strong></h3>
					<p class="text-center">Give factual, comprehensive and authentic information in the form.
						<u>Answer all questions. Those not applicable should be marked N/A. Please Do not;</u></p>
						<ul style="list-style: none;" class="text-center">
							<li>Х Provide vague / incomplete information.</li>

							<li>X Submit the application with documents in wrong order without folder.</li>
							<li>X Leaving any question unanswered</li>
						</ul>
						<div class="row text-center"><a href="<?php echo site_url('user_c/person')?>" class="btn btn-success btn-lg" "><strong>START APPLICATION</strong></a></div>
					</div>
					<br>
				</div>
				<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
			</body>
			</html>

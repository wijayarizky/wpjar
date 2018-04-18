<!DOCTYPE html>
<hrml>
	<head>
		<title>Simple Code</title>
		
		<!-- Bootstrap -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- js 3.3.1 -->
		<script src="assets/js/jquery-3.3.1.js"></script>
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		
		<!-- Bootstrap js -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		
		
	</head>
	<body>
		<?php include 'build/header.php' ?>
		
		<!-- get content action -->
		<?php
			$action = "";
			$content = "build/content/home.php";
			if ($_SERVER["QUERY_STRING"] != null){
				$action = $_GET['a'];	
			}
			switch ($action){
				case "home":
				$content = "build/content/home.php";
				break;
				case "course":
				$content = "build/content/course.php";
				break;
				case "about":
				$content = "build/content/about.php";
				break;
				case "contact":
				$content = "build/content/contact.php";
				break;
			}
		?>
		<!-- end content action -->
		
		<!-- content view -->
		<div class="container">
			<hr class="featurette-divider">
		<?php 
			if($content!=""){
				include $content ;
			}
		?>
			<hr class="featurette-divider">
		</div>
		<!-- end content view -->
	</body>
	<?php include 'build/footer.php' ?>
</html>
<script type="text/javascript">
	function getDom(){
		var domain = $('#domain').val();
		if(domain != ''){
			getLookup(domain);
		}
	}
	
	function getLookup(domain){
		$.ajax({
			type:"POST",
			url:"build/content/lookup.php",
			data:{"domain":domain},
			success:function(data){
				$("#hasil_lookup").html(data);
			}
		});
	}
</script>
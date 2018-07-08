<!-- get content action -->
<?php
	$action = "";
	$content = "index.php?a=course&cs=def";
	if ($_SERVER["QUERY_STRING"] != null){
		$action = $_GET['cs'];	
	}
	switch ($action){
		case "t1":
		$content = "build/content/course/t1.php";
		break;
		case "t2":
		$content = "build/content/course/t2.php";
		break;
		case "t3":
		$content = "build/content/course/t3.php";
		break;
		case "t4":
		$content = "build/content/course/t4.php";
		break;
		case "t5":
		$content = "build/content/course/t5.php";
		break;
		case "t6":
		$content = "build/content/course/t6.php";
		break;
		default :
		$content = "build/content/course/def.php";
	}
?>
<!-- end content action -->

<!-- content view -->
<div class="container">
	<?php include $content; ?>
	<br>
	<a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
</div>
<!-- end content view -->
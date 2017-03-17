<?php 
	include "inc/condb.php";
	include "inc/time.php";
	include "inc/alertFN.php";
	//var_export($_POST);

	$title = htmlspecialchars(trim($_POST["title"]));	
	$contents = htmlspecialchars(trim($_POST["contents"])) ;
	if(empty($title)){
		alert('标题不能为空','index.php');
		exit();
	}
	if(empty($contents)){
		alert('内容不能为空',"index.php");
		exit();
	}
	$dt = $time;//time.php引入
	$mysql = "INSERT INTO list(title,contents,pv,dt) VALUES('$title','$contents','0','$dt')";
	$rs = $conn->query($mysql);	
	//var_dump($rs);
	if($rs){
		echo "<script>window.location.href = 'index.php';</script>";		
	}else {
		alert('插入数据失败!',"index.php");
		exit();
	}
 ?>



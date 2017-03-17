
<?php
		include "inc/condb.php";
		include "inc/alertFN.php";
		$id = $_GET["id"];	
		$title = htmlspecialchars(trim($_POST["title"]));	
		$contents = htmlspecialchars(trim($_POST["contents"])) ;
		if(empty($title)){
		alert('标题不能为空',"update.php?id=$id");
		exit();
		}
		if(empty($contents)){
			alert('内容不能为空',"update.php?id=$id");
			exit();
		}	
		$dt = date("Y-m-d H:i:s");		
		$mysql = "UPDATE list  	SET title = '$title', contents = '$contents'   	WHERE id = '$id'";
		$rs = $conn->query($mysql);	
		if($rs){
		echo "<script>window.location.href = 'index.php';</script>";		
		}else {
			alert('修改数据失败!',"index.php");
			exit();
		}
 ?>
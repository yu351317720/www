<?php 
	include 'inc/condb.php';
	include "inc/alertFN.php";
	if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$sql  = " DELETE FROM list WHERE id ='$id' ";	
	$rs = $conn->query($sql);
	if($rs){
	alert('删除成功','index.php');
	}
}












 ?>

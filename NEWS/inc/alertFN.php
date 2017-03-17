<?php 
	header("Content-type: text/html; charset=utf-8"); 
	function alert($msg,$url){
		echo "<script>  alert('{$msg}');
						window.location.href = '{$url}';
			  </script>";
	}
 ?>

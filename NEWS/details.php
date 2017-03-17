<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<style>
	main{
		display: block;
		position: absolute;
		width: 60vw;
		height: 90vh;
		margin-left: 10vw;
	}
	h1{
		text-align: center;
		text-decoration: none;
	}
	p {
		display: inline-block;
		font-size: 20px;
		color: #ccc;
		text-align: center;		
	}
	p span{
		display: inline-block;
		font-size: 14px;		
		margin-left: 200px;	
		color: #ccc;	
	}
	
	article{
		padding-top:30px;
		text-indent: 2em;
		font-size: 18px;
		border-top: 1px #ccc solid;
	}
</style>

<body>

<?php 
	include "inc/condb.php";
	include "inc/time.php";
	$id = $_GET["id"];	
	$pv = "UPDATE list  SET pv = pv+1  WHERE id = '$id'";
	$conn->query($pv);
	$mysql = "SELECT id,title,contents,dt,pv FROM LIST WHERE id ='$id'";	
	$rs = $conn->query($mysql);
	$arr = $rs->fetch_all();
	//var_export($arr);
	foreach ($arr as $val) {
					echo "<main>
							<h1>$val[1]</h1>
							<p>$val[3]</p>
							<span>本文被浏览次数:$val[4]</span>
							<article>$val[2]</article>
						  </main>
						<script type='text/javascript'>
							document.title ='$val[1]'
						</script>
					";
					}
	
	
	
 ?>

</body>

</html>
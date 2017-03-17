
<style>
	input[type='text']{
 		width: 720px;
 	}	
</style>
<body>
<?php 
	include "inc/condb.php";
	include "inc/alertFN.php";
	$id = $_GET["id"];	
	$mysql = "SELECT id,title,contents,dt FROM LIST WHERE id ='$id'";
	$rs = $conn->query($mysql);
	$arr = $rs->fetch_all();
	foreach ($arr as $val) {
					echo "<form action='update1.php?id=$val[0]' method='post'>
						<div>
						 	文章标题
						 	<input type='text' name='title' value='$val[1]'>
						 </div>
						 <div>
				 		 	文章内容
				 		 	<textarea name='contents' id='' cols='100' rows='10' >$val[2]</textarea>
 						 </div>
						 <button type ='submit' onclick='mysubmit(this.id)' id='$id' value='提交'>提交</button>	 
						 </form>		
					";
					}


?>

	<script>
		function mysubmit(id){
			console.log(id);
		}
	</script>
</body>
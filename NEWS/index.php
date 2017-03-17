 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>News</title>
 </head>
 <style>
 	
 	.news_contents{
 		width: 1000px;
 		border: solid 1px #272822; 
 	}
 	.time{
 		float: right;
 		margin-right: 50px;
 		color: #999;
 		font-size: 12px;
 	}
	
	 .title{
		 display: inline-block;
		 width: 110px;
		 height: 20px;
		 overflow: hidden; 		 
 		 text-decoration:none;
 		 line-height: 20px; 
	 }
 	.contents{
		display: inline-block;
 		margin-left: 100px;
 		width: 500px;
 		overflow: hidden;
 		white-space:nowrap;
 		text-overflow :ellipsis ;
		
 	}
 	.update{
		display: inline-block;
		float: right;
		margin-right: 10px;
 	}
 	.remove{
 		display: inline-block;
 		float: right;
 		margin-right: 10px;
 	}
 	#add input[type='text']{
 		width: 720px;
 	}
 	#search input{

 	}
 </style>
 <body>
 	<div class="news_contents">
 		<ul>
 			<?php
				include 'inc/condb.php';
				$sql  = " SELECT id,title,contents,dt FROM list";
				$rs = $conn->query($sql);
				$arr = $rs->fetch_all();
				//var_export($arr);

				foreach ($arr as $val) {
					if(strlen($val[1]) >15){
						$ti = mb_substr($val[1], 0,24).'...';
					}else{
						$ti = mb_substr($val[1], 0);
					}
					echo "<li>
					<a class='title' href='details.php?id=$val[0]'  target='_blank'>
						$ti
					</a>
					<a class='contents' href='details.php?id=$val[0]'  target='_blank'>$val[2]</a>
					<a class='update' href='update.php?id=$val[0]&action=update' >修改</a>
					<a class='remove' href='javascript:mksure($val[0]);void(0);'>删除</a>
					<time class='time'>$val[3]</time>					
					</li>";
				}
 			?>
 			
 		</ul>
 	</div>
 	<br>
 	<br>
 	<br>
 	<form id='search' action="search.php" method="get" >
 		 <input type="text" name="search" placeholder="请输入搜索的关键字">
 		 <button type="submit" >搜索</button>
 	</form>
 	<br>
 	<br>
 	<br>
 	<form id='add' action="add.php" method="post" >
 		 <div>
 		 	添加新文章标题
 		 	<br>
 		 	<input type="text" name="title" value="">
 		 </div>
 		 <div>
 		 	添加新文章内容
 		 	<br>
 		 	<textarea name="contents" id="" cols="100" rows="10" ></textarea>
 		 </div>
 		 <button type="submit" value="提交">提交</button>
 	</form>

 </body>
  <script>
 	function mksure(x){
 		if( confirm('你确定要删除吗') ){
 			window.location.href = 'delete.php?id='+x+'&action=delete';			
 		}else{
 			window.location.href = '';
 			return false;
 		}
 	}
 </script>
 </html>
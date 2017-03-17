 <?php
 date_default_timezone_set("Asia/Shanghai");
 $time = date('Y-m-d H:i:sa');
 
    echo <<< EOF
			<!DOCTYPE html>
		<html lang="en">
		    <head>
		        <meta charset="utf-8">
		    </head>
		    <body>
		   		<h1 id='h1'></h1>
		   		<div id="div"></div>
				<script>
				function toChineseDay(arr){
						switch(arr){
						case 0 :return '日';
								break;
						case 1 :return '一';
								break;
						case 2 :return '二';
								break;
						case 3 :return '三';
								break;
						case 4 :return '四';
								break;
						case 5 :return '五';
								break;
						case 6 :return '六';
								break;
						default: return '没有该星期';
						}
					}

				function getTime(){
				var phpTime = '$time';		
				var date = new Date();
				var str1 = date.getFullYear()+'年'+ (date.getMonth()+1) +'月'+ date.getDate()+'号'+'星期'+ toChineseDay(date.getDay());
				var str2 = date.getHours()+ '时'+date.getMinutes()+ '分'+ date.getSeconds()+'秒';
				document.getElementById('div').innerHTML ='<h3 style="color:#f00;">'+phpTime+'   html系统时间为：' + (str1 + str2) +'</h3>';
				}

				function clock (){
					var timer =null;
					timer = setInterval(getTime,1000);
				}
				clock();
				</script>
		    </body>
		    </html>

EOF;

//这是一个模板PHP案例可以传参数到模板中/
   ?>




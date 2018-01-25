<?php $current = 'page';$mainmenu = '1';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>分页</title> 
 		 <?php include "common/css.php" ;?> 
 	</head>
<body> 
<?php include "common/body_top.php" ;?>
				<!-- 正文开始 ----------S------------>
				<div class="main_hd main_hd_bd">
					<h2>分页</h2>    
				</div>
				<div class="alert">
					<i class="ywkicon icon-questioncircle texticon"></i>分页页面包括页面和js，商家后台重构后，可将js挪至引用的文件中
				</div>
				<div class="main_bd">
					<?php include "common/page.php" ;?> 
				
				</div>
				
				<!-- 正文结束 ----------E------------>
<?php include "common/body_bottom.php" ;?>
   <!-- 中间写自己的js或者引入的js -->

   
   <!-- footer.php一定要放在页面最下端 -->
   <?php include "common/footer.php" ;?>
</body>
</html>
<?php $current = 'tabpage';$mainmenu = '3';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>tab切换</title> 
 		 <?php include "common/css.php" ;?> 
 	</head>
<body> 
<?php include "common/body_top.php" ;?>
				<!-- 正文开始 ----------S------------>
				<div class="main_hd"> 
					<h2>tab切换</h2>    
					<ul class="nav nav-tabs">
					  	<li class="active"><a href="#tab1" data-toggle="tab">菜单1</a></li>
					  	<li><a href="#tab2" data-toggle="tab">菜单2</a></li>
					  	<li><a href="#tab3" data-toggle="tab">菜单3</a></li>
					</ul>  
				</div>
				<div class="main_bd p-t">
				 	<div class="tab-content">
						<div class="tab-pane fade in active" id="tab1">
							菜单一
							<div>表格页面，按钮页面均有用到tab切换</div>
						</div>
						<div class="tab-pane" id="tab2">
							菜单二
						</div>
						<div class="tab-pane" id="tab3">
							菜单三
						</div>
					</div>
				</div>
				
				<!-- 正文结束 ----------E------------>
<?php include "common/body_bottom.php" ;?>
   <!-- 中间写自己的js或者引入的js -->

   
   <!-- footer.php一定要放在页面最下端 -->
   <?php include "common/footer.php" ;?>
</body>
</html>
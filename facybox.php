<?php $current = 'facybox';$mainmenu = '2';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>facybox</title> 
 		 <?php include "common/css.php" ;?> 
 	</head>
<body> 
<?php include "common/body_top.php" ;?>
				<!-- 正文开始 ----------S------------>
				<div class="main_hd main_hd_bd">
					<h2>facybox弹层</h2>    
				</div>
				<div class="alert alert-info">样式同步bootstap  modalbox；考虑到商家后台使用facybox比较多，将facybox.js公共引用，其调用js也写在公用里面，a标签自带rel="facybox"；facybox页面有固定的结构，自行查看</div>
				<div class="main_bd">
					<a href="facyboxtest.php" rel="facybox" class="btn btn-primary">弹出facybox</a>
					<a href="facyboxtest2.php" rel="facybox" class="btn btn-primary">弹出内容带tab切换</a>
				</div>
				<!-- 正文结束 ----------E------------>
<?php include "common/body_bottom.php" ;?>
   <!-- 中间写自己的js或者引入的js -->

   
   <!-- footer.php一定要放在页面最下端 -->
   <?php include "common/footer.php" ;?>
</body>
</html>
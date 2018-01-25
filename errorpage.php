<?php $current = 'errorpage';$mainmenu = '3';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>错误页面</title> 
 		 <?php include "common/css.php" ;?> 
 	</head>
<body> 
<?php include "common/body_top.php" ;?>
				<!-- 正文开始 ----------S------------>
				<div class="main_hd main_hd_bd">
					<h2>错误页面</h2>    
				</div>
				<div class="alert alert-info">
					这里展示商家后台没有数据等情况展示的数据，包括列表下没有数据的情况
				</div>
				<div class="main_bd">
					<div class="nodatapage"><i class="ywkicon icon-exclamationcircle"></i>暂无数据<a href="" class="btn-link">去创建</a></div>
					<div class="nodatapage"><i class="ywkicon icon-checkcircle success"></i>恭喜，您的店铺信息已提交！icon-checkcircle success</div>
					<div class="nodatapage"><i class="ywkicon icon-closecircle error"></i>当前信息错误……icon-closecircle error</div>
				</div>
				
				
				
				<!-- 正文结束 ----------E------------>
    <?php include "common/body_bottom.php" ;?>
   <!-- 中间写自己的js或者引入的js -->

   
   <!-- footer.php一定要放在页面最下端 -->
   <?php include "common/footer.php" ;?>
</body>
</html>
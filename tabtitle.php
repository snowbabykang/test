<?php $current = 'tabtitle';$mainmenu = '1';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>分级菜单（导航条）</title> 
 		<?php include "common/css.php" ;?> 
 	</head>
<body> 
<?php include "common/body_top.php" ;?>
				<!-- 正文开始 ----------S------------>
				<div class="main_hd main_hd_bd">
					<h2>主标题tab菜单</h2>    
				</div>
				
				<div class="main_hd main_hd_bd">
					<h2>订单管理
						<div class="extra_info">
							<a class="" href="#" target="_blank">帮助与说明<i class="ywkicon icon-questioncircleo ask"></i></a>
						</div>
					</h2>    
				</div>
				<div class="alert">以上——一级菜单加说明</div>
				<div class="main_hd main_hd_bd"> 
					<h2>万能表单
						<div class="extra_info">
						<a href="" class="btn btn-success">新建表单</a>
						</div>
					</h2> 
				</div>
				<div class="alert">以上——一级菜单加按钮</div>
				<div class="main_hd"> 
					<h2>订单管理</h2>    
					<ul class="nav nav-tabs">
					  	<li class="active"><a href="#">首页</a></li>
					  	<li><a href="#">等待发货</a></li>
					  	<li><a href="#">等待买家付款</a></li>
					</ul>
					<div class="extra_info">
						<a class="" href="#" target="_blank">帮助<i class="ywkicon icon-questioncircleo ask"></i></a>
					</div>
				</div>
				<div class="alert">以上——二级菜单</div>
				
				
				<div class="main_hd"> 
					<h2>订单管理</h2>    
					<ul class="nav nav-tabs">
					  	<li class="active"><a href="#">首页</a></li>
					  	<li><a href="#">等待发货</a></li>
					  	<li><a href="#">等待买家付款</a></li>
					</ul>
					<div class="extra_info">
						<a class="" href="#" target="_blank">帮助<i class="ywkicon icon-questioncircleo ask"></i></a>
					</div>
					<div class="highlight_box">
						<ul class="links">
							<li class="links_item selected"><a href="">小店概况</a></li>
							<li class="links_item"><a href="">数据推送</a></li>
						</ul>
					</div>
				</div>
				<div class="alert">以上——三级菜单</div>
				<div class="main_bd">
					<ul class="nav nav-btns m-t-md">
						<li class="j_send_type_choose active" rel="active"><a href="#48huo" data-toggle="tab">48小时交互群发</a></li>
						<li class="j_send_type_choose" rel="month"><a href="#4mass" data-toggle="tab">每月4次群发</a></li>
						<li class="j_send_type_choose" rel="templ"><a href="#modelnews" data-toggle="tab">模板消息</a></li>
					</ul>
					<ul class="nav nav-btns nav-dark m-t-md">
						<li class="j_send_type_choose active" rel="active"><a href="#48huo" data-toggle="tab">48小时交互群发</a></li>
						<li class="j_send_type_choose" rel="month"><a href="#4mass" data-toggle="tab">每月4次群发</a></li>
						<li class="j_send_type_choose" rel="templ"><a href="#modelnews" data-toggle="tab">模板消息</a></li>
					</ul>
					<ul class="nav nav-btns nav-success m-t-md">
						<li class="j_send_type_choose active" rel="active"><a href="#48huo" data-toggle="tab">48小时交互群发</a></li>
						<li class="j_send_type_choose" rel="month"><a href="#4mass" data-toggle="tab">每月4次群发</a></li>
						<li class="j_send_type_choose" rel="templ"><a href="#modelnews" data-toggle="tab">模板消息</a></li>
					</ul>
				</div>
				<div class="alert">tab切换之按钮模式</div>
				
				<!-- 正文结束 ----------E------------>
<?php include "common/body_bottom.php" ;?>
   <?php include "common/footer.php" ;?>
</body>
</html>
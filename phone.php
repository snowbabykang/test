<?php $current = 'phone';$mainmenu = '2';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>优物库商家后台</title> 
 		 <?php include "common/css.php" ;?> 
 	</head>
<body> 
 	<?php include "common/body_top.php" ;?>
	<!-- 正文开始 ----------S------------>
	<div class="main_hd main_hd_bd">
		<h2>这个是模拟iphone样式</h2>    
	</div>
	<div class="main_bd p-t">
		<div class="box-grid">
			<div class="flex1">
				<table class="table m-b">
					<tr>
						<th>标题</th>
						<th>时间灰色</th>
						<th>头部 3</th>
						<th>头部 4</th>
						<th>操作</th>
					</tr>
					<?php for ($i = 0;$i <= 5;$i++){?>
					<tr>
						<td>标题 1</td>
						<td><span class="gray">2016-12-6 14:37</span></td>
						<td>-</td>
						<td>内容 4</td>
						<td>
							<ul class="links links_opt">
								<li class="links_item"><a href="">编辑</a></li>
								<li class="links_item"><a href="">删除</a></li>
								<li class="links_item"><a href="">居右</a></li>
							</ul>
						</td>
					</tr>
					<?php } ?>
					<tr>
						<td colspan="5">
							<?php include "common/page.php" ;?> 
						</td>
					</tr>
				</table>
			</div>
			<div class="flex-static phonebox">
				<div class="phoneviewbox">
					<div class="view_header"></div>
					<div class="view_main">
						<div class="view_titlebox">会员卡</div>
						<div class="view_contentbox">
							
						</div>
					</div>
					<div class="view_footer"></div>
				</div>
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
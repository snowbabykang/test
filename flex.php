<?php $current = 'flex';$mainmenu = '2';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>布局</title> 
 		 <?php include "common/css.php" ;?> 
 	</head>
<body> 
<?php include "common/body_top.php" ;?>
				<!-- 正文开始 ----------S------------>
     			<div class="main_hd main_hd_bd">
					<h2>布局</h2>    
				</div>
				<div class="alert alert-warn">
					布局一：table-cell布局，可以上下居中
				</div>
				<div class="alert">
					<div class="table-grid">
						<div class="table-cell"><i class="ywkicon icon-meh tablecell_iconlg"></i></div>
						<div class="table-cell">
							<h4>table-cell布局</h4>
				 	 		<div>当前使用table-cell布局完成；table-cell增加类名alignright代表右对齐；宽度根据需求自己写，否则自适应</div>
						</div>
						<div class="table-cell alignright"><span class="btn btn-disabled">按钮</span></div>
					</div>
				</div>
				<div class="alert">
					<div class="table-grid">
						<div class="table-cell verticaltop" style="width: 16px;"><i class="ywkicon icon-meh"></i></div>
						<div class="table-cell">
							<h4>table-cell布局</h4>
				 	 		<div>当前使用table-cell布局完成；table-cell增加类名verticaltop代表上对齐；宽度根据需求自己写，否则自适应</div>
						</div>
						<div class="table-cell alignright"><span class="btn btn-disabled">按钮</span></div>
					</div>
				</div>
				
				<div class="alert alert-warn">
					布局二：栅格系统；一行分为12格，可以随意切割
				</div>
				<div style="padding:0 12px;">
					<div class="row">
						<div class="span2">
							<div class="row_spanbox">2</div>
						</div>
						<div class="span2">
							<div class="row_spanbox">2</div>
						</div>
						<div class="span2">
							<div class="row_spanbox">2</div>
						</div>
						<div class="span2">
							<div class="row_spanbox">2</div>
						</div>
						<div class="span2">
							<div class="row_spanbox">2</div>
						</div>
						<div class="span2">
							<div class="row_spanbox">2</div>
						</div>
					</div>
					<div class="row">
						<div class="span3">
							<div class="row_spanbox">3</div>
						</div>
						<div class="span3">
							<div class="row_spanbox">3</div>
						</div>
						<div class="span3">
							<div class="row_spanbox">3</div>
						</div>
						<div class="span3">
							<div class="row_spanbox">3</div>
						</div>
					</div>
					<div class="row">
						<div class="span4">
							<div class="row_spanbox">4</div>
						</div>
						<div class="span4">
							<div class="row_spanbox">4</div>
						</div>
						<div class="span4">
							<div class="row_spanbox">4</div>
						</div>
					</div>
					<div class="row">
						<div class="span6">
							<div class="row_spanbox">6</div>
						</div>
						<div class="span6">
							<div class="row_spanbox">6</div>
						</div>
					</div>
					<div class="row">
						<div class="span8">
							<div class="row">
								<div class="span8">
									<div class="row_spanbox">左侧8份再分为8</div>
								</div>
								<div class="span4">
									<div class="row_spanbox">左侧8份再分为4</div>
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="row_spanbox">4</div>
						</div>
					</div>
				</div>
				<div class="alert alert-warn">
					布局二：box布局 box-grid = flex1 + flex1 + flex-static
				</div>
				<div class="box-grid">
					<div class="flex1">
						<div class="row_spanbox">占一份</div>
					</div>
					<div class="flex2">
						<div class="row_spanbox">占二份</div>
					</div>
					<div class="flex-static" style="width:320px;">
						<div class="row_spanbox">固定宽</div>
					</div>
				</div>
				<div class="alert alert-warn">
					布局三：flex布局；可以随意使用css更改顺序，排列多种变化，不过内容要上下对齐的话，需要额外写代码
				</div>
				
				
				<!-- 正文结束 ----------E------------>
<?php include "common/body_bottom.php" ;?>
   <!-- 中间写自己的js或者引入的js -->

   
   <!-- footer.php一定要放在页面最下端 -->
   <?php include "common/footer.php" ;?>
</body>
</html>
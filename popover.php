<?php $current = 'popover';$mainmenu = '3';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>popover提示</title> 
 		 <?php include "common/css.php" ;?> 
 	</head>
<body> 
<?php include "common/body_top.php" ;?>
				<!-- 正文开始 ----------S------------>
				<div class="main_hd main_hd_bd">
					<h2>popover提示
						<div class="extra_info">
							<a class="help" href="javascript:void(0);">帮助与说明<i class="ywkicon icon-questioncircleo ask"></i></a>
						</div>
					</h2>    
				</div>
				<div class="alert">
					<div class="table-grid">
						<div class="table-cell verticaltop" style="width: 16px;"><i class="ywkicon icon-star"></i></div>
						<div class="table-cell">
							<h4>popover提示要点</h4>
				 	 		<ul>
				 	 			<li>popover提示长用于简单的帮助提示</li>
				 	 			<li></li>
				 	 			<li></li>
				 	 			<li></li>
				 	 		</ul>
						</div>
					</div>
				</div>
				
				
				<div class="main_bd p-t">
					<div class="p-b">
						<a href="javascript:void(0)" class="btn btn-primary showpopover" data-type="left">点击左侧popover</a>
						<a href="javascript:void(0)" class="btn btn-primary showpopover" data-type="right">点击右侧popover</a>
						<a href="javascript:void(0)" class="btn btn-primary showpopover" data-type="top">点击上方popover</a>
						<a href="javascript:void(0)" class="btn btn-primary showpopover" data-type="bottom">点击下方popover</a>
					</div>
					<div class="p-b">
						<a href="javascript:void(0)" class="btn btn-primary hoverpopover" data-type="bottom">hover下方popover</a>
						<a href="javascript:void(0)" class="btn btn-primary hoverpopover" data-type="left">hover左侧popover</a>
						<a href="javascript:void(0)" class="btn btn-primary hoverpopover" data-type="right">hover右侧popover</a>
						<a href="javascript:void(0)" class="btn btn-primary hoverpopover" data-type="top">hover上方popover</a>
					</div>
				</div>
				
				<div class="popover_html hide">
					<div class="nodatapage" style="width:300px;color:#333;">
			    		<i class="ywkicon icon-exclamationcircle"></i>暂无数据<a href="" class="btn-link">去创建</a>
			    	</div>
				</div>
				<div class="help_html hide">
					<div style="line-height: normal;max-width: 250px;">
						<h4>标题一</h4>
						<div>宽度／高度依据文本长度最大值来定设置行间距24</div>
						<h4>标题一</h4>
						<div>宽度／高度依据文本长度最大值来定设置行间距24</div>
						<h4>标题一</h4>
						<div>宽度／高度依据文本长度最大值来定设置行间距24</div>
					</div>
				</div>
				
				
				<!-- 正文结束 ----------E------------>
   <?php include "common/body_bottom.php" ;?>
   <!-- 中间写自己的js或者引入的js -->
  <script>
	$(function(){
		$(".help").popover({
			trigger : "click",
			placement : "bottom",
			html : true,
			content : $(".help_html").html(),
			container: '.help'
		});

		$(".showpopover").each(function(){
			var type = $(this).attr("data-type");
			var _t = $(this);
			$(this).popover({
				trigger : "click",
				placement : type,
				html : true,
				content : $(".popover_html").html(),
				container: _t
			});
		})
		$(".hoverpopover").each(function(){
			var type = $(this).attr("data-type");
			var _t = $(this);
			$(this).popover({
				trigger : "hover",
				placement : type,
				html : true,
				title : "popover提示",
				content : $(".popover_html").html(),
				container: _t
			});
		})

		
	})

  </script>
   
   <!-- footer.php一定要放在页面最下端 -->
   <?php include "common/footer.php" ;?>
</body>
</html>
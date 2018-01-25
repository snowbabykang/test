<?php $current = 'modal';$mainmenu = '3';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>modal</title> 
 		 <?php include "common/css.php" ;?> 
 	</head>
<body> 
<?php include "common/body_top.php" ;?>
				<!-- 正文开始 ----------S------------>
				<div class="main_hd main_hd_bd">
					<h2>modal弹层</h2>    
				</div>
				<div class="alert">
					<div class="table-grid">
						<div class="table-cell verticaltop" style="width: 16px;"><i class="ywkicon icon-star"></i></div>
						<div class="table-cell">
							<h4>modal弹层要点</h4>
				 	 		<ul>
				 	 			<li>modal新增大小号，大号在modal类名后面再增加modal-lg类名，小号则增加modal-sm；也可以自定义增加width；已有样式会使其自动居中</li>
				 	 			<li></li>
				 	 			<li></li>
				 	 			<li></li>
				 	 		</ul>
						</div>
					</div>
				</div>
				
				
				<div class="main_bd p-t">
					<div class="p-b">
						<a href="javascript:void(0)" class="btn btn-primary showmodal1">正常modal</a>
						<a href="#modal2" class="btn btn-primary" data-toggle="modal">大号modal</a>
						<a href="#modal3" class="btn btn-primary" data-toggle="modal">小号modal</a>
					</div>
					<div class="p-b">
						<a href="#modal4" class="btn btn-primary" data-toggle="modal">弹出内容带tab切换</a>
					</div>
				</div>
				
				
				<div id="modal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  	<div class="modal-header">
				    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				    	<h3>标题</h3>
				  	</div>
				  	<div class="modal-body">
				    	<div class="nodatapage">
				    		<i class="ywkicon icon-exclamationcircle"></i>暂无数据<a href="" class="btn-link">去创建</a>
				    	</div>
				    	<div class="nodatapage">
				    		<i class="ywkicon icon-exclamationcircle"></i>滑动条滑动条滑动条滑动条滑动条</a>
				    	</div>
				  	</div>
				  	<div class="modal-footer">
				    	<a href="#" class="btn" data-dismiss="modal" aria-hidden="true">关闭</a>
				    	<a href="#" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">保存</a>
				  	</div>
				</div>
				<div id="modal2" class="modal modal-lg hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  	<div class="modal-header">
				    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				    	<h3>标题</h3>
				  	</div>
				  	<div class="modal-body">
				    	<div class="nodatapage">
				    		<i class="ywkicon icon-exclamationcircle"></i>暂无数据<a href="" class="btn-link">去创建</a>
				    	</div>
				  	</div>
				  	<div class="modal-footer">
				    	<a href="#" class="btn" data-dismiss="modal" aria-hidden="true">关闭</a>
				    	<a href="#" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">保存</a>
				  	</div>
				</div>
				<div id="modal3" class="modal modal-sm hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  	<div class="modal-header">
				    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				    	<h3>标题</h3>
				  	</div>
				  	<div class="modal-body">
				    	你确定删除当前数据吗？
				  	</div>
				  	<div class="modal-footer">
				    	<a href="#" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">确定</a>
				  	</div>
				</div>
				<div id="modal4" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  	<div class="modal-header">
				    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				    	<h3>标题</h3>
				    	<span class="fr btn-link">刷新</span>
				  	</div>
				  	<div class="main_hd">
						<ul class="nav nav-tabs mt0">
						  	<li class="active"><a href="#normal" data-toggle="tab">菜单一</a></li>
						  	<li><a href="#border" data-toggle="tab">菜单二</a></li>
						  	<li><a href="#other" data-toggle="tab">菜单三</a></li>
						</ul>  
						<div class="extra_info">
							<span class="btn-link">新建</span>
						</div>
					</div>
				  	<div class="modal-body">
				    	<div class="tab-content">
							<div class="tab-pane fade in active" id="normal">
								111
							</div>
							<div class="tab-pane" id="border">
								<div class="nodatapage">
						    		<i class="ywkicon icon-exclamationcircle"></i>暂无数据<a href="" class="btn-link">去创建</a>
						    	</div>
							</div>
							<div class="tab-pane" id="other">
								333
							</div>
						</div>
				  	</div>
				  	<div class="modal-footer">
				    	<a href="#" class="btn" data-dismiss="modal" aria-hidden="true">关闭</a>
				    	<a href="#" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">保存</a>
				  	</div>
				</div>
				
				<!-- 正文结束 ----------E------------>
	<?php include "common/body_bottom.php" ;?>
   <!-- 中间写自己的js或者引入的js -->
	<script>
	$(function(){
		$(".showmodal1").click(function(){
			$("#modal1").modal("show");
		})
	})

	</script>
   
   <!-- footer.php一定要放在页面最下端 -->
   <?php include "common/footer.php" ;?>
</body>
</html>
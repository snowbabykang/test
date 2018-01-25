<?php $current = 'btn';$mainmenu = '1';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>按钮</title> 
 		<?php include "common/css.php" ;?> 
 	</head>
<body> 
<?php include "common/body_top.php" ;?>
				<!-- 正文开始 ----------S------------>
     			<div class="main_hd"> 
					<h2>按钮元素</h2>    
					<ul class="nav nav-tabs">
					  	<li class="active"><a href="#single" data-toggle="tab">单按钮</a></li>
					  	<li><a href="#group" data-toggle="tab">按钮组</a></li>
					</ul>
				</div>
				<div class="main_bd p-t">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="single">
					  		<div class="m-t-md"><span class="btn">默认按钮</span></div>
					  		<div class="m-t-md"><span class="btn">创建</span></div>
					  		<div class="m-t-md"><span class="btn">三个字</span></div>
					  		<div class="m-t-md">
					  			<span class="btn btn-primary">蓝色按钮</span>
					  			<span class="btn btn-primary"><span class="ywkicon icon-plus"></span>蓝色按钮</span>
					  		</div>
					  		<div class="m-t-md">
					  			<span class="btn btn-success">绿色按钮</span>
					  			<span class="btn btn-success"><span class="ywkicon icon-plus"></span>绿色按钮</span>
					  		</div>
						  	<div class="m-t-md"><span class="btn btn-danger">红色按钮</span></div>
						  	<div class="m-t-md"><span class="btn btn-disabled">无点击按钮</span></div>
						  	<div class="m-t-md"><span class="btn btn-link">按钮连接</span></div>
						  	<div class="m-t-md"><span class="btn-link">无按钮连接</span></div>
						  	<div class="m-t-md">
						  		<div class="btn-group">
  									<span class="btn dropdown-toggle" data-toggle="dropdown" href="/">按钮下拉菜单<span class="caret"></span></span>
									<ul class="dropdown-menu">
					                  	<li><a href="#">Action</a></li>
					                  	<li><a href="#">Another action</a></li>
					                  	<li><a href="#">Something else here</a></li>
					                  	<li class="divider"></li>
					                  	<li><a href="#">Separated link</a></li>
					                </ul>
								</div>
						  		<div class="btn-group">
  									<span class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="/">按钮下拉菜单<span class="caret"></span></span>
									<ul class="dropdown-menu">
					                  	<li><a href="#">Action</a></li>
					                  	<li><a href="#">Another action</a></li>
					                  	<li><a href="#">Something else here</a></li>
					                  	<li class="divider"></li>
					                  	<li><a href="#">Separated link</a></li>
					                </ul>
								</div>
						  		<div class="btn-group">
  									<span class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="/">按钮下拉菜单<span class="caret"></span></span>
									<ul class="dropdown-menu">
					                  	<li><a href="#">Action</a></li>
					                  	<li><a href="#">Another action</a></li>
					                  	<li><a href="#">Something else here</a></li>
					                  	<li class="divider"></li>
					                  	<li><a href="#">Separated link</a></li>
					                </ul>
								</div>
								<div class="dropdown">
				  					<a class="dropdown-toggle" data-toggle="dropdown" href="#">下拉菜单<b class="caret"></b></a>
				  					<ul class="dropdown-menu">
					                  	<li><a href="#">Action</a></li>
					                  	<li><a href="#">Another action</a></li>
					                  	<li><a href="#">Something else here</a></li>
					                  	<li class="divider"></li>
					                  	<li><a href="#">Separated link</a></li>
					                </ul>
								</div>
								<div class="dropdown">
				  					<a class="dropdown-toggle" data-toggle="dropdown" href="#">下拉菜单右对齐<b class="caret"></b></a>
				  					<ul class="dropdown-menu right">
					                  	<li><a href="#">Action</a></li>
					                  	<li><a href="#">Another action</a></li>
					                  	<li><a href="#">Something else here</a></li>
					                  	<li class="divider"></li>
					                  	<li><a href="#">Separated link</a></li>
					                </ul>
								</div>
						  	</div>
						  	<div class="p-b"></div>
						  	<div class="btn-group">
							  	<span class="btn btn-primary">选中按钮</span>
								<span class="btn">按钮组</span>
								<span class="btn">按钮组</span>
								<span class="btn">按钮组</span>
							</div>
							<div class="p-b"></div>
							<div class="btn-group">
							  	<a href="#single" class="btn btn-darkgray" data-toggle="tab">单按钮</a>
								<a href="#group1" class="btn" data-toggle="tab">tab按钮</a>
								<a href="#group2" class="btn" data-toggle="tab">tab按钮</a>
								<a href="#group3" class="btn" data-toggle="tab">tab按钮</a>
							</div>
							<div class="p-b"></div>
							<div class="btn-group">
							  	<span class="btn btn-primary">选中按钮</span>
								<span class="btn">按钮组</span>
								<span class="btn">按钮组</span>
								<div class="btn btn-success dropdown">
  									<span class="dropdown-toggle" data-toggle="dropdown" href="/">按钮下拉菜单<span class="caret"></span></span>
									<ul class="dropdown-menu">
					                  	<li><a href="#">Action</a></li>
					                  	<li><a href="#">Another action</a></li>
					                  	<li><a href="#">Something else here</a></li>
					                  	<li class="divider"></li>
					                  	<li><a href="#">Separated link</a></li>
					                </ul>
								</div>
							</div>
							<div class="p-b"></div>
							<ul class="links links_opt">
								<li class="links_item"><a href="">编辑</a></li>
								<li class="links_item"><a href="">删除</a></li>
								<li class="links_item"><a href="">居右</a></li>
							</ul>
						</div>
						<!-- 按钮组 -->
						<div class="tab-pane fade" id="group">
						  	<div class="btn-group">
							  	<span class="btn btn-primary">选中按钮</span>
								<span class="btn">按钮组</span>
								<span class="btn">按钮组</span>
								<span class="btn">按钮组</span>
							</div>
							<div class="p-b"></div>
							<div class="btn-group">
							  	<a href="#single" class="btn btn-darkgray" data-toggle="tab">单按钮</a>
								<a href="#group1" class="btn" data-toggle="tab">tab按钮</a>
								<a href="#group2" class="btn" data-toggle="tab">tab按钮</a>
								<a href="#group3" class="btn" data-toggle="tab">tab按钮</a>
							</div>
							<div class="p-b"></div>
							<div class="btn-group">
							  	<span class="btn btn-primary">选中按钮</span>
								<span class="btn">按钮组</span>
								<span class="btn">按钮组</span>
								<div class="btn btn-success dropdown">
  									<span data-toggle="dropdown" href="/">按钮下拉菜单<span class="caret"></span></span>
									<ul class="dropdown-menu">
					                  	<li><a href="#">Action</a></li>
					                  	<li><a href="#">Another action</a></li>
					                  	<li><a href="#">Something else here</a></li>
					                  	<li class="divider"></li>
					                  	<li><a href="#">Separated link</a></li>
					                </ul>
								</div>
							</div>
							<div class="p-b"></div>
							<ul class="links links_opt">
								<li class="links_item"><a href="">编辑</a></li>
								<li class="links_item"><a href="">删除</a></li>
								<li class="links_item"><a href="">居右</a></li>
							</ul>
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
<?php $current = 'creatpage';$mainmenu = '2';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>创建页面</title> 
 		 <?php include "common/css.php" ;?> 
 	</head>
<body> 
<?php include "common/body_top.php" ;?>
				<!-- 正文开始 ----------S------------>
				<div class="main_hd main_hd_bd">
					<h2>创建页面</h2>    
				</div>
				<div class="alert alert-info">
					商家后台各种活动或者其他的创建页面，基本需求：左边标题右侧信息，和表单创建类似
				</div>
				<div class="main_bd">
					<form action="">
						<table class="creatpagetb">
							<tr>
								<td class="wview">输入框</td>
								<td><input type="text" name="" id="" /></td>
							</tr>
							<tr>
								<td class="wview">禁止输入框</td>
								<td>
									<input type="text" name="" id="" disabled/>
									<div class="formtip">表单提示，类名为formtip</div>
								</td>
							</tr>
							<tr>
								<td class="wview">下拉框</td>
								<td>
									<select name="" id="">
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
									</select>
									<div class="formtip error">表单提示，类名为formtip，错误信息增加类名error或者red</div>
								</td>
							</tr>
							<tr>
								<td class="wview">文本静态文本</td>
								<td>
									<div class="formstatic">表单静态文本表单静态文本，左边最多6个字，否则转行；</div>
								</td>
							</tr>
							<tr>
								<td class="wview">单选框</td>
								<td>
									<div class="inputcheckbox">
										<label><input type="radio" name="sex" />男</label>
										<label><input type="radio" name="sex" />女</label>
										<label><input type="radio" name="sex" />未知</label>
									</div>
								</td>
							</tr>
							<tr>
								<td class="wview">多选框</td>
								<td>
									<div class="inputcheckbox">
										<label><input type="checkbox" name="interest" />阅读</label>
										<label><input type="checkbox" name="interest" />听歌</label>
										<label><input type="checkbox" name="interest" />跳舞</label>
										<label><input type="checkbox" name="interest" />书法</label>
									</div>
								</td>
							</tr>
							<tr>
								<td class="wview">文本框</td>
								<td><textarea name="" class="textarea" placeholder="请填写……"></textarea></td>
							</tr>
							<tr>
								<td class="wview">文本框限制</td>
								<td>
									<div class="inputbox limit_inputbox">
										<textarea name="" class="textarea" placeholder="请填写……"></textarea>
										<span class="limitbox">
											<span class="limitcount">88</span>/<span class="allcount">88</span>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="wview">搜索框</td>
								<td>
									<div class="inputbox">
										<input type="text" name="" id="" />
										<i class="ywkicon icon-search"></i>
									</div>
								</td>
							</tr>
							<tr>
								<td class="wview">字数框</td>
								<td>
									<div class="inputbox limit_inputbox">
										<input type="text" name="" id="" />
										<span class="limitbox">
											<span class="limitcount">20</span>/<span class="allcount">20</span>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="wview">选择插件</td>
								<td>
									<div class="selectbox">
										<input type="text" name="" id="" /><span class="btn btn-link">选择商品</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="wview">选择插件</td>
								<td>
									<div class="selectbox">
										<input type="text" name="" id="" /><span class="btn">选择商品</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="wview">时间模式</td>
								<td>
									<div class="timeinputbox">
										<input type="text" name="" id="" placeholder="开始时间"/>
										至
										<input type="text" name="" id="" placeholder="结束时间"/>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<div class="submitbox">
										<span class="btn btn-success">提交</span>
										<span class="btn">重置</span>
									</div>
								</td>
							</tr>
						</table>
					
					</form>
				
				</div>
				
				
				
				<!-- 正文结束 ----------E------------>
 <?php include "common/body_bottom.php" ;?>
   <!-- 中间写自己的js或者引入的js -->
	
   
   <!-- footer.php一定要放在页面最下端 -->
   <?php include "common/footer.php" ;?>
</body>
</html>
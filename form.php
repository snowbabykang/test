<?php $current = 'form';$mainmenu = '1';?>
<!DOCTYPE html>
<html>
 	<head> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  		<meta name="renderer" content="webkit" /> 
  		<meta charset="utf-8" /> 
  		<title>表单</title> 
 		 <?php include "common/css.php" ;?> 
 	</head>
<body> 
<?php include "common/body_top.php" ;?>
				<!-- 正文开始 ----------S------------>
				<div class="main_hd main_hd_bd">
					<h2>表单</h2>    
				</div>
				<div class="main_bd p-t">
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
								</td>
							</tr>
							<tr>
								<td class="wview">下拉框</td>
								<td>
									<select name="" class="width-md">
										<option value="">北京市</option>
										<option value="">湖北省</option>
									</select>
									<select name=""  class="width-md">
										<option value="">朝阳区</option>
										<option value="">昌平区</option>
									</select>
									<select name=""  class="width-sm">
										<option value="">10</option>
										<option value="">11</option>
										<option value="">12</option>
									</select>
									时
									<select name=""  class="width-sm">
										<option value="">10</option>
										<option value="">20</option>
										<option value="">30</option>
										<option value="">40</option>
										<option value="">50</option>
										<option value="">60</option>
									</select>
									分
									<div class="formtip">width-md代表中等宽度 ；width-sm代表最小宽度</div>
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
								<td class="wview">竖向单选框</td>
								<td>
									<div class="inputcheckbox column">
										<label><input type="radio" name="sex2"  disabled/>男</label>
										<label><input type="radio" name="sex2" />女</label>
										<label><input type="radio" name="sex2" />未知</label>
									</div>
								</td>
							</tr>
							<tr>
								<td class="wview">竖向多选框</td>
								<td>
									<div class="inputcheckbox column">
										<label><input type="checkbox" name="interest2"  disabled/>阅读</label>
										<label><input type="checkbox" name="interest2" />听歌</label>
										<label><input type="checkbox" name="interest2" />跳舞</label>
										<label><input type="checkbox" name="interest2" />书法</label>
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
								<td class="wview">用户</td>
								<td>
									<div class="inputbox">
										<i class="ywkicon icon-user border-r"></i>
										<input type="text" name="" id="" />
									</div>
								</td>
							</tr>
							<tr>
								<td class="wview">密码</td>
								<td>
									<div class="inputbox">
										<i class="ywkicon icon-lock border-r"></i>
										<input type="text" name="" id="" />
									</div>
								</td>
							</tr>
							<tr>
								<td class="wview">可清空框</td>
								<td>
									<div class="inputbox">
										<input type="text" name="" id="" />
										<i class="ywkicon icon-closecircle"></i>
										<i class="ywkicon icon-search border-l"></i>
									</div>
								</td>
							</tr>
							<tr>
								<td class="wview">字数框</td>
								<td>
									<div class="inputbox limit_inputbox">
										<input type="text" name="" id="" />
										<span class="limitbox">
											<span class="limitcount">88</span>/<span class="allcount">88</span>
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
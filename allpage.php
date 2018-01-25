<!DOCTYPE html>
<html>
<head> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
	<meta name="renderer" content="webkit" /> 
	<meta charset="utf-8" /> 
	<title>欢迎来到{$agent.platform}</title> 
	{include file="shangjia/public/css.html"}
	<style>
    .prdlists{max-height:500px;overflow:auto;}
    .prdlists li.active{ background: #00b359;color: #fff!important;}
    .prdlists .prdinfo{display: table;box-sizing:border-box;padding:5px;border-bottom: 1px solid #eee;width:100%;}
    .prdlists .prdinfo .pic{padding:25px 0;position: relative;width: 50px;overflow: hidden;display: table-cell;}
    .prdlists .prdinfo .pic img{width:100%;position: absolute;top:50%;left: 50%;right: 0;transform: translate(-50%,-50%);}
    .prdlists .prdinfo .prd-des{padding:0px 5px 0px 10px;display: table-cell;vertical-align: middle;}
    .prdlists .prd-des .title{ overflow : hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;
    -webkit-box-orient: vertical;margin:0;padding:0;margin-bottom: 8px;}
    .prdlists .prd-des .price{color: #f24f50;padding:0;margin:0;font-weight: 400;}
    .table tr th:last-child, .table tr td:last-child{text-align: left;}
    .LevelActSet .levelSet2{width:400px;border:1px solid #eee;border-bottom: none;}
    .LevelActSet .tab-rule{max-height: 286px;width:400px;overflow-y:auto; overflow-x: hidden; border: 1px solid #eee;padding: 0;}
    .LevelActSet .levelSet tr th, .LevelActSet .levelSet2 tr th {padding: 6px 10px;text-align: left;height: 25px;}
    .btn-link.btn-disabled{color:gray}
	</style>
</head>
<body> 
 	{include file="shangjia/public/body_top.html"}
	{* 正文开始  *}
	<div class="main_hd main_hd_bd"> 
		<h2>商品页面</h2>    
	</div>
	<div class="main_bd">
		<div class="box-grid">
			<!-- 商品列表 -->
			<div class="flex-statics p-t" style="border-right: 1px solid #eee;width:430px;">
				<div class="selectbox">
					<input type="text" name="" id="" placeholder="请输入……">
					<span class="btn btn-primary j_search">搜索</span>
				</div>
				<div class="prdlists m-t-md scrollbar">
					<ul>
						<li class="btn-success">
    						<div class="prdinfo">
    							<div class="pic">
    								<img src="http://192.168.0.211/egoushop/image_spaces/4f/09/7e/c5/14988786999928058.jpg_180x180.jpg">
    							</div>
    							<div class="prd-des">
    								<p class="title">pt测试商品</p>
    								<p class="price" price="0.01">￥0.01</p>
    							</div>
    						</div>
						</li>
						<?php for ($i = 0;$i <= 10;$i++){?>
						<li>
    						<div class="prdinfo">
    							<div class="pic">
    								<img src="http://192.168.0.211/egoushop/image_spaces/4f/09/7e/c5/14988786999928058.jpg_180x180.jpg">
    							</div>
    							<div class="prd-des">
    								<p class="title">pt测试商品</p>
    								<p class="price" price="0.01">￥0.01</p>
    							</div>
    						</div>
						</li>
						<?php } ?>
					</ul>
				</div>
				<div class="pagination m-t-md p-l-md p-r-md">
                	<div class="fl">共<span class="totalcount">100</span>条记录，第<span class="currentpage">1</span>/<span class="pagesize">10</span>页</div>
                	<div class="fr">
                		<ul>
                			<li><a href="#" class="btn-link btn-disabled">首页</a></li>
                			<li><a href="#" class="btn-link">上一页</a></li>
                			<li><a href="#" class="btn-link">下一页</a></li>
                			<li><a href="#" class="btn-link">尾页</a></li>
                			<li><input type="text" name="" id="" /></li>
                			<li><a href="#" class="btn-link">跳转</a></li>
                		</ul>
                	</div>
                	<div class="clearfix"></div>
                </div>
			</div>
			<!-- 商品操作 -->
			<div class="flex2" style="padding-top:20px;">
				<ul class="nav nav-tabs">
        		  	<li class="active"><a href="#prdprice" data-toggle="tab">商品价格设置</a></li>
        		  	<li><a href="#prddiscount" data-toggle="tab">粉丝特价设置</a></li>
        		  	<li><a href="#prdfenxiao" data-toggle="tab">分销设置</a></li>
        		</ul>
        		<div class="tab-content" style="padding:20px;">
                    <!-- 商品价格设置----S------ -->
					<div class="tab-pane fade in active" id="prdprice">
                    	<table class="table table-bordered">
                    		<tr>
                    			<th>颜色分类</th>
                    			<th>尺码</th>
                    			<th>价格</th>
                    			<th>库存</th>
                    		</tr>
                    		<?php for ($i = 0;$i <= 3;$i++){?>
    						<tr>
    							<td></td>
    							<td></td>
    							<td><input type="text" class="width-sm prd_price" /></td>
    							<td><input type="text" class="width-sm prd_num" /></td>
    						</tr>
    						<?php } ?>
                    	</table>
                    	<div class="ar"><span class="btn btn-primary m-t">保存</span></div>
					</div>
                    <!-- 商品价格设置----E------ -->
                    <!-- 粉丝特价设置----S------ -->
					<div class="tab-pane" id="prddiscount">
						<table class="LevelActSet creatpagetb">
                			<tr>	
                				<td class="wview">活动名称：</td>
                				<td align='left'><input type="text" name="levelActName" style="margin-left:0px;"></td>
                			</tr>
                			 <tr>
                			 	<td class="wview">活动时间：</td>
                			 	<td>
                			 		<div class="timeinputbox">
                					<input type="text" size="22" placeholder="请选择活动开始时间"  name="start_time" id="start_time" class="Wdate " onfocus="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd HH:mm:ss',minDate:'',readOnly:true})" value=""/><span class="required">*</span>
                			 		-
                					<input type="text" size="22" placeholder="请选择活动结束时间"  name="end_time" id="end_time" class="Wdate " onfocus="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd HH:mm:ss',minDate:'',readOnly:true})" value=""/><span class="required">*</span>
                			 		</div>
                			 	</td>
                			 </tr>
                			<tr>
                				<td class="wview">优惠方式：</td>
                				<td>
                					<div class="inputcheckbox">
                				    	<label><input type="radio" name="LeveldisType" checked value="1">享受折扣</label>
                				   		<label><input type="radio" name="LeveldisType"  value="2">立减</label>
                				    </div>
                					<div class="formtip discount_tips" rel="1">请填写大于0小于10的值，可以带有一位小数，0.1——9.9</div>
                					<div class="formtip hide discount_tips" rel="2">请填写大于0的值，可以带有两位小数</div>
                			  </td>
                			</tr> 
                			<tr>
                			 <td class="wview">规则设置：</td>
                			 <td>
                			 	<div class="btn-group">
                				 	<a href="{$HOST}/index.php/shangjia/weixin/fans" target="_blank" class="btn">粉丝设置</a>
                				 	<a href="{$HOST}/index.php/shangjia/fans/level" target="_blank" class="btn">管理等级</a>
                				</div>
                			    <table class="levelSet2 m-t-md">
                			      <tbody>
                				      <tr>
                				         <th>等级值&nbsp;&lt;名称&gt;</th>
                				         <th style="padding-left:35px;">优&nbsp;&nbsp;惠（<span class="disTypeTips">折扣</span>）
                				         	<input type="text" class="input_discount width-sm" placeholder="优惠">
                				         	<div class="dropdown discount_dropdown" style="display: inline-block;">
                				         		<a class="dropdown-toggle" data-toggle="dropdown" style="display:block; padding:3px 5px;"><b class="caret"></b></a>
                				         		<ul class="dropdown-menu">
                				         			<li data-mark="alldiscount"><a href="javascript:void(0);">应用到以下所有优惠框</a></li>
                				         			<li data-mark="nulldiscount"><a href="javascript:void(0);">应用到以下未填写优惠框</a></li>
                				         		</ul>
                				         	</div>
                				         </th>
                				      </tr>
                				</tbody>
                			    </table>
                				<div class="tab-rule scrollbar">
                				<table class="levelSet table" style="border: none;">
                			      <tbody>
                			      <?php for ($i = 0;$i <= 5;$i++){?>
                				      <tr>
                				        <td style="width:150px;">#LV<?php echo $i+1 ?>&nbsp;&nbsp;&nbsp;&nbsp;&lt;LV<?php echo $i+1 ?>&gt;</td></td>
                				        <td>
                				           <span class="disType" style="margin-right:10px;">享</span>
                				           <input type="text" class="width-sm" name="LevelDetailVAl" rel="{$single.key}">
                				           <span class="disUnit" style="margin-left:10px;">折</span>
                				        </td>
                				      </tr>
                			      <?php } ?>
                			      </tbody>
                			      </table>
                			 	</div>
                			 </td>
                			</tr>
                			<tr>
                				<td colspan="2">
                					<div class="submitbox">
                						<span class="btn creditLevel_save btn-primary">保存设置</span>
                					</div>
                				</td>
                			</tr>
                		</table>
					</div>
					<!-- 粉丝特价设置----E------ -->
					<!-- 分销设置----S------ -->
					<div class="tab-pane" id="prdfenxiao">
						<table class="creatpagetb">
							<tr>
								<td class="wview">分销商佣金/件</td>
								<td>
									<table class="table">
										<tr>
											<th>分销商级别</th>
											<th>返利值</th>
											<th>二级返利</th>
											<th>返利形式</th>
										</tr>
										<?php for ($i = 0;$i <= 5;$i++){?>
            							<tr>
            								<td>皇冠分销商</td>
            								<td>
            									<input type="text" class="width-sm" />
            								</td>
            								<td>
            									<input type="text" class="width-sm" />
            								</td>
            								<td>
            									<select class="width-sm">
                        			  				<option value="1" selected>元</option>
                        			  				<option value="2">%</option>
            									</select>
            								</td>
            							</tr>
            							<?php } ?>
            						</table>
								</td>
							</tr>
							<tr>
                				<td colspan="2">
                					<div class="submitbox">
                						<span class="btn btn-primary rebate_confirm">保存设置</span>
                					</div>
                				</td>
                			</tr>
						</table>
					</div>
					<!-- 分销设置----E------ -->
				</div>
			</div>
		</div>
	</div>
   {* 正文结束   *}
   {include file="shangjia/public/body_bottom.html"}
   {* 中间写自己的js或者引入的js   *}
<script type="text/javascript" src="http://youwuku.cn/egou/js/My97DatePicker/WdatePicker.js?v=201211292311"></script>
<script>
// 粉丝特价
$("input[name='levelUsedRange']").change(function (){
     var type_value=$(this).val();
     if(type_value==4){
    	 $('.select_goods').css("display","none");
     }else{
    	 $('.select_goods').css("display","table-row");
     }
});
$("input[name='LeveldisType']").click(function(){ 
     var disType=$("input[name='LeveldisType']:checked").val();
     if(disType==1){
    	 $(".disTypeTips").html("折扣");
    	 $(".disType").html("享");
    	 $(".disUnit").html("折");
    	 $(".discount_tips[rel=1]").show();
    	 $(".discount_tips[rel=2]").hide();
     }else if(disType==2){
    	 $(".disTypeTips").html("立减");
    	 $(".disType").html("减");
    	 $(".disUnit").html("元");
    	 $(".discount_tips[rel=1]").hide();
    	 $(".discount_tips[rel=2]").show();
     } 
}); 
$(".discount_dropdown").find("li").click(function(){
     var val = $(".input_discount").val(),
     disType=$("input[name='LeveldisType']:checked").val(),
     wrong = "",
     mark = $(this).data("mark");
     if(val == ""){
    	alert("数值不能为空，请填写");
    	$(".input_discount").focus();
    	return false;
    }else if(val && disType==1){
    	if(GetDiscount(val)){
    		alert("等级折扣值设置错误！");
    		$(".input_discount").focus();
    		return false;
    	}
    }else if(val && disType==2){
    	if(GetSubtract(val)){
    		alert("等级立减值设置错误！");
    		$(".input_discount").focus();
    		return false;
    	}
    }
    if(mark == "alldiscount"){
    	$("input[name='LevelDetailVAl']").val(val);
    }else{
    	$("input[name='LevelDetailVAl']").each(function(){
    		var discount = $(this).val();
    		if(!discount){
    			$(this).val(val);
    		}
    	})
    }
});
function GetDiscount(val){
	var reg = /^([0-9])(\.[0-9])?$/;
	if(val && reg.test(val)){
		if(val >0){
			return false;
		}else{
			return true;
		}
	}else{
		return true;
	}
}
function GetSubtract(val){
	var reg = /^(0|[1-9][0-9]{0,9})(\.[0-9]{1,2})?$/;
	if(val && reg.test(val)){
		if(val >0){
			return false;
		}else{
			return true;
		}
	}else{
		return true;
	}
}
</script>
   {* footer.php一定要放在页面最下端   *}
   {include file="shangjia/public/footer.html"}
</body>
</html>
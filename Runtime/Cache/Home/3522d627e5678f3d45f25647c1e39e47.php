<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<?php $map['b.status'] = 1; $map['b.type'] = 1; $map['b.path'] = MODULE_NAME."/".CONTROLLER_NAME."/".ACTION_NAME; $advs = D("Adv")->join('__ADV_POS__ as b ON __ADV__.pos_id = b.id','LEFT')->where($map)->select(); $advlist = array(); foreach($advs as $v){ $advlist[$v['name']] = $v; } ?>
<meta charset="UTF-8">
<?php if(!$oneplus_seo_meta){ $oneplus_seo_meta = get_seo_meta($vars,$seo); } ?>
<?php if($oneplus_seo_meta['title']): ?><title><?php echo ($oneplus_seo_meta['title']); ?></title>
    <?php else: ?>
    <title><?php echo C('WEB_SITE_TITLE');?></title><?php endif; ?>
<?php if($oneplus_seo_meta['keywords']): ?><meta name="keywords" content="<?php echo ($oneplus_seo_meta['keywords']); ?>"/><?php endif; ?>
<?php if($oneplus_seo_meta['description']): ?><meta name="description" content="<?php echo ($oneplus_seo_meta['description']); ?>"/><?php endif; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="/Public/Home/js/jquery-1.11.3.min.js"></script>

	<link rel="stylesheet" type="text/css" href="/Public/Home/css/overall.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/spancolle.css" />
	<script type="text/javascript" src="/Public/Home/js/layer.js"></script>

<link rel="stylesheet" type="text/css" href="/Public/Home/css/top.css"/>
<?php echo hook('pageHeader');?>

</head>
<body>
	
	<!-- 头部 -->
	<style>
	.top .navdown .nminll .m img {
	    width: 189px;
	    height: 3px;
	    display: block;
	}
</style>
<div class="top">
	<div class="nav">
		<ul>
			<li>
				<a href="/">首页</a>
			</li>
			<li>
				<a href="<?php echo U('Home/Guandao/sactuals');?>">
					<div style=" float:left">搜索现货</div>
					<div class="span" style="float:left"><img src="/Public/Home/images/sanjiao.png" /></div>
				</a>
				<!-- <div class="pay">
			    	<div class="dis"></div>
			        <ul>
			    	<li class="list_1">      
			        <span>钢管现货</span>
			        <div><a href="<?php echo U('Home/Guandao/sactuals');?>?pinzhong=工业无缝管">工业无缝管</a></div>
					<div><a href="<?php echo U('Home/Guandao/sactuals');?>?pinzhong=卫生级无缝管">卫生级无缝管</a></div>
					<div><a href="<?php echo U('Home/Guandao/sactuals');?>?pinzhong=工业焊管">工业焊管</a></a></div>
			        <div><a href="<?php echo U('Home/Guandao/sactuals');?>?pinzhong=卫生级焊管">卫生级焊管</a></div>
			        <div><a href="<?php echo U('Home/Guandao/sactuals');?>?pinzhong=精密管">精密管</a></div>
			        <div><a href="<?php echo U('Home/Guandao/sactuals');?>?pinzhong=装饰管">装饰管</a></div>
			        <div><a href="<?php echo U('Home/Guandao/sactuals');?>?pinzhong=毛细管">毛细管</a></div>
			        <div><a href="<?php echo U('Home/Guandao/sactuals');?>?pinzhong=六角管">六角管</a></div>
			        </li>
			        <li class="list_1">      
			        <span>板卷现货</span>
			     	<div><a href="<?php echo U('Home/Guandao/profile');?>?pinzhong=圆钢">圆钢</a></div>
					<div><a href="<?php echo U('Home/Guandao/profile');?>?pinzhong=管坯">管坯</a></div>
					<div><a href="<?php echo U('Home/Guandao/profile');?>?pinzhong=角钢">角钢</a></div>
			        <div><a href="<?php echo U('Home/Guandao/profile');?>?pinzhong=扁钢">扁钢</a></div>
			        <div><a href="<?php echo U('Home/Guandao/profile');?>?pinzhong=方钢">方钢</a></div>
			        <div><a href="<?php echo U('Home/Guandao/profile');?>?pinzhong=槽钢">槽钢</a></div>
			        <div><a href="<?php echo U('Home/Guandao/profile');?>?pinzhong=线材">线材</a></div>
			        </li> 
			        <li class="list_1">      
			        <span>管件现货</span>
			     	<div><a href="<?php echo U('Home/Guandao/molding_three');?>">弯头</a></div>
					<div><a href="<?php echo U('Home/Guandao/molding_two');?>?pinzhong=三通">三通</a></div>
					<div><a href="<?php echo U('Home/Guandao/molding_two');?>?pinzhong=四通">四通</a></div>
			        <div><a href="<?php echo U('Home/Guandao/molding_one');?>?pinzhong=翻边">翻边</a></div>
			        <div><a href="<?php echo U('Home/Guandao/molding_one');?>?pinzhong=管帽">管帽</a></div>
			        <div><a href="<?php echo U('Home/Guandao/molding_one');?>?pinzhong=金属软管">金属软管</a></div>
			        </li>
			        <li class="list_1">      
			        <span>法兰现货</span>
			     	<div><a href="<?php echo U('Home/Guandao/frenchay');?>?pinzhong=平焊法兰">平焊法兰</a></div>
					<div><a href="<?php echo U('Home/Guandao/frenchay');?>?pinzhong=对焊法兰">对焊法兰</a></div>
					<div><a href="<?php echo U('Home/Guandao/frenchay');?>?pinzhong=板式法兰">板式法兰</a></div>
			        <div><a href="<?php echo U('Home/Guandao/frenchay');?>?pinzhong=松套法兰">松套法兰</a></div>
			        <div><a href="<?php echo U('Home/Guandao/frenchay');?>?pinzhong=带颈法兰">带颈法兰</a></div>
			        <div><a href="<?php echo U('Home/Guandao/frenchay');?>?pinzhong=人孔法兰">人孔法兰</a></div>
			        <div><a href="<?php echo U('Home/Guandao/frenchay');?>?pinzhong=法兰盖">法兰盖</a></div>
			        </li>
			        <li class="list_1">      
			        <span>阀门现货</span>
			     	<div><a href="<?php echo U('Home/Guandao/valve');?>?pinzhong=球阀">球阀</a></div>
					<div><a href="<?php echo U('Home/Guandao/valve');?>?pinzhong=蝶阀">蝶阀</a></div>
					<div><a href="<?php echo U('Home/Guandao/valve');?>?pinzhong=闸阀">闸阀</a></div>
			        <div><a href="<?php echo U('Home/Guandao/valve');?>?pinzhong=截止阀">截止阀</a></div>
			        <div><a href="<?php echo U('Home/Guandao/valve');?>?pinzhong=止回阀">止回阀</a></div>
			        <div><a href="<?php echo U('Home/Guandao/valve');?>?pinzhong=旋塞阀">旋塞阀</a></div>
			        <div><a href="<?php echo U('Home/Guandao/valve');?>?pinzhong=疏水阀">疏水阀</a></div>
			        <div><a href="<?php echo U('Home/Guandao/valve');?>?pinzhong=减压阀">减压阀</a></div>
			        </li>
			        <li class="list_1">      
			        <span>板卷现货</span>
			     	<div><a href="<?php echo U('Home/Guandao/plank');?>">板材</a></div>
					<div><a href="<?php echo U('Home/Guandao/plank');?>">卷材</a></div>
			        </li>
			        </ul>
			    </div> -->
			</li>
			<li>
				<a href="<?php echo U('Home/News/index');?>">
					<div style=" float:left">资讯行情</div>
					<div class="span" style="float:left"><img src="/Public/Home/images/sanjiao.png" /></div>
				</a>
				<!-- <div class="pay1">
			    	<div class="dis"></div>
			        <ul>
			    	<li class="list_1">      
			        <span>钢管现货</span>

					<div><a href="<?php echo U('Home/News/lists',array('category'=>39));?>">市场快讯</a></div>
					<div><a href="<?php echo U('Home/News/lists',array('category'=>2));?>">会议会展</a></div>
			        <div><a href="<?php echo U('Home/News/lists',array('category'=>40));?>">企业风采</a></div>
			        </li>
			        <li class="list_1">      
			        <span>行情频道</span>
			     	<div><a href="<?php echo U('Home/News/lists',array('category'=>41));?>">原料行情</a></div>
					<div><a href="<?php echo U('Home/News/lists',array('category'=>42));?>">管型行情</a></div>
					<div><a href="<?php echo U('Home/News/lists',array('category'=>43));?>">泵阀行情</a></div>
			        </li> 
			        </ul>
			    </div> -->	
			</li>
			<li>
				<a href="<?php echo U('Home/Process/index');?>">加工定做</a>
			</li>
			<li>
				<a href="#">求购信息</a>
			</li>
			<li>
				<a href="<?php echo U('Home/Talent/index');?>">人才招聘</a>
			</li>
			<li>
				<a href="<?php echo U('Home/Logistics/index');?>">货运物流</a>
			</li>
			<li>
				<a href="#">商务合作</a>
			</li>
			<?php if(is_login()): ?><li class="user">
					<div class="us">
						<div class="ico"><img src="/Public/Home/images/user.png" /></div>
						<div class="phone"><a href="<?php echo U('Member/Index/manage');?>"><?php echo get_username();?></a></div>
						<div style=" color:#5a5a5a">|</div>
						<div class="exit">安全退出</div>
					</div>
				</li>
			<?php else: ?>
				<li class="reg">
					<div class="login"><a href="<?php echo U('Member/User/login');?>">登录</a></div>
					<div>|</div>
					<div class="register"><a href="<?php echo U('Member/User/login');?>">免费注册</a></div>
				</li><?php endif; ?>
		</ul>
	</div>

	
		<div class="navdown">
			<div class="nleft"><img src="/Public/Home/images/gs_login.png" /></div>
			<div class="nminll">
				<div class="u"><span class="AS_sp1">客服热线</span><span class="AS_sp2">0577-89881176</span></div>
				<div class="m"><img src="/Public/Home/images/xian_kefulianxi.png" /></div>
				<div class="d"><span class="AS_sp3">每周一至周六</span><span class="AS_sp4">8:30-17:30</span></div>
			</div>
		</div>
	
</div>
	<!-- /头部 -->
	
	<!-- 主体 -->
	


	<div class="spot">
		<div class="spot_con">
			<div class="spot_lirk">
				<div class="k_tp">
					<img src="/Public/Home/images/k_tp1.png" />
				</div>
				<div class="k_tp">
					<img src="/Public/Home/images/k_tp2.png" />
				</div>
				<div class="k_tp">
					<img src="/Public/Home/images/k_tp3.png" />
				</div>
				<div class="k_tp">
					<img src="/Public/Home/images/k_tp4.png" />
				</div>
				<div class="k_tp1">
					<img src="/Public/Home/images/k_tp5.png" />
				</div>
				<div class="k_tp">
					<img src="/Public/Home/images/k_tp1.png" />
				</div>
				<div class="k_tp">
					<img src="/Public/Home/images/k_tp2.png" />
				</div>
				<div class="k_tp">
					<img src="/Public/Home/images/k_tp3.png" />
				</div>
				<div class="k_tp">
					<img src="/Public/Home/images/k_tp4.png" />
				</div>
				<div class="k_tp1">
					<img src="/Public/Home/images/k_tp5.png" />
				</div>
				<div class="clear"></div>
			</div>

		</div>

		<div class="spot_left">
			<div class="spot_right">
				<div class="right_title">便捷工具</div>
				<div class="right_fb">
					<div class="right_l">

						<div class="h9">
							<input type="button" onclick="showdiv9();" style=" height:68px; width:68px; background:url(/Public/Home/images/right_jsj.png) no-repeat; float:right; color:#0e6eb8;cursor:pointer" />

							<div id="bg9"></div>

							<div id="show9">
								<div class="sckc">
									<label class="L_1">重量计算器</label>
									<input type="button" value="X" onclick="hidediv9();" class="x1" />
								</div>
								<div class="box_xg">
									<div class=" la_box">外径(mm)：</div>
									<input name="" type="text" class="la_inp" value="请输入外径" />
								</div>
								<div class="box_xg1">
									<div class=" la_box">壁厚(mm)：</div>
									<input name="" type="text" class="la_inp" value="请输入壁厚" />
									<span class="la_ts"></span>
								</div>
								<div class="box_xg1">
									<div class=" la_box">长度(M)：</div>
									<input name="" type="text" class="la_inp" value="请输入长度" />
									<span class="la_ts"></span>
								</div>
								<div class="box_xg2">
									<div class=" la_box"></div>
									<input name="" type="button" class="la_inp" value="提交" />
								</div>
								<div class="box_xg3">
									<div class=" la_box"></div>
									<div class="la_bal">
										<span class="sp1">0</span>公斤/米,&nbsp;<span class="sp1">0</span>公斤
									</div>

								</div>
							</div>
						</div>

						<div class="clear"></div>

						<div>重量计算器</div>

					</div>
					<div class="right_r">
						<div class="h10">
							<input type="button" onclick="showdiv10();" style=" height:68px; width:68px; background:url(/Public/Home/images/right_yl.png)  no-repeat; float:right; color:#0e6eb8;cursor:pointer" />

							<div id="bg10"></div>

							<div id="show10">
								<div class="sckc">
									<label class="L_1">压力计算器</label>
									<input type="button" value="X" onclick="hidediv10();" class="x1" />
								</div>
								<div class="box_xg0">
									<div class="la_box"></div>
									<div class="la_inp">
										<input name="" type="radio" value="" checked="checked" class="rad" /><span class="sb1">算压力</span>
										<input name="" type="radio" value="" class="rad" /><span class="sb1">算壁厚</span>
									</div>
								</div>
								<div class="box_xg">
									<div class=" la_box">外径(mm)：</div>
									<input name="" type="text" class="la_inp" value="请输入外径" />
								</div>
								<div class="box_xg1">
									<div class=" la_box">壁厚(mm)：</div>
									<input name="" type="text" class="la_inp" value="请输入壁厚" />
									<span class="la_ts"></span>
								</div>
								<div class="box_xg1">
									<div class=" la_box">压力(Mpa)：</div>
									<input name="" type="text" class="la_inp" value="请输入压力" />
									<span class="la_ts"></span>
								</div>
								<div class="box_xg1">
									<div class=" la_box">材质：</div>

									<select name="">
										<option selected="selected" value="520">304(抗拉强度为520)</option>
										<option value="480">304L(抗拉强度为480)</option>
										<option value="480">316L(抗拉强度为480)</option>
										<option value="520">321(抗拉强度为520)</option>
										<option value="520">310S(抗拉强度为520)</option>
										<option value="530">316Ti(抗拉强度为530)</option>
										<option value="480">317L(抗拉强度为480)</option>
										<option value="520">347H(抗拉强度为520)</option>
									</select>
								</div>
							</div>
						</div>
						<div class="clear"></div>
						<div>压力计算器</div>
					</div>
				</div>
			</div>

			<div class="left_xin">
				<div class="left_down">
					<div class="down_box">
	<a <?php if((ACTION_NAME) == "sactuals"): ?>style="color:#F00"<?php endif; ?> class="box_n" href="<?php echo U('Home/Guandao/sactuals');?>">钢管</a>
</div>
<div class="down_box">
	<a <?php if((ACTION_NAME) == "profile"): ?>style="color:#F00"<?php endif; ?> class="box_n" href="<?php echo U('Home/Guandao/profile');?>">型材</a>
</div>
<div class="down_box">
	<a <?php if((ACTION_NAME) == "molding_three"): ?>style="color:#F00"<?php endif; if((ACTION_NAME) == "molding_two"): ?>style="color:#F00"<?php endif; if((ACTION_NAME) == "molding_one"): ?>style="color:#F00"<?php endif; ?> class="box_n" href="<?php echo U('Home/Guandao/molding_three');?>">管件</a>
</div>
<div class="down_box">
	<a <?php if((ACTION_NAME) == "frenchay"): ?>style="color:#F00"<?php endif; ?> class="box_n" href="<?php echo U('Home/Guandao/frenchay');?>">法兰</a>
</div>
<div class="down_box">
	<a <?php if((ACTION_NAME) == "valve"): ?>style="color:#F00"<?php endif; ?> class="box_n" href="<?php echo U('Home/Guandao/valve');?>">阀门</a>
</div>
<div class="down_box">
	<a <?php if((ACTION_NAME) == "plank"): ?>style="color:#F00"<?php endif; ?> class="box_n" href="<?php echo U('Home/Guandao/plank');?>">板材</a>
</div>
<div class="down_box">
	<a <?php if((ACTION_NAME) == "sheet"): ?>style="color:#F00"<?php endif; ?> class="box_n" href="<?php echo U('Home/Guandao/sheet');?>">卷材</a>
</div>
<div class="down_box">
	<a <?php if((ACTION_NAME) == "search"): ?>style="color:#F00"<?php endif; ?> class="box_n" href="<?php echo U('Home/Guandao/search');?>">搜公司</a>
</div>
<div class="clear"></div>
				</div>

				<!--立即搜索-->
				<form action="">
					<div class="left_middle">
						<div id="headm">
							<ul>
								<li id="pinzhongLi">
									<div class="dh">
										<a class="topa"><input name="pinzhong" type="text" class="box_ipt1" value="<?php echo I('get.pinzhong');?>" placeholder="工业无缝管"></a>
										<ul>
											<li class="i_h0"><img src="/Public/Home/images/ggw_sanjiaoxing.png" /><span>型材</span></li>
											<li class="i_h1" id="pinzhong">
												<a>圆钢</a>
												<a>管坯</a>
												<a>角钢</a>
												<a>扁钢</a>
												<a>方钢</a>
												<a>槽钢</a>
												<a>线材</a>
											</li>
											<li class="i_hxian"></li>
											<li class="i_h2"><span>清除</span></li>
										</ul>
									</div>
								</li>
								<script type="text/javascript">
									$(function() {
										$('#pinzhong a').click(function() {
											$("input[name='pinzhong']").val($(this).html());
											$idstr = $(this).parent().attr('id');
											$(this).parent().removeClass('show');
	
											$("#" + $idstr + "Li").removeClass('show')
										})
										$('#caizhi a').click(function() {
											$("input[name='caizhi']").val($(this).html());
											$idstr = $(this).parent().parent().attr('id');
											$(this).parent().parent().removeClass('show');
	
											$("#" + $idstr + "Li").removeClass('show')
										})
									})
								</script>
								<li id="caizhiLi">
									<div class="dh dh2">
										<a class="topa"><input name="caizhi"  placeholder="材质" type="text" class="box_ipt2" value="<?php echo I('get.caizhi');?>"></a>
										<ul>
											<li class="i_h3" id="caizhi">
												<div class="h3_miss"><img src="/Public/Home/images/ggw_sanjiaoxing.png" /></div>
												<div class="h3_div">
													<a>200</a>
													<a>201</a>
													<a>201H</a>
													<a>201B</a>
													<a>202</a>
												</div>
												<div class="clear"></div>
												<div class="h3_miss"><img src="/Public/Home/images/ggw_sanjiaoxing.png" /></div>
												<div class="h3_div">
													<a>301</a>
													<a>302</a>
													<a>304</a>
													<a>304L</a>
													<a>201H</a>
													<a>304H</a>
													<a>309</a>
													<a>309S</a>
													<a>310S</a>
													<a>316</a>
													<a>316L</a>
													<a>316H</a>
													<a>316Ti</a>
													<a>317</a>
													<a>317L</a>
													<a>321</a>
													<a>321H</a>
													<a>347</a>
													<a>347H</a>
													<a>400</a>
													<a>600H</a>
													<a>625</a>
													<a>800H</a>
													<a>825</a>
												</div>
												<div class="h3_miss"><img src="/Public/Home/images/ggw_sanjiaoxing.png" /></div>
												<div class="h3_div">
													<a>TP304</a>
													<a>TP304L</a>
													<a>TP304H</a>
													<a>TP310S</a>
													<a>TP316</a>
													<a>TP316L</a>
													<a>TP316H</a>
													<a>TP316Ti</a>
													<a>TP317</a>
													<a>TP317L</a>
													<a>TP321</a>
													<a>TP321H</a>
													<a>TP347</a>
													<a>TP347H</a>
													<a>DP316L</a>
												</div>
												<div class="h3_miss"><img src="/Public/Home/images/ggw_sanjiaoxing.png" /></div>
												<div class="h3_div">
													<a>S31500</a>
													<a>S31803</a>
													<a>S32205</a>
													<a>S32304</a>
													<a>S32750</a>
													<a>S32760</a>
													<a>904L</a>
													<a>254SMO</a>
													<a>C-22</a>
													<a>C-276</a>
												</div>
												<div class="h3_miss"><img src="/Public/Home/images/ggw_sanjiaoxing.png" /></div>
												<div class="h3_div">
													<a>1CR132</a>
													<a>CR13</a>
													<a>3CR13</a>
													<a>17-4PH</a>
	
												</div>
											</li>
											<li class="i_h4"></li>
											<li class="i_h5"><span>清除</span></li>
										</ul>
									</div>
								</li>
								<li>
									<div class="dh"><input name="guige" type="text" placeholder="规格" class="box_ipt3" value="<?php echo I('get.guige');?>">
	
									</div>
								</li>
								<li><input name="" type="submit" class="box_bt" value="立即搜索"></li>
							</ul>
						</div>
						<script type=text/javascript>
							var lis = document.getElementById("headm").getElementsByTagName("li");
							for(var i = 0; i < lis.length; i++) {
								lis[i].onmouseover = function() {
									this.className += (this.className.length > 0 ? " " : "") + "show";
								}
								lis[i].onmouseout = function() {
									this.className = this.className.replace(new RegExp("( ?|^)show\\b"), "");
								}
							}
						</script>
	
					</div>
				</form>
				<!--广播-->
				<div class="left_dies">
					<div class="dies_gp">广播</div>
					<div class="dies_ico"><img src="/Public/Home/images/gb.gif" /></div>
					<div class="dies_news"><a href="<?php echo ($message["url"]); ?>"><?php echo ($message["title"]); ?></a></div>
				</div>

			</div>
			<div class="clear"></div>

			<!--信息-->
			<div class="spit_sm">

				<div class="left_xx">
					<div class="xx_title">
			        	<div class="box_h1">品种</div>
			            <div class="box_h2">材质</div>
			            <div class="box_h3">规格(mm)</div>
			            <div class="box_h4">重量(kg) </div>
			            <div class="box_h5">公司名称</div>
			            <div class="box_h6">联系我们</div>
			            <div class="box_h7">仓库区</div>
			            <div class="box_h8"> 更新时间</div>
			        </div>
					<?php if(is_array($lists)): $key = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><div class="xx_title1">
							<div class="box_h1"><?php echo ($vo["pinzhong"]); ?></div>
							<div class="box_h2"><?php echo ($vo["caizhi"]); ?></div>
							<div class="box_h3"><?php echo ($vo["guige"]); ?></div>
							<div class="box_h4"><?php echo ((isset($vo["zhongliang"]) && ($vo["zhongliang"] !== ""))?($vo["zhongliang"]):"0"); ?></div>
							<div class="box_h5"><?php echo ($vo['company']['small_name']); ?></div>

							<div id="title">
								<ul>
									<li>
										<a href="#">点我联系</a>
										<div class="div_ul">
											<ul class="h1">
												<li class="s1"><?php echo ($vo['company']['name']); ?></li>
												<li class="s2">进入商铺</li>
												<li class="s3">
													<img src="/Public/Home/images/h2_zhizhao.png" />
													<span>执照已验证</span>
													<span style="display:none">执照未验证</span>
												</li>
												
												<li class="s5"></li>
												<li class="s6"> 联系人:<?php echo ($vo['contact']['name']); ?>
													<?php if(!empty($vo['contact']['qq'])): ?><div class="aa">
														<a class="aqq" style="background:none;padding:0;" href="tencent://message/?uin=<?php echo ($vo['contact']['qq']); ?>&amp;Site=www.gousteel.com&amp;Menu=yes" target="_blank"><img src="/Public/Home/images/qq.jpg" alt="点击这里给我发送消息" border="0"></a>

													</div><?php endif; ?>
												</li>
												<li class="s7"> 电话：<?php echo ($vo['contact']['tel']); ?></li>
												<li class="s7"> 手机：<?php echo ($vo["mobile"]); ?> <span><?php echo ($vo['contact']['mobile']); ?></span></li>
												<li class="s7"> 传真：<?php echo ($vo['contact']['fax']); ?></li>
												<li class="s7"> 经营模式：<?php echo ($vo["business"]); ?></li>
												<li class="s7"> 仓库：<?php echo ($vo["com_address"]); ?></li>
												<li class="s7">备注：<?php echo ((isset($vo["beizhu"]) && ($vo["beizhu"] !== ""))?($vo["beizhu"]):'无'); ?></li>
											</ul>

										</div>
									</li>
								</ul>
							</div>

							<div class="box_h7"><?php echo ($vo["ware_city"]); ?></div>
							<div class="box_h8"><?php echo (mdate($vo["create_time"])); ?></div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>

				</div>
				<!--信息右边-->
				<div class="right_c">
					<img src="/Public/Home/images/k_tp1.png" class="right_gg" />

					<img src="/Public/Home/images/k_tp2.png" class="right_gg" />
					<ul class="right_qg">
						<li class="right_title">
							求购信息
						</li>
						<li class="right_li"><span>温州鑫郎特种钢材有限公司</span></li>
						<li class="right_li"><span>安徽南特钢业有限公司</span></li>
						<li class="right_li"><span>温州联顺（顺益）不锈钢</span></li>
						<li class="right_li"><span>温州市维钢流体设备有限公司</span></li>
						<li class="right_li"><span>温州科光钢业有限公司</span></li>
						<li class="right_li"><span>温州利群不锈钢有限公司</span></li>
						<li class="right_icp">发布求购</li>
						<div class="clear"></div>
					</ul>
					<ul class="right_qg" style="margin-top:15px; padding-bottom:14px;">
						<li class="right_title">
							最活跃企业
							<div class="right_ta">我要发布</div>
						</li>
						<li class="right_li"><span>温州鑫郎特种钢材有限公司</span></li>
						<li class="right_li"><span>安徽南特钢业有限公司</span></li>
						<li class="right_li"><span>温州联顺（顺益）不锈钢</span></li>
						<li class="right_li"><span>温州市维钢流体设备有限公司</span></li>
						<li class="right_li"><span>温州科光钢业有限公司</span></li>
						<li class="right_li"><span>温州利群不锈钢有限公司</span></li>
						<li class="right_li"><span>温州利群不锈钢有限公司</span></li>
						<li class="right_li"><span>温州利群不锈钢有限公司</span></li>
						<li class="right_li"><span>温州利群不锈钢有限公司</span></li>
						<li class="right_li"><span>温州利群不锈钢有限公司</span></li>
						<li class="right_li"><span>温州利群不锈钢有限公司</span></li>

					</ul>

				</div>
				<style>
					.spot .spot_left .xx_down .xx_xia .div_pag {
						float: left;
					}
					.spot .spot_left .xx_down .xx_xia .div_buis {
						float: left;
					}
					.spot .spot_left .xx_down .xx_xia .div_buis {
						float: left;
					}
					.spot .spot_left .xx_down .xx_xia .div_left {
						float: left;
					}
					.spot .spot_left .xx_down .xx_xia .div_right {
						float: left;
					}
					.spot .spot_left .xx_down .xx_xia .div_pag:hover{ 
						float: left;
					}
					.spot .spot_left .xx_down .xx_xia .div_right:hover{ 
						float: left;
					}
					.spot .spot_left .xx_down .xx_xia .div_left:hover{ 
						float: left;
					}
				</style>
				<div class="xx_down">
					<?php echo getPagination($totalPageCount,20);?>
			
						<!--<div class="xx_xia">
							<div class="div_font2">页</div>
							<input name="" type="text" class="div_ipt" />
							<div class="div_font1">跳转至</div>
							
							<div class="div_buis">79580 条记录</div>
							
							<div class="div_buis">2/3979 页</div>
							<div class="div_left"></div>
							<div class="div_pag">1</div>
							<div class="div_pag">2</div>
							<div class="div_pag">3</div>
							<div class="div_pag">4</div>
							<div class="div_pag">5</div>
							<div class="div_pag">6</div>
							<div class="div_pag">7</div>
							
							<div class="div_right"></div>
							
						</div>-->
			
					
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<!-- /主体 -->

	<!-- 底部 -->
	<!--xinxi-->

<div class="clear"></div>
<div class="foot" style=" margin-top:0">
	<div class="f">
		<div class="fleft">
			<div class="fup">
				<div class="s1"><img src="/Public/Home/images/dh_ice.png" /></div>
				<div class="s2">客服热线<span>(08:30-17:30)</span></div>
			</div>
			<div class="fdonw">0577-89881176</div>
		</div>
		<div class="fright">
			<ul class="r1">
				<li>
					<a href="<?php echo U('Home/Other/About');?>">关于我们</a>
					<div>|</div>
				</li>
				<li>
					<a href="<?php echo U('Home/Other/Legal');?>">法律声明</a>
					<div>|</div>
				</li>
				<li>
					<a href="<?php echo U('Home/Other/Recruitment');?>">人才招聘</a>
					<div>|</div>
				</li>
				<li>
					<a href="<?php echo U('Home/Other/Investment');?>">投资洽谈</a>
					<div>|</div>
				</li>
				<li>
					<a href="<?php echo U('Home/Other/contact');?>">联系我们</a>
					<div>|</div>
				</li>
				<li>
					<a href="<?php echo U('Home/Other/Remittance');?>">汇款方式</a>
				</li>
			</ul>
			<div class="r2">
				<div class="p">Copyright © 2013 - 2019 gousteel.com</div>
				<div class="p">购钢现货网版权所有</div>
				<div class="p">浙ICP备12008543号-2</div>
			</div>
			<div class="r3">
				<img src="/Public/Home/images/110.png" class="img1" />
				<img src="/Public/Home/images/kxwz.png" class="img1" />
			</div>
		</div>
	</div>
</div>
	<!-- /底部 -->

</body>
</html>
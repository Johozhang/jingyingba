<?php 
	session_start();
	$flag = $_SESSION[('flag')];

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>线下课程</title>
	<link rel="stylesheet" type="text/css" href="../../css/course/schoolDetails.css">
	<link rel="stylesheet" type="text/css" href="../../css/base.css">
	<link rel="stylesheet" type="text/css" href="../../css/head_footer.css">
	<link rel="stylesheet" type="text/css" href="../../css/iconfont.css">
</head>
<body>
<!--***********************header开始**************************-->
		<div id="header"><!--头部标签-->
			<div class="limit"><!--限位居中-->
				<a class="jyLogo" href="../../index.php"></a><!--精英吧logo-->
				<ul class="navigation"><!--顶部导航条-->
					<li><a class="active" href="javascript:void(0);">课程</a></li>
					<li><a href="javascript:void(0);">学习指导</a></li>
					<li><a href="javascript:void(0);">企业招聘</a></li>
					<li><a href="javascript:void(0);">互联网头条</a></li>
					<li><a href="javascript:void(0);"><i class="iconfont cross">&#xe665;</i>提问</a></li>
				</ul>
				<?php 
					if($flag == 1) {
						

				?>
                   <a href="javascript:void(0);" class="personalBtn">
					<div class="headPic">
						<img src="../../img/head_footer/head_footer_03.png"/>
					</div>
					<span>个人中心</span>
					<i class="iconfont down">&#xe818;</i>
				    </a>
				<?php 
					}else {
				 ?>
				

				<div style="float: right;" class="loginreg clearfix">
					<a href="../../login.html">登录</a>丨
					<a href="../../login.html#zhuce">注册</a>
				</div>
				<?php } ?>
			</div>
		</div>
<!--***********************header结束**************************-->


<!--***********************内容开始**************************-->
<div class="course-details-top">
<div class="left clearfix">
	<img src="../../img/course/example.png">
	<div class="school-intro">
		<p class="school-intro-company">北京蓝鸥科技教育培训学校有限公司</p>
		<div class="school-intro-content">
			<p>北京市海淀区清河中街金五星大厦五楼</p>
			<div class="school-intro-stars clearfix">
			<span class="active"></span>
			<span class="active"></span>
			<span class="active"></span>
			<span class="active"></span>
			<span></span>
			</div>
			<div class="sign-num">
				<span class="sign-num1">87</span>
				<span class="sign-num2">人已报名</span>
			</div>
			<a href="javascript:void(0)"><span class="pre-advice">预约咨询</span></a>
		</div>
	</div>
</div>
<div class="right">
	<p>学校地址</p>
	<div id="allmap"></div>
</div>
	
</div>


<div class="course-details-below clearfix">
	<div class="left">
		<div>
			<ul class="course-reorder clearfix">
				<li class="course-reorder-active"><a href="javascript:void(0);" class="default">本校课程</a></li>
				<li><a href="javascript:void(0);" class="sale-volume">学校简介</a></li>
				<li><a href="javascript:void(0);" class="sale-price">官方相册</a></li>
				<li><a href="javascript:void(0);" class="sale-price">用户评价</a></li>
			</ul>
		</div>




<!-- 本校课程 -->

<div class="school-course choose">
<ul class="school-courselist clearfix">
	<li class="school-course-details clearfix">
	<a href="javascript:void(0)">
		<div class="left clearfix">
			<p class="clearfix">
				<span class="left-span-1">一年会员-购买专用连接（仅用于购买用）-中艺摄影网校</span>
				<span class="left-span-2">线上</span>
			</p>
			<p class="left-p2">
				<span class="left-p2-1">蓝鸥科技教育有限公司</span>
				<span class="left-p2-2">120天</span>
				<span class="left-p2-3">已售</span>
				<span class="left-p2-4">1200</span>
				<span class="left-p2-5">评分</span>
				<span class="left-p2-6">8.9</span>
				<span class="left-p2-7">分</span>
			</p>
		</div>
		<div class="right clearfix">
			<p class="right-p1 clearfix">	
				<span>1288</span>		
			    <span class="right-p1-2">￥</span>
			</p>
			<p class="right-p2">
				<del>5000</del>
				<span>价值：</span>

			</p>
		</div>
		</a>
	</li>
	<li class="school-course-details clearfix offline">
	<a href="javascript:void(0)">
		<div class="left clearfix">
			<p class="clearfix">
				<span class="left-span-1">一年会员-购买专用连接（仅用于购买用）-中艺摄影网校</span>
				<span class="offline-p1-2 left-span-2">线下</span>
			</p>
			<p class="left-p2">
				<span class="left-p2-1">蓝鸥科技教育有限公司</span>
				<span class="left-p2-2">120天</span>
				<span class="left-p2-3">已售</span>
				<span class="left-p2-4">1200</span>
				<span class="left-p2-5">评分</span>
				<span class="left-p2-6">8.9</span>
				<span class="left-p2-7">分</span>
			</p>
		</div>
		<div class="right clearfix">
			<p class="right-p1 clearfix">	
				<span>1288</span>		
			    <span class="right-p1-2">￥</span>
			</p>
			<p class="right-p2">
				<del>5000</del>
				<span>价值：</span>

			</p>
		</div>
		</a>
	</li>
</ul>

</div>
<!-- 学校简介 -->
<div class="school-instro choose">
<p class="topic">蓝鸥科技教育有限公司简介</p>
<p class="content">
	蓝鸥是一家集产、学、研为一体的综合性移动互联网研发培训机构，致力于iOS开发、Unity3D游戏开发、Android开发和HTML5前端开发等软件人才的培养。蓝鸥强大的师资阵容，纯净的教育理念，严格的管理制度，使其成为了美国苹果公司AATC认证官方授权培训中心、Unity官方授权培训中心，也是目前国内仅有的一家”两大官方授权于一身“的移动互联网培训企业。2012年10月18日，刘辉、李静波、崔亚允，中国移动互联网开发行业的三位领军人物，强强联手，倾力打造了蓝鸥。“三巨头”（开发、技术、教学）护航蓝鸥一路向前，经过短短的三年，蓝鸥已拥有在职员工400多人，学员上万人，在全国共拥有8家实训中心、2家中心直属分院和1家项目研发基地，分别是：北京实训中心、上海实训中心、广州实训中心、大连实训中心、郑州实训中心、西安实训中心、武汉实训中心、成都实训中心、北京中心直属分院（石家庄）、大连中心直属分院（哈尔滨）和上海项目研发基地。
</p>
<p class="content">
       蓝鸥是一家集产、学、研为一体的综合性移动互联网研发培训机构，致力于iOS开发、Unity3D游戏开发、Android开发和HTML5前端开发等软件人才的培养。蓝鸥强大的师资阵容，纯净的教育理念，严格的管理制度，使其成为了美国苹果公司AATC认证官方授权培训中心、Unity官方授权培训中心，也是目前国内仅有的一家”两大官方授权于一身“的移动互联网培训企业。2012年10月18日，刘辉、李静波、崔亚允，中国移动互联网开发行业的三位领军人物，强强联手，倾力打造了蓝鸥。“三巨头”（开发、技术、教学）护航蓝鸥一路向前，经过中国移动互联网开发行业的三位领军人物，强强联手，倾力打造了蓝鸥。
</p>
	
</div>
<!-- 官方相册 -->
<div class="photo-album clearfix choose">
<a href="javascript:void(0)"><img src="../../img/course/example.png"></a>
<a href="javascript:void(0)"><img src="../../img/course/example.png"></a>
<a href="javascript:void(0)"><img src="../../img/course/example.png"></a>
<a href="javascript:void(0)"><img src="../../img/course/example.png"></a>
<a href="javascript:void(0)"><img src="../../img/course/example.png"></a>
	
</div>

<!-- 用户评价 -->

<div class="course-judge choose">
<div class="judge-count clearfix">
	<p class="judge-countp1">5.2</p>
	<div class="clearfix">
	<span class="judge-star judge-star-active"></span>
	<span class="judge-star judge-star-active"></span>
	<span class="judge-star judge-star-active"></span>
	<span class="judge-star"></span>
	<span class="judge-star"></span>
	</div>
	<p class="judge-countp2">该课程共56人评价</p>
</div>
<div class="judge-num">
<div>
	<span class="judge-num-words">好评</span>
	<span class="judge-map">
		<span></span>
	</span>
	<span class="judge-num-words">12315人</span>
</div>	
<div>
	<span class="judge-num-words">好评</span>
	<span class="judge-map">
		<span></span>
	</span>
	<span class="judge-num-words">12315人</span>
</div>	
<div>
	<span class="judge-num-words">好评</span>
	<span class="judge-map">
		<span></span>
	</span>
	<span class="judge-num-words">12315人</span>
</div>	
</div>
<div class="impression clearfix">
	<div class="impression1">
		<span>大家印象:</span>
	</div>
	<div class="impression2">
		<span>交通便利(323)</span>
		<span>交通便利(323)</span>
		<span>交通便利(323)</span>
		<span>交通便利(323)</span>
		<span>交通便利(323)</span>
		<span>交通便利(323)</span>
		<span>交通便利(323)</span>
		<span>交通便利(323)</span>
		<span>交通便利(323)</span>
		<span class="impression-active">交通便利(323)</span>
	</div>
</div>
<div class="judge-details">
	<div class="judge-details1">评价内容(134)</div>
	<ul>
		<li>
			<span class="user-judge user-judge-active"></span>
			<span class="user-judge user-judge-active"></span>
			<span class="user-judge user-judge-active"></span>
			<span class="user-judge "></span>
			<span class="user-judge "></span>
			<span id="user-name">刘**疯</span>
			<p>很满意特别划算 真不错    很详细 有耐心。很满意特别划算 真不错    很详细 有耐心很满意特别划算 真不错    很详细 有耐心很满意特别划算 真不错    很详细 有耐心很满意特别划算 真不错    很详细 有耐心</p>

		</li>
		<li>
			<span class="user-judge user-judge-active"></span>
			<span class="user-judge user-judge-active"></span>
			<span class="user-judge user-judge-active"></span>
			<span class="user-judge "></span>
			<span class="user-judge "></span>
			<span id="user-name">刘**疯</span>
			<p>很满意特别划算 真不错    很详细 有耐心。很满意特别划算 真不错    很详细 有耐心很满意特别划算 真不错    很详细 有耐心很满意特别划算 真不错    很详细 有耐心很满意特别划算 真不错    很详细 有耐心</p>

		</li>
	</ul>
	<div class="judge-nav">
	<a href="javascript:void(0)"><span class="pre-page">上一页</span></a>
	<a href="javascript:void(0)"><span class="page-num page-num-active">1</span></a>
	<a href="javascript:void(0)"><span class="page-num">2</span></a>
	<a href="javascript:void(0)"><span class="page-num">3</span></a>
	<a href="javascript:void(0)"><span class="page-num">4</span></a>
	<a href="javascript:void(0)"><span class="page-num">5</span></a>
	<a href="javascript:void(0)"><span class="page-num">6</span></a>
	<a href="javascript:void(0)"><span class="page-num">7</span></a>
	<a href="javascript:void(0)"><span class="page-num">8</span></a>
	<a href="javascript:void(0)"><span class="page-num">9</span></a>
	<a href="javascript:void(0)"><span class="page-num">...</span></a>
	<a href="javascript:void(0)"><span class="page-num">100</span></a>
	<a href="javascript:void(0)"><span class="next-page">下一页</span></a>
	</div>
</div>
	
</div>



















	</div>
	<div class="right ">
	<div class="hot-sale">
	<div class="hot-sale-topic">
		<span class="hot-sale-topic1">热销课程</span>	
		<span class="hot-sale-topic2">更多</span>		
	</div>
	<ul class="hot-course-list">
        <li class="hot-course">
		<a href="javascript:void(0)">
			<img src="../../img/course/example.png">
			<div class="hot-course-words">
			<p class="course-name hot-course-words1">4个月IOS高薪就业班...</p>
			<p class="hot-course-words2">北京市海淀区清河中街金...</p>
			<span class="hot-course-words21">￥</span><span class="hot-course-words22">1288</span>
			</div>
		</a>
		</li>
		<li class="hot-course">
		<a href="javascript:void(0)">
			<img src="../../img/course/example.png">
			<div class="hot-course-words">
			<p class="course-name hot-course-words1">4个月IOS高薪就业班...</p>
			<p class="hot-course-words2">北京市海淀区清河中街金...</p>
			<span class="hot-course-words21">￥</span><span class="hot-course-words22">1288</span>
			</div>
		</a>
		</li>
	</ul>


	</div>
	</div>
</div>

<!--***********************内容结束**************************-->
<div id="footer"><!--尾部标签-->
			<div class="limit"><!--限位居中-->
				<p class="friendlyLink"><!--跳转链接-->
					<span>友情链接</span>
					<a href="javascript:void(0);">蓝鸥科技</a>
					<a href="javascript:void(0);">蓝鸥科技</a>
					<a href="javascript:void(0);">蓝鸥科技</a>
					<a href="javascript:void(0);">蓝鸥科技</a>
					<a href="javascript:void(0);">蓝鸥科技</a>
					<a href="javascript:void(0);">蓝鸥科技</a>
					<a href="javascript:void(0);">蓝鸥科技</a>
					<a href="javascript:void(0);">蓝鸥科技</a>
					<a class="more" href="javascript:void(0);">更多<i class="iconfont">&#xe6ac;</i></a>
					
				</p>
				<div class="comprehensiveInformation"><!--网站信息内容-->
					<ul class="ul1">
						<li class="li1">
							<p>我们的实验室</p>
						</li>
						<li>
							<a href="javascript:void(0);">在线编程</a>
						</li>
						<li>
							<a href="javascript:void(0);">奖学制度</a>
						</li>
						<li>
							<a href="javascript:void(0);">在线班级</a>
						</li>
						<li>
							<a href="javascript:void(0);">课后60分钟考试</a>
						</li>
					</ul>
					<ul class="ul2">
						<li class="li1">
							<p>关于我们</p>
						</li>
						<li>
							<a href="javascript:void(0);">精英吧简介</a>
						</li>
						<li>
							<a href="javascript:void(0);">联系我们</a>
						</li>
						<li>
							<a href="javascript:void(0);">加入我们</a>
						</li>
					</ul>
					<ul class="ul3">
						<li class="li1">
							<p>现有课程</p>
						</li>
						<li>
							<a href="javascript:void(0);">iOS</a>
						</li>
						<li>
							<a href="javascript:void(0);">Android</a>
						</li>
						<li>
							<a href="javascript:void(0);">unity3D</a>
						</li>
						<li>
							<a href="javascript:void(0);">H5</a>
						</li>
					</ul>
					<ul class="ul4">
						<li class="li1">
							<p>帮助</p>
						</li>
						<li>
							<a href="javascript:void(0);">联系客服</a>
						</li>
						<li>
							<a href="javascript:void(0);">版权声明</a>
						</li>
						<li>
							<a href="javascript:void(0);">法律声明</a>
						</li>
						<li>
							<a href="javascript:void(0);">服务条款</a>
						</li>
					</ul>
					<ul class="ul5">
						<li class="li1">
							<p>反馈方式</p>
						</li>
						<li>
							<a href="javascript:void(0);">电子邮箱：help@xxxxx.com</a>
						</li>
						<li>
							<a href="javascript:void(0);">微信反馈：精英吧微信公众号</a>
						</li>
						<li>
							<img src="../../img/head_footer/head_footer_10.png"/>
						</li>
					</ul>
					<ul class="ul6">
						<li class="li1">
							<p>精英吧APP扫描下载</p>
						</li>
						<li>
							<img src="../../img/head_footer/head_footer_07.png"/>
						</li>
					</ul>
				</div>
				<div class="license"><!--备案内容-->
					<p>蓝鸥科技有限公司©1997-2016 <span>|</span> 北京市海淀区清河毛纺路路南甲36号金五星商业大厦5层</p>
				</div>
			</div>
		</div>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=DSADAmtF6TTG3AQQFYoil1hmazQpAh9n"></script>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript">
$(".course-reorder>li").on("click",function(){
	var index = $(this).index();
	$(this).addClass("course-reorder-active").siblings().removeClass("course-reorder-active");
	$(".course-reorder a").css({
		color:"#333"
	});
	$(".course-reorder a").eq(index).css({
		color:"#29b572"
	})
   // $(".choose").eq(index).show();
 if(index == 0){
 	$(".school-course").show();
 	$(".school-instro").hide();		
	$(".photo-album").hide();	
	$(".course-judge").hide();
 }
  if(index == 1){
 	$(".school-course").hide();
 	$(".school-instro").show();		
	$(".photo-album").hide();	
	$(".course-judge").hide();
 }
if(index == 2){
 	$(".school-course").hide();
 	$(".school-instro").hide();		
	$(".photo-album").show();	
	$(".course-judge").hide();
}
if(index == 3){
 	$(".school-course").hide();
 	$(".school-instro").hide();		
	$(".photo-album").hide();	
	$(".course-judge").show();
}







})
	var map = new BMap.Map("allmap");    // 创建Map实例
	map.centerAndZoom(new BMap.Point(113.3527, 23.1808), 18);  // 初始化地图,设置中心点坐标和地图级别
	map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>
</body>
</html>
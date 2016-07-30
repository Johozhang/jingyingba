<?php 
	session_start();
	$flag = $_SESSION[('flag')];

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>线下课程</title>
	<link rel="stylesheet" type="text/css" href="../../css/course/schoolHome.css">
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

<!--***********************导航窗开始**************************-->
<div class="course-classfy">
<div class="course-content-classfy">
<span class="classfy-icon"></span>
<span class="classfy-word">分类:</span>
<ul class="classfy-content-list clearfix">
	<li><a href="javascript:void(0)">全部</a></li>
	<li><a href="javascript:void(0)">unity 3D</a></li>
	<li><a href="javascript:void(0)">iOS</a></li>
	<li><a href="javascript:void(0)">Android</a></li>
	<li><a href="javascript:void(0)">Html5</a></li>
</ul>
	
</div>
<div class="course-location-classfy">
<span class="location-icon"></span>
<span class="classfy-word">区域:</span>
<ul class="classfy-content-list clearfix">
	<li><a href="javascript:void(0)">全部</a></li>
	<li><a href="javascript:void(0)">朝阳区</a></li>
	<li><a href="javascript:void(0)">海淀区</a></li>
	<li><a href="javascript:void(0)">西城区</a></li>
	<li><a href="javascript:void(0)">东城区</a></li>
</ul>	
</div>
</div>
<!--***********************导航窗结束**************************-->

<!--***********************内容开始**************************-->
<div class="course-list clearfix">
<div class="courses-content">
<div>
	<ul class="course-reorder clearfix">
		<li class="course-reorder-active"><a href="javascript:void(0)" class="default">默认</a></li>
		<li><a href="javascript:void(0)" class="high-opinion">好评</a></li>
	</ul>
</div>
<ul class="course-offline">
<a href="javascript:void(0)">
	<li class="course-details">
	<img src="../../img/course/example.png">
	<div class="right">
		 <div class="course-details-topic">
		<span class="course-details-topic1">英语零基础直达四级水平新概念</span>
		<span class="course-details-topic2"> [朝阳地区]</span>
		</div>
		<div class="course-details-judge">
			<span class="stars stars-active"></span>
			<span class="stars "></span>
			<span class="stars "></span>
			<span class="stars "></span>
			<span class="stars "></span>
			<span>评分</span>
			<span>8.9</span>
			<span class="course-details-judge7">分</span>
		</div>
		<p>北京市海淀区清河中街金五星大厦五楼</p>
	</div>
</li>
</a>


</ul>

<div class="page-shift">
	<a href="javascript:void(0)"><span class="pre-page">上一页</span></a>
	<a href="javascript:void(0)"><span class="page-active">1</span></a>
	<a href="javascript:void(0)"><span>2</span></a>
	<a href="javascript:void(0)"><span>3</span></a>
	<a href="javascript:void(0)"><span>4</span></a>
	<a href="javascript:void(0)"><span>5</span></a>
	<a href="javascript:void(0)"><span>6</span></a>
	<a href="javascript:void(0)"><span>7</span></a>
	<a href="javascript:void(0)"><span>8</span></a>
	<a href="javascript:void(0)"><span>9</span></a>
	<a href="javascript:void(0)"><span>...</span></a>
	<a href="javascript:void(0)"><span>100</span></a>
	<a href="javascript:void(0)"><span class="next-page">下一页</span></a>
</div>
</div>
	<div class="part-right">
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
			<p class="hot-course-words1">4个月IOS高薪就业班...</p>
			<p class="hot-course-words2">北京市海淀区清河中街金...</p>
			<span class="hot-course-words11">￥</span><span class="hot-course-words22">1288</span>
			</div>
		</a>
		</li>
		<li class="hot-course">
		<a href="javascript:void(0)">
			<img src="../../img/course/example.png">
			<div class="hot-course-words">
			<p class="hot-course-words1">4个月IOS高薪就业班...</p>
			<p class="hot-course-words2">北京市海淀区清河中街金...</p>
			<span class="hot-course-words11">￥</span><span class="hot-course-words22">1288</span>
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
})
$(".course-details").on("click",function(){
	window.location.href = "../schoolDetails/schoolDetails.php"
})
</script>
</body>
</html>
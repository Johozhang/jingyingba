<?php 	
	include_once("../../php/conn1.php");
	$value = $_GET["value"];
	$sql = "select * from classDetail limit $value,1";
	//limit startIndex,length;
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>线下课程</title>
	<link rel="stylesheet" type="text/css" href="../../css/course/otherCourse.css">
	<link rel="stylesheet" type="text/css" href="../../css/base.css">
	<link rel="stylesheet" type="text/css" href="../../css/head_footer.css">
	<link rel="stylesheet" type="text/css" href="../../css/iconfont.css">
</head>
<body>
<!--***********************header开始**************************-->
		<div id="header"><!--头部标签-->
			<div class="limit"><!--限位居中-->
				<a class="jyLogo" href="../../index.html"></a><!--精英吧logo-->
				<ul class="navigation"><!--顶部导航条-->
					<li><a class="active" href="javascript:void(0);">课程</a></li>
					<li><a href="javascript:void(0);">学习指导</a></li>
					<li><a href="javascript:void(0);">企业招聘</a></li>
					<li><a href="javascript:void(0);">互联网头条</a></li>
					<li><a href="javascript:void(0);"><i class="iconfont cross">&#xe665;</i>提问</a></li>
				</ul>
				<a href="javascript:void(0);" class="personalBtn"><!--个人中心-->
					<div class="headPic"><!--头像-->
						<img src="../../img/head_footer/head_footer_03.png"/>
					</div>
					<span>个人中心</span>
					<i class="iconfont down">&#xe818;</i>
				</a>
			</div>
		</div>
<!--***********************header结束**************************-->

<!--***********************广告开始**************************-->
<div class="ad-nav">
   <div class="clearfix">
   			<ul class="course-reorder clearfix">
				<li class="course-reorder-active"><a href="javascript:void(0)" class="default">课程详情</a></li>
				<li><a href="javascript:void(0)" class="sale-volume">其它课程</a></li>
				<li><a href="javascript:void(0)" class="sale-price">用户评价</a></li>
			</ul>
	<a href="javascript:void(0)" class="buy-soon">立即抢购</a>
	<a href="javascript:void(0)" class="pre-advice">预约咨询</a>
   </div>
</div>
<div class="course-advertise">
	<div class="ad-img">
	<img src="<?php echo $row["imgAddress"];?>" class="ad-big">
	<a href="javascript:void(0)"><img src="<?php echo $row["imgAddress"];?>" class="ad-small"></a>
	<a href="javascript:void(0)"><img src="<?php echo $row["imgAddress"];?>" class="ad-small"></a>
	<a href="javascript:void(0)"><img src="<?php echo $row["imgAddress"];?>" class="ad-small"></a>
	<a href="javascript:void(0)"><img src="<?php echo $row["imgAddress"];?>" class="ad-small ad-small-last"></a>
	</div>
	<div class="ad-detail">
	<p class="course-topic"><?php echo $row["classType"];?></p>
	<span class="course-company">蓝鸥教育科技有限公司</span><span class="course-company1">[公司详情]</span>
	<p class="course-adress"><?php echo $row["shoolAddress"];?></p>
	<table class="course-wrap">
	<tr class="course-price">
		<td colspan="3">
			<span class="current-price1">￥</span>
			<span class="current-price"><?php echo $row["classPrice"];?></span>
	<span class="origin-price">￥</span>
			    <del class="origin-price1">1500</del>
			   
			    <span class="front-money1">￥99.9</span>
			     <span class="front-money">报名定金</span>
			</td>
		</tr>
		<tr class="sale-num">
			<td class="sale-num1">
			<span class="course-saleout">已售</span>
			<span class="course-saleout1">342</span>
			</td>
			<td class="sale-num2">
			<span class="course-judge-01">评分</span>
			<span class="course-judge-02">8.9</span>
			</td>
			<td class="sale-num3">
			<span class="course-judgement1">评价</span>
			<span class="course-judgement2">1200</span>
			<span class="course-judgement3">人</span>
			</td>
		</tr>

		</table>
		<a href="javascript:void(0)" class="pre-advice">预约咨询</a>
		<a href="javascript:void(0)" class="buy-soon">立即抢购</a>
		
			
		</div>
	</div>


<!--***********************广告结束**************************-->

<!--***********************内容开始**************************-->
<div class="course-list clearfix">
	<div class="courses-content">
		<div>
			<ul class="course-reorder clearfix">
				<li class="course-reorder-active"><a href="javascript:void(0)" class="default">课程详情</a></li>
				<li><a href="javascript:void(0)" class="sale-volume">其它课程</a></li>
				<li><a href="javascript:void(0)" class="sale-price">用户评价</a></li>
			</ul>
		</div>
		<!-- 其它课程 -->
		<ul class="other-course">
			<li class="course-infor">
			<div class="course-infor-left">
				<a href="javascript:void(0)">一年会员-购买专用连接（仅用于购买用）-中艺摄影网校</a>
				<span class="course-infor-left1">蓝鸥科技有限公司</span>
				<span class="course-infor-left2">120天</span>
				<span class="course-infor-left3">已售</span>
				<span class="course-infor-left4">1200</span>
				<span class="course-infor-left5">评分</span>
				<span class="course-infor-left6">8.9</span>
				<span class="course-infor-left7">分</span>
			</div>	
			<div class="course-infor-right">
				<span class="course-infor-right1">￥</span>
				<span class="course-infor-right2">1288</span>
				<br>
				<span class="course-infor-right3">价值 :</span>
				<del>5000</del>
			</div>
			</li>
			<li class="course-infor">
			<div class="course-infor-left">
				<a href="javascript:void(0)">一年会员-购买专用连接（仅用于购买用）-中艺摄影网校</a>
				<span class="course-infor-left1">蓝鸥科技有限公司</span>
				<span class="course-infor-left2">120天</span>
				<span class="course-infor-left3">已售</span>
				<span class="course-infor-left4">1200</span>
				<span class="course-infor-left5">评分</span>
				<span class="course-infor-left6">8.9</span>
				<span class="course-infor-left7">分</span>
			</div>	
			<div class="course-infor-right">
				<span class="course-infor-right1">￥</span>
				<span class="course-infor-right2">1288</span>
				<br>
				<span class="course-infor-right3">价值 :</span>
				<del>5000</del>
			</div>
			</li>

		</ul>
		<!-- 其它课程 -->

		<!-- 课程详情 -->
		<table class="course-details">
		<tr class="table-up">
			<td class="table-up1">课程类型 :</td>
			<td class="table-up2"><?php echo $row["type"];?></td>
		</tr>
		<tr class="table-up">
			<td class="table-up1">上课人数 :</td>
			<td class="table-up2"><?php echo $row["classNum"];?></td>
		</tr>
		<tr class="table-up">
			<td class="table-up1">课程周期 :</td>
			<td class="table-up2"><?php echo $row["classCycle"];?></td>
		</tr>
		<tr class="table-up">
			<td class="table-up1">课程价格 :</td>
			<td class="table-up2"><?php echo $row["classPrice"];?></td>
		</tr>
		<tr class="table-up">
			<td class="table-up1">学校地址 :</td>
			<td class="table-up2 table-up3"><?php echo $row["shoolAddress"];?></td>
		</tr>
		<tr class="table-down table-down1">
			<td class="table-up1">适合人群 :</td>
			<td class="table-up2">
			<?php echo $row["suitable"];?>
			</td>
		</tr>
		<tr class="table-down">

			<td class="table-up1">教学内容 :</td>
			<td class="table-up2"><?php echo $row["classDescribe"];?></td>
		</tr>
		<tr class="table-down">
			<td class="table-up1">学习目标 :</td>
			<td class="table-up2"><?php echo $row["learningGoals"];?></td>
		</tr>
		<tr class="table-down">
			<td class="table-up1">使用教材 :</td>
			<td class="table-up2"><?php echo $row["coursebook"];?></td>
		</tr>
			
		</table>
        
		<!-- 课程详情 -->
		<!-- 课程评价 -->
<div class="course-judge">
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
		<!-- 课程评价 -->
</div>
	<!-- 右边 -->
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
			<p class="course-name1">4个月IOS高薪就业班...</p>
			<p class="course-adress1">北京市海淀区清河中街金...</p>
			<span  class="hot-course-words1">￥</span><span  class="hot-course-words2">1288</span>
			</div>
		</a>
		</li>
		<li class="hot-course">
		<a href="javascript:void(0)">
			<img src="../../img/course/example.png">
			<div class="hot-course-words">
			<p class="course-name1">4个月IOS高薪就业班...</p>
			<p class="course-adress1">北京市海淀区清河中街金...</p>
			<span  class="hot-course-words1">￥</span><span  class="hot-course-words2">1288</span>
			</div>
		</a>
		</li>
	</ul>


	</div>
	<div class="question-list">
		 <p class="question-topic">有疑问?</p>
		 <ul>
		 	<li>
			 	<div class="question">
			 	   <span class="question1">A:</span>
			 	   <span class="question2">报名定金是个什么鬼？</span>
			 	</div>
		 	<div class="answer clearfix">
			 	<div class="answer-left">B:</div>
			 	<div class="answer-right">当年18户村民按下红手印，签订大包干契约情景。总书记感慨道：”当年贴着身价性命干的事，变成中国改革的一声惊雷，成为中国改革的标志
			 	</div>
		 	</div>	
		 	</li>
		 	<li>
			 	<div class="question">
			 	   <span class="question1">A:</span>
			 	   <span class="question2">报名定金是个什么鬼？</span>
			 	</div>
		 	<div class="answer clearfix">
			 	<div class="answer-left">B:</div>
			 	<div class="answer-right">当年18户村民按下红手印，签订大包干契约情景。总书记感慨道：”当年贴着身价性命干的事，变成中国改革的一声惊雷，成为中国改革的标志
			 	</div>
		 	</div>	
		 	</li>

		 </ul>
	</div>
	</div>
	<!-- 右边 -->
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
	if(index == 0){
		$(".other-course").hide();
		$(".course-details").show();
		$(".course-judge").hide();
	}
	if(index == 1){
		$(".other-course").show();
		$(".course-details").hide();
		$(".course-judge").hide();
	}
	if(index == 2){
		$(".other-course").hide();
		$(".course-details").hide();
		$(".course-judge").show();
	}
})

function mousewheel(element,fn){
	element.onmousewheel = fn;
	if(window.addEventListener){
		element.addEventListener("DOMMouseScroll",fn,false)
	}

}
var courselist = document.querySelector(".course-list");
mousewheel(document,function(e){

	console.log(courselist.getBoundingClientRect());
	if(courselist.getBoundingClientRect().top <= 0){
			$(".ad-nav").show();
	}
	if(courselist.getBoundingClientRect().top >= 5){
			$(".ad-nav").hide();
	}
})

</script>
</body>
</html>
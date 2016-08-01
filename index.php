<?php 
	session_start();
	$flag = 0;
	// $user = $_SESSION['user_name'] ;
    $flag = $_SESSION[('flag')];

 ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/iconfont.css" />
		<link rel="stylesheet" type="text/css" href="css/head_footer.css" />
		<link rel="stylesheet" type="text/css" href="css/index/index.css" />
		<link rel="stylesheet" type="text/css" href="css/idangerous.swiper.css" />
	</head>

	<body>
		<div id="header" class="clearfix">
			<div class="limit clearfix">
				<a class="jyLogo" href="javascript:void(0);"></a>
				<div class="city clearfix">
					<p>北京　&equiv;</p>
					<i style="display: none;"></i>
					<ul class="city-cont" style="display: none;">
						<li>
							<div class="citymask"></div>
							<img src="img/index/beijing.png" alt="" />
							<em>北京</em>
						</li>
						<li>
							<div class="citymask"></div>
							<img src="img/index/dalian.png" alt="" />
							<em>大连</em>
						</li>
						<li>
							<div class="citymask"></div>
							<img src="img/index/zhengzhou.png" alt="" />
							<em>郑州</em>
						</li>
						<li>
							<div class="citymask"></div>
							<img src="img/index/shanghai.png" alt="" />
							<em>上海</em>
						</li>
						<li>
							<div class="citymask"></div>
							<img src="img/index/guangzhou.png" alt="" />
							<em>广州</em>
						</li>
						<li>
							<div class="citymask"></div>
							<img src="img/index/wuhan.png" alt="" />
							<em>武汉</em>
						</li>
						<li>
							<div class="citymask"></div>
							<img src="img/index/beijing.png" alt="" />
							<em>北京</em>
						</li>
				</ul>
				</div>
				<ul class="navigation">
					<li>
						<a class="active" href="javascript:void(0);">首页</a>
					</li>
					<li>
						<a href="wulei/courseHome/courseHome.php">线下课程</a>
					</li>
					<li>
						<a href="javascript:void(0);">在线课程</a>
					</li>
					<li>
						<a href="wulei/schoolHome/schoolHome.php">学校</a>
					</li>
					<li>
						<a href="javascript:void(0);">互联网头条</a>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="iconfont cross">&#xe665;</i>提问</a>
					</li>
				</ul>
				<?php 
					if($flag == 1) {
						


				?><a href="personalcenter/personalcenter.html"style="color: #333">
                   <div class="personalBtn">
					<div class="headPic">
						<img src="img/head_footer/head_footer_03.png"/>
					</div>
					<span>个人中心</span>
					<i class="iconfont down">&#xe818;</i>
					<ul id="perList">
						<li><a href="">账号设置</a></li>
						<li><a href="">我是在校生</a></li>
						<li><a href="">我的订单</a></li>
						<li><a href="javascript:void(0);" id="tuichu">退出</a></li>
					</ul>
				    </div>
				   </a>
				<?php 
					}else {
				 ?>
				<div style="float: right;" class="loginreg clearfix">
					<a href="login.html">登录</a>丨
					<a href="login.html#zhuce">注册</a>
				</div>
				<?php } ?>
			</div>
		</div>

		<div id="wrap">
			<div id="nav" class="clearfix">
				<div id="banner" class="clearfix swiper-container">
					<div id="inner" class="swiper-wrapper">
						<div class="swiper-slide"><img src="img/index/banner1.png" alt="" /></div>
						<div class="swiper-slide"><img src="img/index/banner2.png" alt="" /></div>
						<div class="swiper-slide"><img src="img/index/banner3.png" alt="" /></div>
					</div>
					<div class="pagination" id="pagination"></div>
				</div>

				<div id="navright" class="clearfix">
					<div class="center clearfix">
						<div class="centerhead">
							<img src="img/index/touxiang.png" class="clearfix" />
							<div class="centerms clearfix">
								<p>Hi，<span>中午</span>好，<br />欢迎来到精英吧。</p>
								<a href="login.html" id="centerlogin" class="centerlogin centerbtn">登录</a>
								<a href="login.html#zhuce" id="centerreg" class="centerbtn">注册</a>
							</div>
						</div>
						<div id="centercon">
							<div>
								<span>新手入门</span>
								<a href="index/bird.html" id="knowjing">了解精英吧></a>
							</div>
							<ul id="knowfour" class="clearfix">
								<li>
									<a href="index/bird.html">
										<div class="rumen rumen1"></div>
										<p>１.理论学习</p>
									</a>
								</li>
								<li>
									<a href="index/bird.html">
										<div class="rumen rumen2"></div>
										<p>２.大牛答疑</p>
									</a>
								</li>
								<li>
									<a href="index/bird.html">
										<div class="rumen rumen3"></div>
										<p>３.在线评估</p>
									</a>
								</li>
								<li>
									<a href="index/bird.html">
										<div class="rumen rumen4"></div>
										<p>４.线下培训</p>
									</a>
								</li>
							</ul>
							<div id="centerfooter" class="clearfix">
								<a href="index/bird.html">奖学</a>
								<a href="index/bird.html">就业</a>
								<a href="index/bird.html">圈子</a>
							</div>
						</div>
					</div>
				</div>
			</div>
				<!--------------------分割线-------------------->
			<ul id="kecheng" class="clearfix">
				<li>
					<div class="kechengtu kechengtu1 clearfix"></div>
					<div class="kechengxiang clearfix">
						<h3>课程学习</h3>
						<p>采用在线教学模式，学习理论课程，让你快速完成理论知识的搭建</p>
					</div>
				</li>
				<li>
					<div class="kechengtu kechengtu2 clearfix"></div>
					<div class="kechengxiang clearfix">
						<h3>学习指导</h3>
						<p>不知道该学什么，我们将有在线职业规划师为你进行学习指导</p>
					</div>
				</li>
				<li>
					<div class="kechengtu kechengtu3 clearfix"></div>
					<div class="kechengxiang clearfix">
						<h3>有问必答</h3>
						<p>利用手机通过算法将你的问题推送给老师，一对一为你实时解答</p>
					</div>
				</li>
				<li>
					<div class="kechengtu kechengtu4 clearfix"></div>
					<div class="kechengxiang clearfix">
						<h3>招聘就业</h3>
						<p>我们鼓励学习，学习达标的学员我们向企业推荐</p>
					</div>
				</li>
				<li>
					<div class="kechengtu kechengtu5 clearfix"></div>
					<div class="kechengxiang clearfix">
						<h3>带你走进互联网</h3>
						<p>行业专家为你提供最新最前沿的互联网思维和讯息，快速了解互联网</p>
					</div>
				</li>
			</ul>
				<!--------------------分割线-------------------->
			<div id="contain">
				<!--online-->
				<h2>精英吧在线课程</h2>
				<div id="online" class="clearfix">
					<ul id="subject" class="clearfix">
						<li>
							<a href="javascript:void(0);">
								<img src="img/index/ios.png" alt="" />
								<div class="subjectmask">正在录制，敬请期待！</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<img src="img/index/android.png" alt="" />
								<div class="subjectmask">正在录制，敬请期待！</div>
							</a>
						</li>
						<li>
							<a href="index/u3d.html">
								<img src="img/index/u3d.png" alt="" />
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<img src="img/index/h5.png" alt="" />
								<div class="subjectmask">正在录制，敬请期待！</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<img src="img/index/more.png" alt="" />
							</a>
						</li>
					</ul>
				</div>
				<!--underline-->
				<h2>线下课程</h2>
				<a href="javascript:void(0);"><img src="img/index/underline.png"/></a>
				<!--jingyingjoin-->
				<h2>精英吧入驻学校</h2>
				<a href="wulei/schoolHome/schoolHome.html"><img src="img/index/join.png" alt="" /></a> 
				<!--differentsudent-->
				<h2>不一样的学习方式：你学习的不仅仅是技能</h2>
				<div id="studdiff" class="clearfix">
					<ul id="different" class="clearfix">
						<li>
							<img src="img/index/stud1.png" alt=""  class="stud"/>
							<h3>同学一起学</h3>
							<p>精准的算法，让你在学习的道路上不孤单，和志同道合，能力相当的同学为伴一起在学习的路上打怪升级，刷副本。</p>
						</li>
						<li>
							<img src="img/index/stud2.png" alt=""  class="stud"/>
							<h3>学习顾问指引</h3>
							<p>贴心的学习顾问，当你遇到困难，学习动力不足，对学习方向和未来迷茫，出手相助。</p>
						</li>
						<li>
							<img src="img/index/stud3.png" alt=""  class="stud"/>
							<h3>奖学制度</h3>
							<p>每个时代都需要天才，但是也需要勤奋刻苦的人才，对，就是你，你学的好，我们就要奖励你，我们要助推你成为社会的精英。</p>
						</li>
						<li>
							<img src="img/index/stud4.png" alt=""  class="stud"/>
							<h3>有问必答</h3>
							<p>遇到困难不要怕，上千名认证专家在线支持答疑，只要你提问，我们就回答。</p>
						</li>
					</ul>
				</div>
				
				<!--scholarship-->
				<h2>目前我们共有超过<span style="color: #ea9b65;">30000</span>注册学习用户<span style="color: #666;font-size: 2.2rem;margin-left: 22px;">目前已经有259名学生获得奖学金</span></h2>
				<div id="scholarship" class="clearfix">
					<ul id="personList" class="clearfix">
						<li class="person">
							<div class="personhead">
								<img src="img/index/personhead.png"/>
							</div>
							<p class="peresonname">王大锤</p>
							<p class="peresonfen">Android基础课<br />综合分数91分</p>
							<p class="jiangxuejin">奖学金：</p>
							<p class="peresonmoney">3000元</p>
						</li>
						<li class="person">
							<div class="personhead">
								<img src="img/index/personhead2.png"/>
							</div>
							<p class="peresonname">孙悟空</p>
							<p class="peresonfen">Android基础课<br />综合分数91分</p>
							<p class="jiangxuejin">奖学金：</p>
							<p class="peresonmoney">2000元</p>
						</li>
						<li class="person">
							<div class="personhead">
								<img src="img/index/personhead3.png"/>
							</div>
							<p class="peresonname">陈长生</p>
							<p class="peresonfen">Android基础课<br />综合分数91分</p>
							<p class="jiangxuejin">奖学金：</p>
							<p class="peresonmoney">1000元</p>
						</li>
						<li class="person">
							<div class="personhead">
								<img src="img/index/personhead4.png"/>
							</div>
							<p class="peresonname">刘欢</p>
							<p class="peresonfen">Android基础课<br />综合分数91分</p>
							<p class="jiangxuejin">奖学金：</p>
							<p class="peresonmoney">500元</p>
						</li>
						<li class="person">
							<div class="personhead">
								<img src="img/index/personhead5.png"/>
							</div>
							<p class="peresonname">孙子</p>
							<p class="peresonfen">Android基础课<br />综合分数91分</p>
							<p class="jiangxuejin">奖学金：</p>
							<p class="peresonmoney">3000元</p>
						</li>
					</ul>
				</div>
				
				<!--agency-->
				<h2>合作机构</h2>
				<div id="agency" class="clearfix">
					<a href="javascript:void(0);" id="agencyleft">&lt;</a>
					<div id="agencyxian">
						<ul id="agencyList" class="clearfix">
							<li><a href="https://www.baidu.com/"><img src="img/index/baidu.png" alt="" /></a></li>
							<li><a href="http://www.cctv.com/"><img src="img/index/cctv.png" alt="" /></a></li>
							<li><a href="http://www.sina.com.cn/"><img src="img/index/sina.png" alt="" /></a></li>
							<li><a href="http://www.10010.com/"><img src="img/index/liantong.png" alt="" /></a></li>
							<li><a href="http://gz.sofang.com/"><img src="img/index/soufang.png" alt="" /></a></li>
							<li><a href="http://www.pingan.com/"><img src="img/index/pingan.png" alt="" /></a></li>
							<li><a href="http://bank.ecitic.com/"><img src="img/index/zhongxin.png" alt="" /></a></li>
							<li><a href="http://www.cyzone.cn/"><img src="img/index/chuangyebang.png" alt="" /></a></li>
							<li><a href="http://www.le.com/"><img src="img/index/leshi.png" alt="" /></a></li>
							<li><a href="http://www.tiexue.net/"><img src="img/index/tiexue.png" alt="" /></a></li>	
							<li><a href="https://www.baidu.com/"><img src="img/index/baidu.png" alt="" /></a></li>
							<li><a href="http://www.cctv.com/"><img src="img/index/cctv.png" alt="" /></a></li>
							<li><a href="http://www.sina.com.cn/"><img src="img/index/sina.png" alt="" /></a></li>
							<li><a href="http://www.10010.com/"><img src="img/index/liantong.png" alt="" /></a></li>
							<li><a href="http://gz.sofang.com/"><img src="img/index/soufang.png" alt="" /></a></li>
							<li><a href="http://www.pingan.com/"><img src="img/index/pingan.png" alt="" /></a></li>
							<li><a href="http://bank.ecitic.com/"><img src="img/index/zhongxin.png" alt="" /></a></li>
							<li><a href="http://www.cyzone.cn/"><img src="img/index/chuangyebang.png" alt="" /></a></li>
							<li><a href="http://www.le.com/"><img src="img/index/leshi.png" alt="" /></a></li>
							<li><a href="http://www.tiexue.net/"><img src="img/index/tiexue.png" alt="" /></a></li>
						</ul>
					</div>
					<a href="javascript:void(0);" id="agencyright">&gt;</a>
				</div>
				<br />
			</div>
		</div>
		<!--------------------分割线-------------------->
		<div id="footer">
			<div class="limit">
				<p class="friendlyLink">
					<span>友情链接</span>
					<a href="http://www.lanou3g.com/">蓝鸥科技</a>
					<a href="http://www.lanou3g.com/">蓝鸥科技</a>
					<a href="http://www.lanou3g.com/">蓝鸥科技</a>
					<a href="http://www.lanou3g.com/">蓝鸥科技</a>
					<a href="http://www.lanou3g.com/">蓝鸥科技</a>
					<a href="http://www.lanou3g.com/">蓝鸥科技</a>
					<a href="http://www.lanou3g.com/">蓝鸥科技</a>
					<a href="http://www.lanou3g.com/">蓝鸥科技</a>
					<a class="more" href="index/friendlink.html">更多<i class="iconfont">&#xe6ac;</i></a>

				</p>
				<div class="comprehensiveInformation">
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
							<img src="img/head_footer/head_footer_10.png" />
						</li>
					</ul>
					<ul class="ul6">
						<li class="li1">
							<p>精英吧APP扫描下载</p>
						</li>
						<li>
							<img src="img/head_footer/head_footer_07.png" />
						</li>
					</ul>
				</div>
				<div class="license">
					<p>蓝鸥科技有限公司©1997-2016 <span>|</span> 北京市海淀区清河毛纺路路南甲36号金五星商业大厦5层</p>
				</div>
				
			</div>
		</div>
		<a id="top" href="javascript:void(0)">
			<img src="img/index/city.png"/>
		</a>
			<script type="text/javascript" src="js/idangerous.swiper.min.js"></script>
			<script type="text/javascript" src="js/jquery.min.js"></script>
			<script type="text/javascript">

 function passdestory(){
		$.ajax({
				type:"GET",                						//ajax传递出去的数据获取的方式
				url:"php/flag1.php",							//ajax链接路径。
				data:{
					code:$.trim($("input[name=phone]").val())	        //ajax传递出去的数据。
				},
				dataType:"json",								//ajax得到的数据格式
				success:function(data) {
					
					
				}
			})	
		    }

$("#tuichu").on("click",function(){
	passdestory();
	window.location.href = "index.html";
})











//			返回顶部
			$("#top").click(function(){
				$("html,body").animate({
					scrollTop:0
				},400,"swing")
			})
			
//			城市切换
			$(".city p").click(function(){$(".city i,.city-cont").fadeToggle()});
			$(".city-cont").mouseleave(function(){$(".city i,.city-cont").hide()});
			
//			banner轮播图
				new Swiper(".swiper-container", {
					autoplay: 2000,
					speed: 2000, //控制速度，滑动时间
					loop: true, // 循环
					pagination: ".pagination", //分页器
					paginationClickable: true, //小圆点是否可点
				});


	$(function() {
	var index = 0;//当前图片的下标
	var perWidth = $("#agencyList li").eq(0).outerWidth(true);//每张图片的宽度
	function tab() {
		$("#agencyList").stop().animate({
			left:-index * perWidth
		},function() {
			if(index > $("#agencyList li").length/2-1) {
					$("#agencyList").css("left",0);
					index = 0;
			}
		})
	}
	function next() {
		index++;
		tab();
	}
	function prev() {
		index--;
//		console.log(index)
		if(index < 0) {
			index = $("#agencyList li").length/2-1;
			$("#agencyList").css("left",-(index+1) * perWidth);
		}
		
		tab();
	}
	//上一张
	$("#agencyleft").on("click",prev)
	
	//下一张
	$("#agencyright").on("click",next)

})
	
			</script>
			
	</body>

</html>
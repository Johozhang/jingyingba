$(function() {
	var i = 0;
	$(".selectAll .crossOut").on("click",function() {
		i++;
		if(i%2 != 0) {
			$(".selected").show();
		}else {
			$(".selected").hide();
		}
		
	})
	$(".orderList").find(".crossOut").on("click",function() {
		$(this).parents(".orderList").find(".selected").fadeToggle(1);
	})
	$(".orderMenu li").on("click",function() {
		$(this).addClass("active").siblings().removeClass("active");
	})
	$(".backPay").on("click",function( ){
		$(".refundBox").show(1);
	})
	$(".comment").on("click",function( ){
		$(".commentBox").show(1);
	})
	$(".starBar i").on("click",function() {
		$(".starBar i").removeClass("icon-gray");
		$(this).nextAll().addClass("icon-gray");
	})
	$(".refundCondition:nth-of-type(1)>.refundOptionBar").on("click",function() {
		$(".refundOption").fadeToggle(1);
	})
	var option = "";
	$(".refundOption li").on("click",function() {
		option = $(this).html();
		$(".refundOptionBar>span").html(option);
	})
	var index = 0;
	$(".orderMenu li").on("click",function() {
		index = $(this).index();
		if(index == 0) {
			$(".orderPage>div").show(1);
			$(".orderPage .refund").hide(1);
		}
		if(index == 1) {
			$(".orderPage>div").hide(1);
			$(".orderPage .opHead").show(1);
			$(".orderPage .waitPayList").show(1);
		}
		if(index == 2) {
			$(".orderPage>div").hide(1);
			$(".orderPage .opHead").show(1);
			$(".orderPage .alreadyPayList").show(1);
		}
		if(index == 3) {
			$(".orderPage>div").hide(1);
			$(".orderPage .opHead").show(1);
			$(".orderPage .waitCommentList").show(1);
		}
		if(index == 4) {
			$(".orderPage>div").hide(1);
			$(".orderPage .opHead").show(1);
			$(".orderPage .alreadyCompleteList").show(1);
		}
		if(index == 5) {
			$(".orderPage>div").hide(1);
			$(".orderPage .opHead").show(1);
			$(".orderPage .alreadyCancelList").show(1);
		}
	})
})
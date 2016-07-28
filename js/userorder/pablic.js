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
})
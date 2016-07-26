$(function() {
	var index = 0;
	var reg = 0;
	var val = 0;
	$(".input-group").find("input").on("focus",function() {
		
		$(this).parents(".input-group").find(".erroTips").hide();
		$(this).parents(".input-group").find(".tips").hide();
	})
	$(".input-group").find("input").on("blur",function() {
		reg = /^[0-9a-zA-Z]{6,32}$/
		val = $.trim($(this).val());
		index = $(this).index(".input-group input");
		$(this).parents(".input-group").find(".erroTips").show();
		$(this).parents(".input-group").find(".tips").hide();
		if($(this).val() != "" && reg.test(val)) {
			right(index);
		}else {
			$(this).parents(".input-group").find(".greenDot").hide();
		}
		$(".input-group").eq(1).find("input").on("blur",function() {
			if($(this).val()!=$(".input-group").eq(0).find("input").val() && reg.test(val)) {
				right(index);
			}else {
				$(this).parents(".input-group").find(".erroTips").show();
				$(this).parents(".input-group").find(".tips").hide();
				$(".input-group").eq(index).find(".greenDot").hide();
			}
		})
		$(".input-group").eq(2).find("input").on("blur",function() {
			if($(this).val() == $(".input-group").eq(1).find("input").val() && reg.test(val)) {
				right(index);
			}else {
				$(this).parents(".input-group").find(".erroTips").show();
				$(this).parents(".input-group").find(".tips").hide();
				$(".input-group").eq(index).find(".greenDot").hide();
			}
		})
	})
	
	function right(index) {
		$(".input-group").eq(index).find(".greenDot").show();
		$(".input-group").eq(index).find(".tips").hide();
		$(".input-group").eq(index).find(".erroTips").hide();
		}
})
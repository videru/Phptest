<!DOCTYPE HTML><!-- IE9에서 css:hover 셀렉터 적용 위함-->
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js">IE7_PNG_SUFFIX=".png";</script> 
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="category_ulli_triangle.css">
	<script>
	var hoveredCategoryBanner=1;
	var changeCategoryBannerFunction;
	$(document).ready(function(){
		$("#categorylist ul").mouseenter(function(){
			clearTimeout(changeCategoryBannerFunction);//ul로 마우스가 진입하면 자동 전환 멈춤, 사용자가 이 배너를 관심있어 하는 것이므로
			clearHoverClass();//기존 적용된 hover 클래스 제거
		});
		$("#categorylist ul li").mouseleave(function(){
			var index = $("#categorylist ul li").index(this);
			hoveredCategoryBanner= index+1;//자동전환은 마지막 누른것 부터 시작
			changeCategoryBanner();//마우스 나가면 자동 전환 시작
		});
		
		changeCategoryBanner();//자동 전환 시작 
		
	});
	
	function changeCategoryBanner(){//자동 전환 함수
		clearTimeout(changeCategoryBannerFunction);//기존 타이머 제거
		clearHoverClass();//기존 적용된 hover 클래스 제거
		
		var str = "#categorylist ul li"+":nth-child("+hoveredCategoryBanner.toString()+")";//nth-child는 1부터 시작임
		$(str).find(".category a").addClass("hoverstyleForA");
		$(str).find(".triangle-down").addClass("hoverstyleForTriangle-down");
		$(str).find(".categorybannerhover").addClass("hoverstyleForCategorybanner");
		$(str).find(".categorybannercommon").addClass("hoverstyleForCategorybanner");
		$(str).find(".categorybannerproductcommon").addClass("hoverstyleForCategorybanner");
		if(++hoveredCategoryBanner>3)hoveredCategoryBanner=1;
		
		changeCategoryBannerFunction = setTimeout(changeCategoryBanner, 3000);//시간에 맞추어 선택된 카테고리 변경
	}
	
	function clearHoverClass(){//기존 적용된 hover 클래스 제거
		$("#categorylist ul li .category a").removeClass("hoverstyleForA");
		$("#categorylist ul li .triangle-down").removeClass("hoverstyleForTriangle-down");
		$("#categorylist ul li .categorybannerhover").removeClass("hoverstyleForCategorybanner");
		$("#categorylist ul li .categorybannercommon").removeClass("hoverstyleForCategorybanner");
		$("#categorylist ul li .categorybannerproductcommon").removeClass("hoverstyleForCategorybanner");
	}
		
	</script>

</head>

<div id="maincontent">
	<div id="categorylist">
		<ul>
			<li>
				<div class="category"><a href="">태조</a></div>
				<div class="triangle-down"></div>
				<div class="categorybannerhover"><p class="categorybanner1 categorybannercommon ">태조실록</p><p class="categorybannerproduct1 categorybannerproductcommon">위화도 회군</p></div>
			</li>
			<li>
				<div class="category"><a href="">정종</a></div>
				<div class="triangle-down"></div>
				<div class="categorybannerhover"><p class="categorybanner2  categorybannercommon ">정종실록</p><p class="categorybannerproduct2 categorybannerproductcommon">1차왕자의 난</p></div>
			</li>
			<li>
				<div class="category"><a href="">태종</a></div>
				<div class="triangle-down"></div>
				<div class="categorybannerhover"><p class="categorybanner3 categorybannercommon ">태종실록</p><p class="categorybannerproduct3 categorybannerproductcommon">2차왕자의 난</p></div>
			</li>
		</ul>
	</div>
</div>







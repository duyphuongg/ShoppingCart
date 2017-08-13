<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<base href="{{asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
	<link rel="stylesheet" href="source/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
	<meta property="fb:admins" content="{1139085802904585}"/>

</head>
<body>

	@include('header')
	@yield('content') 
	@include('footer')

	<!-- include js files -->
	<script src="source/assets/dest/js/jquery.js"></script>
	<script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="source/assets/dest/vendors/animo/Animo.js"></script>
	<script src="source/assets/dest/vendors/dug/dug.js"></script>
	<script src="source/assets/dest/js/scripts.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="source/assets/dest/js/waypoints.min.js"></script>
	<script src="source/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="source/assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
	{{--Chat live facebook--}}
	<div id="fb-root"></div><script>$(document).ready(function() {var raido = $(".wrap").attr("data-toggle");if(raido==1){$(".vnk-tuvan").css("display","none");$(".x").click(function(){$(".wrap").slideToggle();$(".vnk-tuvan").slideToggle();});$(".vnk-tuvan").click(function(){$(".wrap").slideToggle();$(this).slideToggle();}); }else{$(".wrap").css("display","none");$(".x").click(function(){$(".wrap").slideToggle();$(".vnk-tuvan").slideToggle();});$(".vnk-tuvan").click(function(){$(".wrap").slideToggle();$(this).slideToggle();});}}) (function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&&appId=126586364523772";fjs.parentNode.insertBefore(js, fjs);}(document, "script", "facebook-jssdk"));</script><style>.wrap{position:fixed; width:300px; height: 400px; z-index:9999999; right:0px; bottom:0px;}.x{font-family: arial, helvetica;background: rgba(78,86,101,0.8) none repeat scroll 0 0;font-size:14px;font-weight:bold;color: #fff;display: inline-block;height: 25px;line-height: 25px;position: absolute;right: 0;text-align: center;top: -19px;width: 25px;z-index: 99999999;}.x:hover{cursor: pointer;}.pxem{text-align:left;height:20px;margin-bottom: 0;margin-top: 0;background: #34495E;width:100%;bottom: 0;display: block;left: 0px;position: absolute;z-index: 999999999;border-left: 1px solid #fff;}.pxem a.axem{color: #fff;font-family: arial,helvetica;font-size: 12px;line-height: 23px;padding-left: 5px;text-decoration: none;}.pxem a.axem:hover{text-decoration: underline;}.alogo{position: absolute;bottom: 0;right: 0px;z-index: 999999999999;width: 75px;height: 20px;display: inline-block;background:#34495E;border-left:2px solid #2c3e50;padding-right: 0px;padding-left: 5px}.vnk-tuvan{position:fixed;width: 300px;background:#34495E;z-index:99999999;right:0px;bottom:0px;  border-style: solid solid none;border-width: 1px 1px 0; border-color: #2c3e50}.vnk-tuvan p{color: #fff;font-size: 15px;margin: 0;padding: 0 13px; text-align: left;}.vnk-tuvan p a{color: #fff;font-size: 15px;padding: 5px 0px 7px;margin: 0;display:inline-block;font-family: arial, helvetica;text-decoration: none;}.vnk-tuvan p a:hover{text-decoration: underline;cursor: pointer;}.vnk-tuvan p img {float: right;margin-top: 10px;} </style><div data-toggle="0" class="wrap" style="position:fixed; width:280px; height: 320px; "><span class="x" style="">X</span><div class="fb-page" data-adapt-container-width="true" data-height="320" data-hide-cover="false" data-href="https://www.facebook.com/Hi-Tech-Shop-1139085802904585/" data-show-facepile="true" data-show-posts="false" data-small-header="false" data-tabs="messages" data-width="280" style="position:relative; z-index:9999999; right:0px; bottom:21px;border-left: 1px solid #fff;border-top: 1px solid #fff;"></div><p class="pxem" style=""><a class="axem" style="" href="https://www.facebook.com/Hi-Tech-Shop-1139085802904585/" target="_blank">Hi-Tech Shop Fanpage</a></p></div><div class="vnk-tuvan" style="width: 278px;" ><p style=" "><a style="">Bạn cần tư vấn ?</a><img src="https://wordpress.vnkings.com/wp-content/themes/wordpress-vnkings/images/supprt.png"></p></div>

	{{--comment facebook--}}
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>

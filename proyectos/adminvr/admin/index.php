<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
</head>

<body>

<div id="header-wrapper">
  <a class='toggleMenu ripple' href='javascript:;'><i class='fa fa-bars'></i></a>
  <h1>ADMIN CMS</h1>
</div>
<nav class='dropdowns' itemprop='mainEntity' itemscope='itemscope' itemtype='http://schema.org/SiteNavigationElement'>
<div class='wrapper'>
<div class='profilemenu'>
<img alt='Admin' src='http://hardikmanktala.com/projects/themes/flatter/demo/assets/images/people/people-1.jpg' title='Admin'/>
<h3>Nama Admin</h3>
<a class='ripple' href='javascript:;' id='info2'><i class='fa fa-caret-down'></i></a>
<p>emailkamu@gmail.com</p>
<ul id='nav-menu1'>
<li><a class='waves-effect' href='#' itemprop='url'><span itemprop='name'>Cerrar Sesión</span></a></li>
</ul>
</div>
<ul class='nav nav-menu2'>
<li><a class='waves-effect' href='#' itemprop='url' title='Masign Grid'><span itemprop='name'><i class='fa fa-home'></i> Inicio</span></a></li>
<li><a class='waves-effect' href='#' itemprop='url' title='News'><span itemprop='name'><i class='fa fa-newspaper-o'></i> Catalogos</span></a></li>
<h2>Submenu</h2>
<li><a class='waves-effect' href='#' itemprop='url' title='Settings'><span itemprop='name'><i class='fa fa-gear'></i> Settings</span></a></li>
<li><a class='waves-effect' href='#' itemprop='url' title='My File'><span itemprop='name'><i class='fa fa-file'></i> My File</span></a></li>
<li><a class='waves-effect' href='#' itemprop='url' title='Upload'><span itemprop='name'><i class='fa fa-cloud-upload'></i> Upload</span></a></li>
</ul>
</div>
</nav>
<div class='darkshadow'></div>
<div class="largebanner"></div>
<br><br>
<center>
  <h2>Click <i class="fa fa-bars"></i> Para mostrar navegación</h2>
  <br><br>


</body>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){$(".toggleMenu").click(function(){$(".dropdowns").toggleClass("shows");});});
$(document).ready(function(){$(".darkshadow").click(function(){$(".dropdowns").removeClass("shows");});});
$(document).ready(function(){$(".darkshadow").click(function(){$(".darkshadow").removeClass("shows");});});
$(document).ready(function(){$(".toggleMenu").click(function(){$(".darkshadow").toggleClass("shows");});});
$(document).ready(function(){$("#info2").click(function(){$("#nav-menu1").toggleClass("shows");});});
var Script=function(){jQuery('.nav-menu2 .sub-menu > a').click(function(){var last=jQuery('.sub-menu.open',$('.nav-menu2'));last.removeClass("open");jQuery('.dropdown').addClass("open");jQuery('.dropdown',last).removeClass("open");jQuery('.sub',last).slideUp(300);var sub=jQuery(this).next();if(sub.is(":visible")){jQuery('.dropdown',jQuery(this)).removeClass("open");jQuery(this).parent().removeClass("open");sub.slideUp(300)}else{jQuery('.dropdown',jQuery(this)).addClass("open");jQuery(this).parent().addClass("open");sub.slideDown(300)}var o=($(this).offset());diff=300-o.top;if(diff>0)$(".nav-menu2").scrollTo("-="+Math.abs(diff),500);else $(".nav-menu2").scrollTo("+="+Math.abs(diff),500)})}();
$(function() {
    var ink, d, x, y;
    $(".ripple").click(function(e) {
        if ($(this).find(".ink").length === 0) {
            $(this).prepend("<span class='ink'></span>");
        }
        ink = $(this).find(".ink");
        ink.removeClass("animate");
        if (!ink.height() && !ink.width()) {
            d = Math.max($(this).outerWidth(), $(this).outerHeight());
            ink.css({
                height: d,
                width: d
            });
        }
        x = e.pageX - $(this).offset().left - ink.width() / 2;
        y = e.pageY - $(this).offset().top - ink.height() / 2;
        ink.css({
            top: y + 'px',
            left: x + 'px'
        }).addClass("animate");
    });
});
</script>
</html>
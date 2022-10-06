<style>
	ul{
list-style: none;
}
a{
text-decoration: none;
color:#fff;
}
.menu{
background: #2c3e50;
position: fixed;
left: -285px; /* start off behind the scenes */
width: 285px;
height: 100%;
color:#fff;
}
.menu0{
width: 100%;
}
.dropdownlink {
cursor: pointer;
display: block;
padding: 3px 0px 3px 20px;
font-family: 'Open Sans', sans-serif;
font-size: 18px;
line-height: 45px;
color: #fff;
position: relative;
}
.dropdownlink:hover{
background: #415161;
}
.dropdownlink i{
font-size:18px;
padding-right:15px;
}
.submenuItems{
background-color: #2574A9;
line-height: 45px;
}
.submenuItems li{
padding-left:15px;
border:1px solid #216898;
}
.submenuItems li:last-child{
border: none;
}
.submenuItems li:hover{
background-color: #6BB9F0;
}
.submenuItems a{
display:block;
padding: 5px 0px 5px 45px;
}
.icon-close {
cursor: pointer;
padding-left: 10px;
padding-top: 10px;
}
.icon-menu {
width: 80px;
color: #fff;
cursor: pointer;
font-size: 16px;
padding-bottom: 25px;
padding-left: 25px;
padding-top: 25px;
text-decoration: none;
text-transform: uppercase;
}
.icon-menu i {
margin-right: 5px;
}

.kotak {
background:blueviolet;
height: 100vh;}
</style>
<div class="menu">
<!-- Menu icon -->
<div class="icon-close">
X
</div>
<!-- Menu -->
<ul class="menu0">
<li>
<div class="dropdownlink">
<a href="#">menu 1</a>
</div>
</li>
<li>
<div class="dropdownlink">
<a href="#">menu 2</a>
</div>
</li>
<li class="portfolio">
<div class="dropdownlink">
menu 3 >
</div>
<ul class="submenuItems">
<li><a href="#">sub menu 1</a></li>
<li><a href="#">sub menu 2</a></li>
</ul>
</li>
</ul>
</div>
<div class="kotak">
<div class="icon-menu">
Menu
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>
<script type="text/javascript">
	var main = function() {
$('.icon-menu').click(function() {
$('.menu').animate({
left: "0px"
}, 200);
$('body').animate({
left: "285px"
}, 200);
$('.submenuItems').hide();
});
$('.icon-close').click(function() {
$('.menu').animate({
left: "-285px"
}, 200);
$('body').animate({
left: "0px"
}, 200);
});
$('.portfolio').click(function(){
$('.submenuItems').toggle('slow');
$('.fa-plus').toggleClass('fa-minus');
});
};
$(document).ready(main);


</script>
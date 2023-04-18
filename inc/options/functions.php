<?php 
if (!defined('ABSPATH')) {die('-1');}

// 打印版权
function mjbanquan() {?>
<script>console.log("\n %c MJ美化插件——提供主题美化服务  %c http://csxandlsy.xyz/mjplu \n\n",
"color: #fadfa3; background: black; padding:5px 0;", "background: #fadfa3; padding: 5px 0;")</script>
<?php }

//底部波浪
function zibll_Add_ons_footerbolang() { if(!is_page('user-sign')){?>
<div class="wiiuii_layout"><svg class="editorial"xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"viewBox="0 24 150 28"preserveAspectRatio="none"><defs><path id="gentle-wave"d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"/></defs><g class="parallax"><use xlink:href="#gentle-wave"x="50"y="0"fill="#4579e2"/><use xlink:href="#gentle-wave"x="50"y="3"fill="#3461c1"/><use xlink:href="#gentle-wave"x="50"y="6"fill="#2d55aa"/></g></svg></div><style>.parallax>use{animation:move-forever 12s linear infinite}.parallax>use:nth-child(1){animation-delay:-2s}.parallax>use:nth-child(2){animation-delay:-2s;animation-duration:5s}.parallax>use:nth-child(3){animation-delay:-4s;animation-duration:3s}@keyframes move-forever{0%{transform:translate(-90px,0%)}100%{transform:translate(85px,0%)}}.wiiuii_layout{width:100%;height:40px;position:relative;overflow:hidden;z-index:1;background:var(--footer-bg)}.editorial{display:block;width:100%;height:40px;margin:0}</style>
<?php }}
//文章随机彩色标签
function zibll_Add_ons_hook_colorfultag_css() {?>
<style>.article-tags{margin-bottom: 10px}.article-tags a{padding: 4px 10px;background-color: #19B5FE;color: white;font-size: 12px;line-height: 16px;font-weight: 400;margin: 0 5px 5px 0;border-radius: 2px;display: inline-block}.article-tags a:nth-child(5n){background-color: #4A4A4A;color: #FFF}.article-tags a:nth-child(5n+1){background-color: #ff5e5c;color: #FFF}.article-tags a:nth-child(5n+2){background-color: #ffbb50;color: #FFF}.article-tags a:nth-child(5n+3){background-color: #1ac756;color: #FFF}.article-tags a:nth-child(5n+4){background-color: #19B5FE;color: #FFF}.article-tags a:hover{background-color: #1B1B1B;color: #FFF}</style>
<?php } 
//彩色滚动条
function zibll_Add_ons_hook_colorfulscrollbar_css() {?>
<style>::-webkit-scrollbar{width:6px;height:1px}::-webkit-scrollbar-thumb{background-color:#07e6f6;background-image:-webkit-linear-gradient(45deg,rgb(236,174,6)25%,transparent 25%,transparent 50%,rgb(10,77,246)50%,rgb(241,9,28)75%,transparent 75%,transparent)}::-webkit-scrollbar-track{background:white;border-radius:20px}</style>
<?php }
//logo扫光
function zibll_Add_ons_hook_logoflash_css() {?>
<style>.navbar-brand{position:relative;overflow:hidden;margin:0px 0 0 0px}.navbar-brand:before{content:"";position:absolute;left:-665px;top:-460px;width:200px;height:15px;background-color:rgba(255,255,255,.5);-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:searchLights 10s ease-in 0s infinite;-o-animation:searchLights 6s ease-in 0s infinite;animation:searchLights 10s ease-in 0s infinite}@-moz-keyframes searchLights{50%{left:-120px;top:0}65%{left:350px;top:0px}}@keyframes searchLights{40%{left:-120px;top:0}60%{left:350px;top:0px}80%{left:-120px;top:0px}}</style>
<?php }
//导航栏字体加粗
function zibll_Add_ons_hook_navbarb_css() {?>
<style>ul.nav {font-weight: 650;}</style>
<?php }
//头像呼吸光环
function zibll_Add_ons_hook_avatar_css() {?>
<style>.avatar{border-radius:50%;animation:light 4s ease-in-out infinite !important;transition:0.5s;@keyframes light{0%{box-shadow:0 0 4px#f00}25%{box-shadow:0 0 16px#0f0}50%{box-shadow:0 0 4px#00f}75%{box-shadow:0 0 16px#0f0}100%{box-shadow:0 0 4px#f00}}}.avatar:hover{transform:scale(1.15)rotate(720deg)}@keyframes light{0%{box-shadow:0 0 4px#f00}25%{box-shadow:0 0 16px#0f0}50%{box-shadow:0 0 4px#00f}75%{box-shadow:0 0 16px#0f0}100%{box-shadow:0 0 4px#f00}}</style>
<?php }
//首页文章列表悬停上浮
function zibll_Add_ons_hook_posts_item_css() {?>
<style>.tab-content .posts-item:not(article){transition: all 0.3s;}.tab-content .posts-item:not(article):hover{transform: translateY(-10px); box-shadow: 0 8px 10px rgba(53, 231, 8, 0.35);}</style>
<?php }
//幻灯片指示器样式优化
function zibll_Add_ons_hook_swiper_css() {?>
<style>.swiper-button-next, .swiper-button-prev{height: 70px !important;}.swiper-button-prev{border-top-right-radius: 8px;border-bottom-right-radius: 8px;}.swiper-button-next{border-top-left-radius: 8px;border-bottom-left-radius: 8px;}</style>
<?php }
//fps
function zibll_Add_ons_hook_fps_js() {?>
<script src="/wp-content/plugins/zibll_Add_ons/js/fps.js"></script>
<?php }
//文章内图片鼠标移动到图片外边框自动发光
function zibll_Add_ons_hook_post_page_img_shadow_css() {?>
<style>.wp-posts-content img:hover {box-shadow:0px 0px 8px #63B8FF;}</style>
<?php }
//子比隐藏首页列表文章发布时间
function zibll_Add_ons_hook_zibll_post_public_date_css() {?>
<style>span.icon-circle{display:none;}</style>
<?php }
//纪念日全局灰色主题
function zibll_Add_ons_hook_site_gray_css() {?>
<style>html{-webkit-filter: grayscale(100%);filter: grayscale(100%);}</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao_css() {?>
<style>body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/shubiao1.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/shubiao2.png), pointer;}</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao2_css() {?>
<style>body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr1.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr2.png), pointer;}</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao3_css() {?>
<style>body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr3.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr4.png), pointer;}</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao4_css() {?>
<style>body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr5.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr6.png), pointer;}</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao5_css() {?>
<style>body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr7.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr8.png), pointer;}</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao6_css() {?>
<style>body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr9.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr10.png), pointer;}</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao7_css() {?>
<style>body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr11.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr12.png), pointer;}</style>
<?php }
//日间、夜间模式切换提示
function zibll_Add_ons_hook_qiehuan() {?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.6.8/layui.min.js"></script>
<?php }
//日间、夜间模式切换提示
function zibll_Add_ons_hook_qiehuan_js() {?>
<script>$(".toggle-theme").click(function() {var toggleThemeText = "当前为日间模式";if (!$("body").hasClass('dark-theme')) {toggleThemeText ="当前为夜间模式";}layer.msg(toggleThemeText, {time: 2000,anim: 1});});</script>
<?php }
//复制提示1
function zibll_Add_ons_hook_fuzhitishi1() {?>
<script src="/wp-content/plugins/zibll_Add_ons/js/copyone.js"></script>
<script>document.body.oncopy = function(){Swal.fire({allowOutsideClick:false,type:'success',title: '复制成功,如转载请注明出处！',showConfirmButton: false,timer: 2000});};</script>
<?php }
//复制提示2
function zibll_Add_ons_hook_fuzhitishi2() {?>
<script src="https://cdn.bootcss.com/layer/2.3/layer.js"></script>
<script>document.body.oncopy = function() {layer.msg('<p style="font-weight: 700;">复制成功，若要转载请务必保留原文链接！</p>', function(){});};</script>
<?php }
//复制提示3
function zibll_Add_ons_hook_fuzhitishi3() {?>
<script src="/wp-content/plugins/zibll_Add_ons/js/copythree.js"></script>
<link rel="stylesheet" href="/wp-content/plugins/zibll_Add_ons/css/copythree.css" />
<script>function copy_remind(){toastr.success("撰文不易，若要转载请务必保留原文链接，谢谢！", "复制成功！");  clear_toastr(1600);   function clear_toastr(time){setTimeout(function(){toastr.clear();}, time);  }}document.addEventListener("copy",function(e){  if(window.getSelection(0).toString()){ copy_remind();} else{toastr.info("当前未选择复制的内容！", "温馨提示");}});</script>
<?php }
//复制提示4
function zibll_Add_ons_hook_fuzhitishi4() {?>
<script src="/wp-content/plugins/zibll_Add_ons/js/copyvue.js"></script>
<script src="/wp-content/plugins/zibll_Add_ons/js/copyfour.js"></script>
<link rel="stylesheet" href="/wp-content/plugins/zibll_Add_ons/css/copyfour.css">
<script>document.addEventListener("copy",function(e){ new Vue({data:function(){this.$notify({title:"复制成功！",message:"若要转载请保留原文链接！mua~",position: 'bottom-right', offset: 50,showClose: false,type:"success"});return{visible:false}}})})</script>
<?php }
//禁用搜索功能
function zibll_Add_ons_hook_nosearch_js() {?>
<script>$(document).ready(function(){$("li.relative").css("display","none")})</script>
<?php }
//禁用右键
function zibll_Add_ons_hook_noyou_js() {?>
<script>document.oncontextmenu = function (event){if(window.event){event = window.event;}try{var the = event.srcElement;if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){return false;}return true;}catch (e){return false;}}</script>
<?php }
//音乐播放器
function zibll_Add_ons_hook_video_js() {?>
<script src="https://player.lzti.com/api/player/demo" id="myhk" key="demo" skin="player" lr="l" m="1"></script>
<?php }
//禁用图片拖放
function zibll_Add_ons_hook_notuofang_js() {?>
<script>document.ondragstart = function() {return false};</script>
<?php }
//禁用F12键
function zibll_Add_ons_hook_noft_js() {?>
<script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>
<script src="https://unpkg.com/element-ui@2.15.6/lib/index.js"></script>
<link rel="stylesheet" href="https://unpkg.com/element-ui@2.15.6/lib/theme-chalk/index.css">
<script>document.onkeydown = function () {
if (window.event && window.event.keyCode == 123) {
  event.keyCode = 0;
  event.returnValue = false;
    new Vue({
            data:function(){
                this.$notify({
                    title:"嘿！别瞎按",
                    message:"<?php echo MJ('nofttext')?>",
                    position: 'bottom-right',
                    offset: 50,
                    showClose: false,
                    type:"error"
                });
                return{visible:false}
            }
        })
  return false;}};</script>
<?php }
//禁用选中
function zibll_Add_ons_hook_nofta_js() {?>
<script>document.onselectstart = function (event){if(window.event){event = window.event;}try{var the = event.srcElement;if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){return false;}return true;} catch (e) {return false;}}</script>
<?php }
//禁用F12键
function zibll_Add_ons_hook_noftb_js() {?>
<script>document.onkeydown = function (){if (event.ctrlKey && window.event.keyCode==83){ return false; }  }</script>
<?php }
//鼠标右键菜单
function zibll_Add_ons_hook_noft2() {?>
<style>a {text-decoration: none;}div.usercm{background-repeat:no-repeat;background-position:center center;background-size:cover;background-color:#fff;font-size:13px!important;width:130px;-moz-box-shadow:1px 1px 3px rgba(0,0,0,.3);box-shadow:0px 0px 15px #333;position:absolute;display:none;z-index:10000;opacity:0.9; border-radius: 8px;}div.usercm ul{list-style-type:none;list-style-position:outside;margin:0px;padding:0px;display:block}div.usercm ul li{margin:0px;padding:0px;line-height:35px;}div.usercm ul li a{color:#666;padding:0 15px;display:block}div.usercm ul li a:hover{color:#fff;background:rgba(170,222,18,0.88)}div.usercm ul li a i{margin-right:10px}a.disabled{color:#c8c8c8!important;cursor:not-allowed}a.disabled:hover{background-color:rgba(255,11,11,0)!important}div.usercm{background:#fff !important;}</style><div class="usercm" style="left: 199px; top: 5px; display: none;"><ul><li><a href="/"><i class="fa fa-home fa-fw"></i><span>首页</span></a></li><li><a href="javascript:void(0);" onclick="getSelect();"><i class="fa fa-copy fa-fw"></i><span>复制</span></a></li><li><a href="javascript:history.go(1);"><i class="fa fa-arrow-right fa-fw"></i><span>前进</span></a></li><li><a href="javascript:history.go(-1);"><i class="fa fa-arrow-left fa-fw"></i><span>后退</span></a></li><li style="border-bottom:1px solid gray"><a href="javascript:window.location.reload();"><i class="fa fa-refresh fa-fw"></i><span>刷新</span></a></li><li><a href="javascript:void(0);"  onclick="baiduSearch();"><i class="fa fa-paw fa-fw"></i><span>百度</span></a></li><li><a href="javascript:void(0);" onclick="googleSearch();"><i class="fa fa-google fa-fw"></i><span>谷歌</span></a></li><li style="border-bottom:1px solid gray"><a target="_blank" href="<?php echo MJ('noft4') ?>"><i class="fa fa-refresh fa-fw"></i><span><?php echo MJ('noft3') ?></span></a></li></ul></div><script>(function(a) {a.extend({mouseMoveShow: function(b) {var d = 0,c = 0,h = 0,k = 0,e = 0,f = 0;a(window).mousemove(function(g) {d = a(window).width();c = a(window).height();h = g.clientX;k = g.clientY;e = g.pageX;f = g.pageY;h + a(b).width() >= d && (e = e - a(b).width() - 5);k + a(b).height() >= c && (f = f - a(b).height() - 5);a("html").on({contextmenu: function(c) {3 == c.which && a(b).css({left: e,top: f}).show()},click: function() {a(b).hide()}})})},disabledContextMenu: function() {window.oncontextmenu = function() {return !1}}})})(jQuery);function getSelect() {"" == (window.getSelection ? window.getSelection() : document.selection.createRange().text) ? layer.msg("请选择需要百度的内容！") : document.execCommand("Copy")}function baiduSearch() {var a = window.getSelection ? window.getSelection() : document.selection.createRange().text;"" == a ? layer.msg("请选择需要百度的内容！") : window.open("https://www.baidu.com/s?wd=" + a)}function googleSearch() {var a = window.getSelection ? window.getSelection() : document.selection.createRange().text;"" == a ? layer.msg("请选择需要谷歌的内容！") : window.open("https://www.google.com/search?q=" + a)}$(function() {for (var a = navigator.userAgent, b = "Android;iPhone;SymbianOS;Windows Phone;iPad;iPod".split(";"), d = !0, c = 0; c < b.length; c++) if (0 < a.indexOf(b[c])) {d = !1;break}d && ($.mouseMoveShow(".usercm"), $.disabledContextMenu())});</script>
<?php }
//复制有地址
function zibll_Add_ons_hook_noft1_js() {?>
<script src="/wp-content/plugins/zibll_Add_ons/js/copysite.js"></script><script>$(document).on("copy", function(e) {var selected = window.getSelection();var selectedText = selected.toString().replace(/\n/g, "<br>");var copyFooter ="<br>-----------------------------<br>" +"" +"【网站名称】：<?php bloginfo('name'); ?><br> 【文章地址】：" +document.location.href ;if (document.location.pathname === "/") {var copyFooter ="<br>-----------------------------------------<br>"  +document.location.href ;}var msgContent ='<span style="font-weight: 700;margin: 0 !important;">【<?php bloginfo('name'); ?>】<br>复制成功，若要转载请务必保留原文链接</span>' + copyFooter;layer.msg(msgContent, {time: 2000,shift: 2,shade: 0.3,skin: "wiiuii-layer-mode"});var copyHolder = $("<div>", {id: "temp",html: selectedText + copyFooter,style: {position: "absolute",left: "-99999px"}});$("body").append(copyHolder);selected.selectAllChildren(copyHolder[0]);window.setTimeout(function() {copyHolder.remove();}, 0);});</script>
<?php }
//樱花
function zibll_Add_ons_hook_yinghua() {?>
<script src="/wp-content/plugins/zibll_Add_ons/js/yinghua.js"></script>
<?php }
//枫叶
function zibll_Add_ons_hook_fengye() {?>
<script src="/wp-content/plugins/zibll_Add_ons/js/fengye.js"></script>
<?php }
//元旦
function zibll_Add_ons_hook_chunjie() {?>
<link rel="stylesheet" href="/wp-content/plugins/zibll_Add_ons/css/yuandan.css">
<script src="/wp-content/plugins/zibll_Add_ons/js/yuandan.js"></script>
<?php }
//顶部进度条
function zibll_Add_ons_dingbu_jindutiao(){    ?>
<style>#percentageCounter{position:fixed; left:0; top:0; height:3px; z-index:99999; background-image: linear-gradient(to right, #339933,#FF6666);border-radius:5px;}</style>
<script>$('head').before('<div id="percentageCounter"></div>');$(window).scroll(function() {var a = $(window).scrollTop(),c = $(document).height(),b = $(window).height();scrollPercent = a / (c - b) * 100;scrollPercent = scrollPercent.toFixed(1);$("#percentageCounter").css({width: scrollPercent + "%"});}).trigger("scroll");</script>
<?php }
//首页文章列表悬停上浮2
function zibll_Add_ons_hook_posts_item2_css() {if(is_home()){?>
<style>.tab-content .posts-item:not(article):hover{opacity: 1;z-index: 99;border-radius: 20px;transform: translateY(-5px);box-shadow: 0 3px 20px rgba(0, 0, 0, .25);animation: index-link-active 1s cubic-bezier(0.315, 0.605, 0.375, 0.925) forwards;}@keyframes index-link-active {0%{transform: perspective(2000px) rotateX(0) rotateY(0) translateZ(0);}16%{transform:perspective(2000px) rotateX(10deg) rotateY(5deg) translateZ(32px);}100%{transform: perspective(2000px) rotateX(0) rotateY(0) translateZ(65px);}}</style>
<?php }}
//文章阴影
function zibll_Add_ons_article_box_shadow(){if(is_single ()){?>
<style>.article{border-radius:var(--main-radius);box-shadow: 1px 1px 3px 3px rgba(53, 231, 8, 0.35);-moz-box-shadow: 1px 1px 3px 3px rgba(53, 231, 8, 0.35);}.article:hover{box-shadow: 1px 1px 5px 5px rgba(53, 231, 8, 0.35); -moz-box-shadow: 1px 1px 5px 5px rgba(53, 231, 8, 0.35);}    </style>
<?php }}
//https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/moonbridge.woff2
//cdn加速字体的速度是普通引用字体的两到三倍
//记录字体数据
//序号  大小  加载时间  评分       是否采用
// 1     1.2mb  700ms     95         √
// 2     2.2mb            80         √
// 3     1.1mb    5s      90         √
// 4     1.8mb            70
// 5     3.2mb            60
// 6     2.1mb    10s     95         √
// 7     1.4mb    10s     93         √
// 8     1.4mb   300ms    92         √
// 9     3.1mb            50         
///10    3.2mb    14s     90         √
//字体1
function zibll_Add_ons_hook_ziti1_css() {?>
<style>@font-face{font-family: 'zti';src: 
url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont1.woff2');
/*url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont2.woff');*/
/*url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont3.otf');*/
/*url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont4.otf');*/
/*url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont5.woff');*/
/*url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont6.woff');*/
/*url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont7.woff');*/
/*url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont8.woff');*/
/*url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont9.woff');*/
/*url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont10.woff');*/
}
body{font-family:'zti' !important;}</style>
<?php }
//字体2
function zibll_Add_ons_hook_ziti2_css() {?>
<style>@font-face{font-family: 'zti';src: 
url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont2.woff');}body{font-family:'zti' !important;}</style>
<?php }
//字体3
function zibll_Add_ons_hook_ziti3_css() {?>
<style>@font-face{font-family: 'zti';src: 
url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont3.otf');}body{font-family:'zti' !important;}</style>
<?php }
//字体4
function zibll_Add_ons_hook_ziti4_css() {?>
<style>@font-face{font-family: 'zti';src: 
url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont6.woff');}body{font-family:'zti' !important;}</style>
<?php }
//字体5
function zibll_Add_ons_hook_ziti5_css() {?>
<style>@font-face{font-family: 'zti';src: 
url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont7.woff');}body{font-family:'zti' !important;}</style>
<?php }
//字体6
function zibll_Add_ons_hook_ziti6_css() {?>
<style>@font-face{font-family: 'zti';src: 
url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont10.woff');}body{font-family:'zti' !important;}</style>
<?php }
//字体6
function zibll_Add_ons_hook_ziti66_css() {?>
<style>@font-face{font-family: 'zti';src: 
url(<?php echo MJ('ziti666') ?>);
}
body{font-family:'zti' !important;}</style>
<?php }
//点击爆炸
function zibll_Add_ons_baozha() {?>
<canvas class="baozha" style="position:fixed;left:0;top:0;z-index:99999999;pointer-events:none;"></canvas>
<script src="/wp-content/plugins/zibll_Add_ons/js/baozha.js"></script>
<?php }
//点击爆炸
function zibll_Add_ons_baozha1() {?>
<script src="/wp-content/plugins/zibll_Add_ons/js/baozha1.js"></script>
<?php }
//社会主义核心价值观
function zibll_Add_ons_aiguo_shehuizhuyihexinjiazhiguan(){?>
<script >var a_idx = 0;jQuery(document).ready(function($) {$("body").click(function(e) {var a = new Array("🍉富强🍉","🎉虎虎生威🎉","🍉民主🍉","🍉文明🍉","🧧恭喜发财🧧","🎉金虎送福🎉","🍉和谐🍉","🍉自由🍉","🍉平等🍉","🎉龙腾虎跃🎉","关注关注🙈","🍉公正🍉","🍉法治🍉","🍉欢迎光临🍉","🍉爱国🍉","🍉诚信🍉","🍉友善🍉");var b = new Array("red","blue","yellow","green","pink","blue","orange");var $i = $("<span/>").text(a[a_idx]);a_idx = (a_idx + 1) % a.length;b_idx = (a_idx+1)%7;var x = e.pageX,y = e.pageY;$i.css({"z-index": 9999,"top": y - 20,"left": x,"position": "absolute","font-weight": "bold","color": b[b_idx]});$("body").append($i);$i.animate({"top": y - 180,"opacity": 0},1500,function() {$i.remove();});});});</script>
<?php }
//社会主义核心价值观
function zibll_Add_ons_aiguo_shehuizhuyihexinjiazhiguan1(){?>
 <script>"use strict";$(function(){function t(t,i){if(!(t instanceof i))throw new TypeError("Cannot call a class as a function")}var i=Object.assign||function(t){for(var i=1;i<arguments.length;i++){var n=arguments[i];for(var e in n)Object.prototype.hasOwnProperty.call(n,e)&&(t[e]=n[e])}return t},n=function(){function t(t,i){for(var n=0;n<i.length;n++){var e=i[n];e.enumerable=e.enumerable||!1,e.configurable=!0,"value"in e&&(e.writable=!0),Object.defineProperty(t,e.key,e)}}return function(i,n,e){return n&&t(i.prototype,n),e&&t(i,e),i}}(),e=function(){function e(n){var o=n.origin,r=n.speed,s=n.color,a=n.angle,h=n.context;t(this,e),this.origin=o,this.position=i({},this.origin),this.color=s,this.speed=r,this.angle=a,this.context=h,this.renderCount=0}return n(e,[{key:"draw",value:function(){this.context.fillStyle=this.color,this.context.beginPath(),this.context.arc(this.position.x,this.position.y,2,0,2*Math.PI),this.context.fill()}},{key:"move",value:function(){this.position.x=Math.sin(this.angle)*this.speed+this.position.x,this.position.y=Math.cos(this.angle)*this.speed+this.position.y+.3*this.renderCount,this.renderCount++}}]),e}(),o=function(){function i(n){var e=n.origin,o=n.context,r=n.circleCount,s=void 0===r?10:r,a=n.area;t(this,i),this.origin=e,this.context=o,this.circleCount=s,this.area=a,this.stop=!1,this.circles=[]}return n(i,[{key:"randomArray",value:function(t){var i=t.length;return t[Math.floor(i*Math.random())]}},{key:"randomColor",value:function(){var t=["8","9","A","B","C","D","E","F"];return"#"+this.randomArray(t)+this.randomArray(t)+this.randomArray(t)+this.randomArray(t)+this.randomArray(t)+this.randomArray(t)}},{key:"randomRange",value:function(t,i){return(i-t)*Math.random()+t}},{key:"init",value:function(){for(var t=0;t<this.circleCount;t++){var i=new e({context:this.context,origin:this.origin,color:this.randomColor(),angle:this.randomRange(Math.PI-1,Math.PI+1),speed:this.randomRange(1,6)});this.circles.push(i)}}},{key:"move",value:function(){var t=this;this.circles.forEach(function(i,n){if(i.position.x>t.area.width||i.position.y>t.area.height)return t.circles.splice(n,1);i.move()}),0==this.circles.length&&(this.stop=!0)}},{key:"draw",value:function(){this.circles.forEach(function(t){return t.draw()})}}]),i}();(new(function(){function i(){t(this,i),this.computerCanvas=document.createElement("canvas"),this.renderCanvas=document.createElement("canvas"),this.computerContext=this.computerCanvas.getContext("2d"),this.renderContext=this.renderCanvas.getContext("2d"),this.globalWidth=window.innerWidth,this.globalHeight=window.innerHeight,this.booms=[],this.running=!1}return n(i,[{key:"handleMouseDown",value:function(t){var i=new o({origin:{x:t.clientX,y:t.clientY},context:this.computerContext,area:{width:this.globalWidth,height:this.globalHeight}});i.init(),this.booms.push(i),this.running||this.run()}},{key:"handlePageHide",value:function(){this.booms=[],this.running=!1}},{key:"init",value:function(){var t=this.renderCanvas.style;t.position="fixed",t.top=t.left=0,t.zIndex="999999999999999999999999999999999999999999",t.pointerEvents="none",t.width=this.renderCanvas.width=this.computerCanvas.width=this.globalWidth,t.height=this.renderCanvas.height=this.computerCanvas.height=this.globalHeight,document.body.append(this.renderCanvas),window.addEventListener("mousedown",this.handleMouseDown.bind(this)),window.addEventListener("pagehide",this.handlePageHide.bind(this))}},{key:"run",value:function(){var t=this;if(this.running=!0,0==this.booms.length)return this.running=!1;requestAnimationFrame(this.run.bind(this)),this.computerContext.clearRect(0,0,this.globalWidth,this.globalHeight),this.renderContext.clearRect(0,0,this.globalWidth,this.globalHeight),this.booms.forEach(function(i,n){if(i.stop)return t.booms.splice(n,1);i.move(),i.draw()}),this.renderContext.drawImage(this.computerCanvas,0,0,this.globalWidth,this.globalHeight)}}]),i}())).init()});
 </script>
<?php }
//鼠标跟随1
function zibll_Add_ons_mouse_cursor() {?>
<div class="mouse-cursor cursor-outer"></div><div class="mouse-cursor cursor-inner"></div>
<script src="/wp-content/plugins/zibll_Add_ons/js/shubiao.js"></script>
<style>.mouse-cursor {position: fixed;left: 0;top: 0;pointer-events: none;border-radius: 50%;-webkit-transform: translateZ(0);transform: translateZ(0);visibility: hidden;}.cursor-inner {margin-left: -3px;margin-top: -3px;width: 6px;height: 6px;z-index: 10000001;background: #123eed;-webkit-transition: width .3s ease-in-out,height .3s ease-in-out,margin .3s ease-in-out,opacity .3s ease-in-out;transition: width .3s ease-in-out,height .3s ease-in-out,margin .3s ease-in-out,opacity .3s ease-in-out;}.cursor-inner.cursor-hover {margin-left: -18px;margin-top: -18px;width: 36px;height: 36px;background: #123eed !important; opacity: .3;}.cursor-outer {margin-left: -15px; margin-top: -15px;width: 30px;height: 30px;border: 2px solid #123eed !important;-webkit-box-sizing: border-box;box-sizing: border-box;z-index: 10000000;opacity: .5;-webkit-transition: all .08s ease-out;transition: all .08s ease-out;}.cursor-outer.cursor-hover {opacity: 0;}.main-wrapper[data-magic-cursor=hide] .mouse-cursor {display: none;opacity: 0;visibility: hidden;position: absolute;z-index: -1111;}</style>
<?php }
//鼠标跟随2
function zibll_Add_ons_mouse_cursor2() {?>
<div class="mouse-cursor cursor-outer"></div><div class="mouse-cursor cursor-inner"></div>
<script src="/wp-content/plugins/zibll_Add_ons/js/shubiao.js"></script>
<style>.mouse-cursor{position:fixed;left:0;top:0;pointer-events:none;border-radius:50%;-webkit-transform:translateZ(0);transform:translateZ(0);visibility:hidden}.cursor-inner{margin-left:-3px;margin-top:-3px;width:6px;height:6px;z-index:10000001;background:green;-webkit-transition:width.3s ease-in-out,height.3s ease-in-out,margin.3s ease-in-out,opacity.3s ease-in-out;transition:width.3s ease-in-out,height.3s ease-in-out,margin.3s ease-in-out,opacity.3s ease-in-out}.cursor-inner.cursor-hover{margin-left:-18px;margin-top:-18px;width:36px;height:36px;background:green !important;opacity:.3}.cursor-outer{margin-left:-15px;margin-top:-15px;width:30px;height:30px;border:2px solid green !important;-webkit-box-sizing:border-box;box-sizing:border-box;z-index:10000000;opacity:.5;-webkit-transition:all.08s ease-out;transition:all.08s ease-out}.cursor-outer.cursor-hover{opacity:0}.main-wrapper[data-magic-cursor=hide].mouse-cursor{display:none;opacity:0;visibility:hidden;position:absolute;z-index:-1111}</style>
<?php }
//鼠标跟随3
function zibll_Add_ons_mouse_cursor3() {?>
<div class="mouse-cursor cursor-outer"></div><div class="mouse-cursor cursor-inner"></div>
<script src="/wp-content/plugins/zibll_Add_ons/js/shubiao.js"></script>
<style>.mouse-cursor{position:fixed;left:0;top:0;pointer-events:none;border-radius:50%;-webkit-transform:translateZ(0);transform:translateZ(0);visibility:hidden}.cursor-inner{margin-left:-3px;margin-top:-3px;width:6px;height:6px;z-index:10000001;background:hotpink;-webkit-transition:width.3s ease-in-out,height.3s ease-in-out,margin.3s ease-in-out,opacity.3s ease-in-out;transition:width.3s ease-in-out,height.3s ease-in-out,margin.3s ease-in-out,opacity.3s ease-in-out}.cursor-inner.cursor-hover{margin-left:-18px;margin-top:-18px;width:36px;height:36px;background:hotpink !important;opacity:.3}.cursor-outer{margin-left:-15px;margin-top:-15px;width:30px;height:30px;border:2px solid hotpink !important;-webkit-box-sizing:border-box;box-sizing:border-box;z-index:10000000;opacity:.5;-webkit-transition:all.08s ease-out;transition:all.08s ease-out}.cursor-outer.cursor-hover{opacity:0}.main-wrapper[data-magic-cursor=hide].mouse-cursor{display:none;opacity:0;visibility:hidden;position:absolute;z-index:-1111}</style>
<?php }
//网站背景pc1
function zibll_Add_ons_body_backgroundtu1(){?>
<style>@media screen and (min-width: 1000px){body {background: var(--body-bg-color);} :root{--body-bg-color:url(/wp-content/plugins/zibll_Add_ons/img/pc.jpg) top fixed;}}</style>
<?php }
//网站背景pc2
function zibll_Add_ons_body_backgroundtu2(){?>
<style>@media screen and (min-width: 1000px){body {background: var(--body-bg-color);} :root{--body-bg-color:url(/wp-content/plugins/zibll_Add_ons/img/pc2.jpg) top fixed;}}</style>
<?php }
//网站背景pc3
function zibll_Add_ons_body_backgroundtu3(){?>
<style>@media screen and (min-width: 1000px){body {background: var(--body-bg-color);} :root{--body-bg-color:url(/wp-content/plugins/zibll_Add_ons/img/pc1.png) top fixed;}}</style>
<?php }
//网站背景pc3
function zibll_Add_ons_body_backgroundtu3d(){?>
<style>@media screen and (min-width: 1000px){.dark-theme {background-position-x: center;background-position-y: center;background-repeat: no-repeat;background-attachment: fixed; background-image: url("/wp-content/plugins/zibll_Add_ons/img/pcd.png");
    background-size: cover;}}</style>
<?php }
//网站背景pc3
function zibll_Add_ons_body_backgroundtu33(){?>
<style>@media screen and (min-width: 1000px){body {background: var(--body-bg-color);} :root{--body-bg-color:url(<?php echo MJ('zibll_Add_ons_body_backgroundtu333')?>) top fixed;}}</style>
<?php }
//网站背景pc3
function zibll_Add_ons_body_backgroundtu33d(){?>
<style>@media screen and (min-width: 1000px){.dark-theme {background-position-x: center;background-position-y: center;background-repeat: no-repeat;background-attachment: fixed; background-image: url(<?php echo MJ('zibll_Add_ons_body_backgroundtu333d')?>);background-size: cover;}}</style>
<?php }
//网站背景mp1
function zibll_Add_ons_body_backgroundtu4(){?>
<style>@media screen and (max-width: 1000px){body {background: var(--body-bg-color);} :root{--body-bg-color:url(/wp-content/plugins/zibll_Add_ons/img/mp.jpg) top fixed;}}</style>
<?php }
//网站背景mp2
function zibll_Add_ons_body_backgroundtu5(){?>
<style>@media screen and (max-width: 1000px){body {background: var(--body-bg-color);} :root{--body-bg-color:url(/wp-content/plugins/zibll_Add_ons/img/ce.jpg) top fixed;}}</style>
<?php }
//网站背景mp3
function zibll_Add_ons_body_backgroundtu6(){?>
<style>@media screen and (max-width: 1000px){body {background: var(--body-bg-color);} :root{--body-bg-color:url(/wp-content/plugins/zibll_Add_ons/img/mp1.png) top fixed;}}</style>
<?php }
//网站背景mp3
function zibll_Add_ons_body_backgroundtu6d(){?>
<style>@media screen and (max-width: 1000px){.dark-theme {background-position-x: center;background-position-y: center;background-repeat: no-repeat;background-attachment: fixed; background-image: url(/wp-content/plugins/zibll_Add_ons/img/pcd.png);background-size: cover;}}</style>
<?php }
//网站背景mp3
function zibll_Add_ons_body_backgroundtu66(){?>
<style>@media screen and (max-width: 1000px){body {background: var(--body-bg-color);} :root{--body-bg-color:url(<?php echo MJ('zibll_Add_ons_body_backgroundtu666')?>) top fixed;}}</style>
<?php }
//网站背景mp3
function zibll_Add_ons_body_backgroundtu66d(){?>
<style>@media screen and (max-width: 1000px){.dark-theme {background-position-x: center;background-position-y: center;background-repeat: no-repeat;background-attachment: fixed; background-image: url(<?php echo MJ('zibll_Add_ons_body_backgroundtu666d')?>);background-size: cover;}</style>
<?php }
//下雪特效35
function zibll_Add_ons_Snowfall1(){?>
<script src="/wp-content/plugins/zibll_Add_ons/js/xuehua.js"></script>
<?php }
//右侧悬浮36
function zibll_Add_ons_hook_youcexuanfu_css(){?>
<style>span.float-btn.more-btn.hover-show.nowave {margin-top: 0px;}.float-right.round.position-bottom {background: #fff;border-radius: var(--main-radius);
    transition: 0s;right: 1px;bottom: 170px;border-radius: 20px 0 0 20px;box-shadow: -5px 3px 10px 0px rgb(5 5 5 / 15%);}.float-right.round .float-btn {border-radius: 8px 0px 0px 17px;}.float-right .float-btn {background: #fff;}.float-right.round.position-bottom::before {content: '';
    width: 40px;height: 40px;background: url("/wp-content/plugins/zibll_Add_ons/img/youce.gif");background-size: cover;display: block;margin: 5px 7px 0 2px;}.dark-theme .float-right.round.position-bottom {background: #414141;border: 1px solid #4a4a4a;transition: 0s;}.dark-theme .float-right .float-btn {background: #414141;}.dark-theme .float-right.round.position-bottom a:hover {background: #505255;--this-color: var(--muted-2-color);}.dark-theme .float-right.round.position-bottom span:hover {background: #505255;--this-color: var(--muted-2-color);}span.newadd-btns.hover-show.float-btn.add-btn .hover-show-con.dropdown-menu.drop-newadd>a:hover {background-color: #d8d8d836;border-radius: 8px;}a.float-btn.ontop.fade {display: none;}</style>
<?php }
//右侧悬浮36
function zibll_Add_ons_hook_youcexuanfu1_css(){?>
<style>span.float-btn.more-btn.hover-show.nowave {margin-top: 0px;}.float-right.round.position-bottom {background: #fff;border-radius: var(--main-radius); transition: 0s;right: 1px;bottom: 170px;border-radius: 20px 0 0 20px;box-shadow: -5px 3px 10px 0px rgb(5 5 5 / 15%);}.float-right.round .float-btn {border-radius: 8px 0px 0px 17px;}.float-right .float-btn {background: #fff;}.float-right.round.position-bottom::before {content: '';
    width: 40px;height: 60px;background: url("/wp-content/plugins/zibll_Add_ons/img/aa1.gif");background-size: cover;display: block;margin: 5px 7px 0 2px;}.dark-theme .float-right.round.position-bottom {background: #414141;border: 1px solid #4a4a4a;transition: 0s;}.dark-theme .float-right .float-btn {background: #414141}.dark-theme .float-right.round.position-bottom a:hover {background: #505255;--this-color: var(--muted-2-color);}.dark-theme .float-right.round.position-bottom span:hover {background: #505255;--this-color: var(--muted-2-color);}span.newadd-btns.hover-show.float-btn.add-btn .hover-show-con.dropdown-menu.drop-newadd>a:hover {background-color: #d8d8d836;border-radius: 8px;}a.float-btn.ontop.fade {display: none}</style>
<?php }
//右侧悬浮36
function zibll_Add_ons_hook_youcexuanfu2_css(){?>
<style>#maomao{position:fixed;bottom:40px;right:-5px;width:57px;height:70px;background-image:url(/wp-content/plugins/zibll_Add_ons/img/maomao.svg);background-position:center;background-size:cover;background-repeat:no-repeat;transition:background .3s;z-index:99999999999999}#maomao:hover{background-position:60px 50%;}</style>
<div id="maomao" onmouseout="duoMaomao()" style="bottom: 60vh;"></div>
<script>var randomNum =function(minNum,maxNum) {switch (arguments.length) {case 1:return parseInt(Math.random() *minNum + 1,10);break;case 2:return parseInt(Math.random() *(maxNum - minNum + 1) + minNum,10);break;default:return 0;break;};};var duoMaomao =function() {var maomao =$('#maomao');maomao.css('bottom',randomNum(1,90) + 'vh');};</script>

<?php }
//顶部你别走呀
function zibll_Add_ons_hook_dingbubiaoti(){?>
<script>var OriginTitile = document.title,titleTime;document.addEventListener("visibilitychange",function() {if (document.hidden) {document.title = "<?php echo MJ('dingbubiaoti_mj1') ?>"; clearTimeout(titleTime) } else {document.title = "<?php echo MJ('dingbubiaoti_mj2') ?>" ; titleTime = setTimeout(function(){ document.title = OriginTitile}, 2000)}});</script>
<?php }
//顶部你别走呀
function zibll_Add_ons_hook_dongtaibiaoti_js(){?>
<script>var keyWords = "—<?php echo MJ('dongtaibiaoti1') ?>—";function titleChange() {var keyList = keyWords.split("");var firstChar = keyList.shift();keyList.push(firstChar);keyWords = keyList.join("");document.title = keyWords;}setInterval(titleChange, 500);</script>
<?php }
//手机侧边栏1
function zibll_Add_ons_hook_shoujicebianlan1_css() {?>
<style>@media (max-width: 767px){.mobile-navbar.show,.mobile-navbar.left{background-size: cover;background-repeat: no-repeat;background-position: center center;cursor: pointer;background-image:linear-gradient(rgba(255, 255,255,0),rgba(255,255,255, 0.3)),url("/wp-content/plugins/zibll_Add_ons/img/mp.jpg");}.mobile-nav-widget .box-body {background: var(--muted-border-color) !important;}}</style>
<?php }
//手机侧边栏1
function zibll_Add_ons_hook_shoujicebianlan33_css() {?>
<style>@media (max-width: 767px){.mobile-navbar.show,.mobile-navbar.left{background-size: cover;background-repeat: no-repeat;background-position: center center;cursor: pointer;background-image:linear-gradient(rgba(255, 255,255,0),rgba(255,255,255, 0.3)),url("<?php echo MJ('shoujicebianlan333')?>");}.mobile-nav-widget .box-body {background: var(--muted-border-color) !important;}}</style>
<?php }
//手机侧边栏2
function zibll_Add_ons_hook_shoujicebianlan2_css() {?>
<style>@media (max-width: 767px){.mobile-navbar.show,.mobile-navbar.left{background-size: cover;background-repeat: no-repeat;background-position: center center;cursor: pointer;background-image:linear-gradient(rgba(255, 255,255,0),rgba(255,255,255, 0.3)),url("/wp-content/plugins/zibll_Add_ons/img/ce.jpg");}.mobile-nav-widget .box-body {background: var(--muted-border-color) !important;}}</style>
<?php }
//手机侧边栏3
function zibll_Add_ons_hook_shoujicebianlan3_css() {?>
<style>@media (max-width: 767px){.mobile-navbar.show,.mobile-navbar.left{background-size: cover;background-repeat: no-repeat;background-position: center center;cursor: pointer;background-image:linear-gradient(rgba(255, 255,255,0),rgba(255,255,255, 0.3)),url("/wp-content/plugins/zibll_Add_ons/img/mp1.png");}.mobile-nav-widget .box-body {background: var(--muted-border-color) !important;}}</style>
<?php }
//评论背景39
function zibll_Add_ons_hook_plbj_css(){?>
<style> textarea#comment {background-color:transparent;background:linear-gradient(rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.05)),url("/wp-content/plugins/zibll_Add_ons/img/comment_bg.gif") right 30px bottom 0px no-repeat;-moz-transition:ease-in-out 0.45s;background-size:35%;-webkit-transition:ease-in-out 0.45s;-o-transition:ease-in-out 0.45s;-ms-transition:ease-in-out 0.45s;transition:ease-in-out 0.45s;}textarea#comment:focus {background-position-y:789px;-moz-transition:ease-in-out 0.45s;-webkit-transition:ease-in-out 0.45s;-o-transition:ease-in-out 0.45s;-ms-transition:ease-in-out 0.45s;transition:ease-in-out 0.45s;}';</style>
<?php }
//音乐
function zibll_Add_ons_hook_plbj2(){?>
<div id="backgroundmusic"></div>
    <script>
    var m1="https://csxandlsy.xyz/wp-content/uploads/resource/music/1.mp3";
    var m2="https://csxandlsy.xyz/wp-content/uploads/resource/music/2.mp3";
    var m3="https://csxandlsy.xyz/wp-content/uploads/resource/music/3.mp3";
    var m4="https://csxandlsy.xyz/wp-content/uploads/resource/music/4.mp3";
    var m5="https://csxandlsy.xyz/wp-content/uploads/resource/music/5.mp3";
    var m6="https://csxandlsy.xyz/wp-content/uploads/resource/music/6.mp3";
    var m7="https://csxandlsy.xyz/wp-content/uploads/resource/music/7.mp3";
    var m8="https://csxandlsy.xyz/wp-content/uploads/resource/music/8.mp3";
    var m9="https://csxandlsy.xyz/wp-content/uploads/resource/music/9.mp3";
    var m10="https://csxandlsy.xyz/wp-content/uploads/resource/music/10.mp3";
    var x=Math.round(Math.random()*9);
    console.log(x);
    if (x==0) x=m1
    else if (x==1) x=m2
    else if (x==2) x=m3
    else if (x==3) x=m4
    else if (x==4) x=m5
    else if (x==5) x=m6
    else if (x==6) x=m7
    else if (x==7) x=m8
    else if (x==8) x=m9
    else  x=m10
    var obj = document.getElementById("backgroundmusic");
    obj.innerHTML='<audio src='+'"'+x+'"'+''+'height="0"'+'autoplay="true"'+'loop="true"'+'>'+'</audio>';
    </script>
<?php }
//评论背景40
function zibll_Add_ons_hook_dianjigengduo_css(){?>
<style>   .theme-pagination .ajax-next a, .theme-pagination .order-ajax-next a{border-radius: 30px; padding: 15px 0; color: var(--muted-color); background-color:var(--main-bg-color);color: #FF0033;display: block;opacity: 1;font-weight:bold;}</style>
<?php }
//导航栏背景1
function zibll_Add_ons_hook_navbg1_css(){?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("/wp-content/plugins/zibll_Add_ons/img/zhifeiji.gif");background-position:center right;background-size:100% 100%;}}</style>
<?php }
//导航栏背景1
function zibll_Add_ons_hook_usernavbg8_css(){?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("<?php echo MJ('usernavbg88')?>");background-position:center right;background-size:100% 100%;}}</style>
<?php }
//导航栏背景1
function zibll_Add_ons_hook_navbg6_css(){?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("/wp-content/plugins/zibll_Add_ons/img/aixin.gif");background-position:center right;background-size:100% 100%;}}</style>
<?php }
//导航栏背景1
function zibll_Add_ons_hook_navbg7_css(){?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("/wp-content/plugins/zibll_Add_ons/img/haitan.gif");background-position:center right;background-size:100% 100%;}}</style>
<?php }
//导航栏背景2
function zibll_Add_ons_hook_navbg2_css(){?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("/wp-content/plugins/zibll_Add_ons/img/zsf.png");background-position:center right;background-size:100% 100%;}}</style>
<?php }
//导航栏背景3
function zibll_Add_ons_hook_navbg3_css(){?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("/wp-content/plugins/zibll_Add_ons/img/gfth.png");background-position:center right;background-size:100% 100%;}}</style>
<?php }
//导航栏背景4
function zibll_Add_ons_hook_navbg4_css(){?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("/wp-content/plugins/zibll_Add_ons/img/wlsh.png");background-position:center right;background-size:100% 100%;}}</style>
<?php }
//导航栏背景5
function zibll_Add_ons_hook_navbg5_css(){?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("/wp-content/plugins/zibll_Add_ons/img/dmss.gif");background-position:center right;background-size:100% 100%;}}</style>
<?php }
//导航栏标题
function zibll_Add_ons_hook_navbiaoti_css(){?>
<style>.navbar-nav>li:first-child:before{width:30px;}.navbar-nav>li:before{width:60px;top:23px;background:rgba(0,0,0,0);height:4px;left:10px;border-radius:unset;}.navbar-top li.current-menu-item>a, .navbar-top li:hover>a {color: unset;}</style>
<?php }
//标题
function zibll_Add_ons_hook_biaoti_css(){?>
<style>.zib-widget>h3:before,.wp-posts-content>h3.has-text-align-center:before, .wp-posts-content>h3:not([class]):before{content: '';position: absolute;top: 2px;left: 0;width: 20px!important;height: 20px!important;background: url(/wp-content/plugins/zibll_Add_ons/img/h3.gif) no-repeat center;box-shadow: none;background-size: 100% !important;}.zib-widget>h2:before,.wp-posts-content>h2.has-text-align-center:before, .wp-posts-content>h2:not([class]):before{content: '';position: absolute;top: 0;left: 0;width: 20px;height: 20px;background: url(/wp-content/plugins/zibll_Add_ons/img/h2.gif) no-repeat center;box-shadow: none;}.wp-posts-content h2:before{content: '';position: absolute;top: 0;left: 0;width: 20px;height: 20px;background: url(/wp-content/plugins/zibll_Add_ons/img/h2.gif) no-repeat center;box-shadow: none;}.wp-posts-content h3:before{content: '';position: absolute;top: 2px;left: 0;width: 20px!important;height: 20px!important;background: url(/wp-content/plugins/zibll_Add_ons/img/h3.gif) no-repeat center;box-shadow: none;background-size: 100% !important;}.wp-posts-content>h2.has-text-align-center, .wp-posts-content>h2:not([class]),.zib-widget>h2{color: var(--main);font-size: 18px;line-height: 24px;margin-bottom: 18px;position: relative;padding: 0 15px 0 28px;}.wp-posts-content h2{color: var(--main);font-size: 18px;line-height: 24px;margin-bottom: 18px;position: relative;padding: 0 15px 0 28px;}.wp-posts-content>h3.has-text-align-center, .wp-posts-content>h3:not([class]),.zib-widget>h3{color: var(--main);font-size: 18px;line-height: 24px;margin-bottom: 18px;position: relative;padding: 0 15px 0 28px;}.wp-posts-content h3{color: var(--main);font-size: 18px;line-height: 24px;margin-bottom: 18px;position: relative;padding: 0 15px 0 28px;}.h2:before{content: '';position: absolute;top: 0;left: 0;width: 20px;height: 20px;background: url(/wp-content/plugins/zibll_Add_ons/img/h2.gif) no-repeat center;box-shadow: none;},h2{color: var(--main);font-size: 18px;line-height: 24px;margin-bottom: 18px;position: relative;padding: 0 15px 0 28px;}.h2{color: var(--main);font-size: 18px;line-height: 24px;margin-bottom: 18px;position: relative;padding: 0 15px 0 28px;}</style>
<?php }
//二维码1
function zibll_Add_ons_hook_erweima1_css(){?>
<style>.footer-miniimg{filter:hue-rotate(80deg);}</style>
<?php }
//二维码2
function zibll_Add_ons_hook_erweima2_css(){?>
<style>.footer-miniimg{filter:invert(1);}</style>
<?php }
//二维码3
function zibll_Add_ons_hook_erweima3_css(){?>
<style>.footer-miniimg{filter:drop-shadow(0 0 10px dodgerblue);}</style>
<?php }
//logo1
function zibll_Add_ons_hook_logo1_css(){?>
<style>.navbar-logo{animation: hue 4s infinite;}@keyframes hue {from {filter: hue-rotate(0deg);}to {filter: hue-rotate(-360deg);}}</style>
<?php }
//logo2
function zibll_Add_ons_hook_logo3_css(){?>
<style>.navbar-logo{filter:drop-shadow(0 0 10px dodgerblue);}</style>
<?php }
//logo3
function zibll_Add_ons_hook_logo2_css(){?>
<style>.navbar-logo{filter:invert(1);}</style>
<?php }
//左边联系站长QQ
function zibll_Add_ons_hook_contact_help_qq_div_css() {$contact_help_qq = get_user_meta(1,"qq")[0];if($contact_help_qq){?>
<style>.contact-help-qq{position: fixed;z-index: 99999;left: 0;top: calc(30% - 30px);margin-top: -36px;width: 28px;height: 85px;transition: all .3s;
    font-size: 12px;background: var(--main-bg-color);border-radius: 0 7px 7px 0; padding: 8px 7px;line-height: 14px;}@media screen and (max-width: 768px){.contact-help-qq{display:none;}}</style>
<script src="/wp-content/plugins/zibll_Add_ons/js/lianxizhanzhang.js"></script>
<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $contact_help_qq;?>&site=qq&menu=yes"target="_blank" class="contact-help-qq" style="font-weight:700;">联系站长<svg class="icon" aria-hidden="true"><use xlink:href="#icon-QQ"></use></svg></a>
<?php }}
// 随便看看
function random_postlite() {global $wpdb;$query = "SELECT ID FROM $wpdb->posts WHERE post_type = 'post' AND post_password = '' AND post_status = 'publish' ORDER BY RAND() LIMIT 1";$random_id = $wpdb->get_var( $query );wp_redirect( get_permalink( $random_id ) );exit;}    
function zibll_Add_ons_suibiankankan() {?>
<style>.suibianknakan{position: fixed;z-index: 999999;left: 0;top: calc(30% + 75px);margin-top: -36px;width: 28px;height: 70px;transition: all .3s;font-size: 12px;background: var(--main-bg-color);border-radius: 0 7px 7px 0; padding: 8px 7px;line-height: 14px;}@media screen and (max-width: 768px){.suibianknakan{display:none;}}</style>
<a href="/?random" target="_blank" class="suibianknakan" style="font-weight:700;">随便看看</a>
<?php }
//粒子
function zibll_Add_ons_Snowfall2() {?>
<div class="mouse-cursor cursor-outer"></div><div class="mouse-cursor cursor-inner"></div>
<script src="/wp-content/plugins/zibll_Add_ons/js/shubiao.js"></script>
<style>.mouse-cursor{position:fixed;left:0;top:0;pointer-events:none;border-radius:50%;-webkit-transform:translateZ(0);transform:translateZ(0);visibility:hidden}.cursor-inner{margin-left:-3px;margin-top:-3px;width:6px;height:6px;z-index:10000001;background:transparent;-webkit-transition:width.3s ease-in-out,height.3s ease-in-out,margin.3s ease-in-out,opacity.3s ease-in-out;transition:width.3s ease-in-out,height.3s ease-in-out,margin.3s ease-in-out,opacity.3s ease-in-out}.cursor-inner.cursor-hover{margin-left:-18px;margin-top:-18px;width:36px;height:36px;background:transparent;opacity:.3}.cursor-outer{margin-left:-15px;margin-top:-15px;width:30px;height:30px;border:2px solid transparent;-webkit-box-sizing:border-box;box-sizing:border-box;z-index:10000000;opacity:.5;-webkit-transition:all.08s ease-out;transition:all.08s ease-out}.cursor-outer.cursor-hover{opacity:0}.main-wrapper[data-magic-cursor=hide].mouse-cursor{display:none;opacity:0;visibility:hidden;position:absolute;z-index:-1111}</style><script src="/wp-content/plugins/zibll_Add_ons/js/lizi.js"></script>
<?php }
//简约图形
function zibll_Add_ons_Snowfall3() {?>
<style>body {background-image: url("/wp-content/plugins/zibll_Add_ons/img/jianyue.svg");background-position-x: center;background-position-y: center;    background-repeat: no-repeat;background-attachment: fixed;background-size: cover;}</style>
<?php }
//动态3
function zibll_Add_ons_hook_dongtai3(){?>
<link rel="stylesheet" href="/wp-content/plugins/zibll_Add_ons/css/yuansufuhao.css" />
<script>$('head').before('<div class="container1"><div class="inner-container1"><div class="shape"></div></div><div class="inner-container1"><div class="shape"></div></div></div>');</script>
<script src="/wp-content/plugins/zibll_Add_ons/js/yuansufuhao.min.js"></script>
<script>$(document).ready(function(){var html='';for(var i=1;i<=50;i++){html+='<div class="shape-container--'+i+' shape-animation"><div class="random-shape"></div></div>'}document.querySelector('.shape').innerHTML+=html});</script>
<?php }
//动态特效
function zibll_Add_ons_hook_dongtai1(){?>
<div id="bubble"><canvas width="1494" height="815" style="display: block; position: fixed; top: 0px; left: 0px; z-index: -2;"></canvas></div>
<script src="/wp-content/plugins/zibll_Add_ons/js/control.js"></script>
<?php }
//网易云
function zibll_Add_ons_plbj4(){?>
<script src="/wp-content/plugins/zibll_Add_ons/js/dibunav.js"></script>
<link rel="stylesheet" href="/wp-content/plugins/zibll_Add_ons/css/dibunav.css">
<div class="footwaveline">
    <i style="background-image: url(/wp-content/plugins/zibll_Add_ons/img/dibu.png);display: inline-block;width: 200px;height: 100px;position: fixed;bottom: 0;z-index: 110;background-size: 100%;pointer-events: none;"></i>
    <div class="footwavewave" style="background: url(/wp-content/plugins/zibll_Add_ons/img/dibu1.png) 0 0 repeat-x;height: 3px;width: 100%;position: fixed;background-size: 10px 3px;z-index: 98;bottom: 30px;"></div>
    <div id="shi" style="position: fixed;bottom: 0;margin-left: 200px;z-index: 99;">
        <h4 class="my-face" style="font-size:13px;margin:0 5px 2px 5px;color:#797979;margin-bottom: 10px;"><?php echo MJ('bottomnav0');?></h4>
    </div>
    <div style="width: 100%;height: 30px;position: fixed;bottom: 0;z-index: 97;box-shadow: 0 -2px 10px rgb(0 0 0 / 10%);background:#fff;">
        <nav class="joe_header__below-logon" style="float: right;margin-right: 50px;margin-top: -7px;">  
			    <span class="dz" style="display: inline-block;">
             <a href="<?php echo MJ('bottomhre1');?>" data-toggle="tooltip" data-original-title="<?php echo MJ('bottomnav1');?>">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-pinglun"></use>
                 </svg><?php echo MJ('bottomnav1');?></a>
            </span>
            <span class="dz" style="display: inline-block;">
             <a href="<?php echo MJ('bottomhre2');?>" data-toggle="tooltip" data-original-title="<?php echo MJ('bottomnav2');?>">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-pinglun"></use>
             </svg><?php echo MJ('bottomnav2');?></a>
            </span>
			    <span class="dz" style="display: inline-block;">
             <a href="<?php echo MJ('bottomhre3');?>" data-toggle="tooltip" data-original-title="<?php echo MJ('bottomnav3');?>">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-pinglun"></use>
                 </svg><?php echo MJ('bottomnav3');?></a>
            </span>
			    <span class="dz" style="display: inline-block;">
             <a href="<?php echo MJ('bottomhre4');?>" data-toggle="tooltip" data-original-title="<?php echo MJ('bottomnav4');?>">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-pinglun"></use>
                 </svg><?php echo MJ('bottomnav4');?></a>
            </span>
            <span style="line-height: 45px;" class="sc">
             <a href="<?php echo MJ('bottomhre5');?>" data-toggle="tooltip" data-original-title="<?php echo MJ('bottomnav5');?>">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-pinglun"></use>
                    </svg><?php echo MJ('bottomnav5');?></a>
            </span>
        </nav></div></div><script>$('footer').before('<span id="bottomtime"></span>');
function NewDate(str) {
str = str.split('-');
var date = new Date();
date.setUTCFullYear(str[0], str[1] - 1, str[2]);
date.setUTCHours(0, 0, 0, 0);
return date;}
function momxc() {
var birthDay =NewDate("<?php echo MJ('timeauthor1') ?>");
var today=new Date();
var timeold=today.getTime()-birthDay.getTime();
var sectimeold=timeold/1000
var secondsold=Math.floor(sectimeold);
var msPerDay=24*60*60*1000; var e_daysold=timeold/msPerDay;
var daysold=Math.floor(e_daysold);
var e_hrsold=(daysold-e_daysold)*-24;
var hrsold=Math.floor(e_hrsold);
var e_minsold=(hrsold-e_hrsold)*-60;
var minsold=Math.floor((hrsold-e_hrsold)*-60); var seconds=Math.floor((minsold-e_minsold)*-60).toString();
seconds=seconds>9?seconds:"0"+seconds;//秒数补全
minsold=minsold>9?minsold:"0"+minsold;//分数补全
hrsold=hrsold>9?hrsold:"0"+hrsold;//时数补全
document.getElementById("bottomtime").innerHTML = "本站已安全运行"+daysold+"天 "+hrsold+"时 "+minsold+"分 "+seconds+"秒";
setTimeout(momxc, 1000);}momxc();
$(document).ready(function(){if(window.screen.width < window.screen.height){
$("#bottomtime").hide();}else{$("#bottomtime").show();}})</script>
<style>#bottomtime{z-index:99999;animation:change 10s infinite;font-size:11px; color:cornflowerblue;display:block;bottom:7px;left:34%;width:250px;position:fixed;}@keyframes change{0%{color:#5cb85c;}25%{color:#556bd8;}50%{color:#e40707;}75%{color:#66e616;}100% {color:#67bd31;}}</style>
<?php }
//广告
function zibll_Add_ons_timeauthor2(){?>
<div class="showpc"><style>#wpon_svip_gif {display: none;width: 200px;height: 61px;border-radius: 0 0 13px 13px;z-index: 1002;right: 30px;top: 100px;position: fixed;}.showpc{display:none;}@media (min-width:960px){.showpc{display:inline;}}</style><div id="wpon_svip_gif" class="wpon_svip_gif" style="display: block;"><div class="kubao" style="display: none;"></div><p><a class="link animated" href="<?php echo MJ('timeauthor3');?>" target="_blank" style="border: none; box-shadow: none;"><br><img src="/wp-content/plugins/zibll_Add_ons/img/advertisement.gif" style="margin-top: 500px;" height="200" width="600"><br></a></p></div></div>
<?php }
//蒲公英
function zibll_Add_ons_plbj5(){?>
<link rel="stylesheet" href="/wp-content/plugins/zibll_Add_ons/css/pugongying.css">
<div class="dandelion"><span class="smalldan"></span><span class="bigdan"></span></div>  
<?php }
//广告
function zibll_Add_ons_advertisement(){?>
<div class="showpc"><style>#wpon_svip_gif {display: none;width: 100px;height: 125px;border-radius: 0 0 13px 13px;z-index: 1002;right: 30px;top: 110px;position: fixed;}.showpc{display:none;}@media (min-width:960px){.showpc{display:inline;}}</style><div id="wpon_svip_gif" class="wpon_svip_gif" style="display: block;"><div class="kubao" style="display: none;"></div><p><a class="link animated" href="<?php echo MJ('advertisement1');?>" target="_blank" style="border: none; box-shadow: none;"><br><img src="/wp-content/plugins/zibll_Add_ons/img/advertisement.gif" style="margin-top: 500px;" height="100" width="400"><br></a></p></div></div>
<?php }
//底线
function zibll_Add_ons_dixian(){?>
<script>$('footer').before('<img id="dixian" src="/wp-content/plugins/zibll_Add_ons/img/dixian2.gif"/><style>#dixian{width:1000px;height:70px;margin-left:19%;}@media screen and (max-width: 800px){#dixian{width:1000px;height:50px;margin-left:6%;}}</style>');</script>
<?php }

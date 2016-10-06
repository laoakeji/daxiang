jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        var path = options.path ? '; path=' + options.path : '';
        var domain = options.domain ? '; domain=' + options.domain : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};


/*$(function() {
	$(window).bind("mousewheel", function(e, delta) {
		var mousewheelX = parseInt($(window).height()/3);
		mousewheelX = (mousewheelX<200 || mousewheelX>350)?200:mousewheelX;
		//mousewheelX = 250;
		if(delta > 0) {
			mousewheelX = -mousewheelX;
		}
		$('html,body').stop().animate({scrollTop: $(window).scrollTop()+mousewheelX}, 700);
		return false;
	});
	
*/

var navmenu = $("#menuNav a");
		navmenu.click(function(e){
		e.preventDefault();
		var id = $(this).attr("href");
        $('html,body').animate({scrollTop: $(id).offset().top+0+"px"},800, 'easeInOutQuint');
		return false;
	});
	$(window).scroll(function(){
		$(".top_nav").addClass("top_scroll");
	})
	//$("#get").click(function(e){
//		e.preventDefault();
//		$("#menu a[href='#contact']").click();
//	})






    $(document).ready(function () {
        $('.fancybox').fancybox();
        $(".fenlei_bai_bg").hide();
        $(".fenlei_wem").hide();
        $(".shouye_par2_cen ul li").hover(function () {
            $(this).find(".fenlei_bai_bg").stop().fadeTo(1000, 1)
            $(this).find(".fenlei_wem").stop().fadeTo(500, 1)
        },
		function () {
		    $(this).find(".fenlei_bai_bg").stop().fadeTo(1000, 0)
		    $(this).find(".fenlei_wem").stop().fadeTo(500, 0)
		});
        $(".fenlei_bai_bg1").hide();
        $(".fenlei_wem1").hide();
        $(".fenlei_bg1").show();
        $(".chanpin_liebiao_shouye ul li").hover(function () {
            $(this).find(".fenlei_bai_bg1").stop().fadeTo(1000, 1)
            $(this).find(".fenlei_wem1").stop().fadeTo(500, 1)
            $(this).find(".fenlei_bg1").stop().fadeTo(500, 0)
        },
		function () {
		    $(this).find(".fenlei_bai_bg1").stop().fadeTo(1000, 0)
		    $(this).find(".fenlei_wem1").stop().fadeTo(500, 0)
		    $(this).find(".fenlei_bg1").stop().fadeTo(500, 1)
		});
        $(".fenlei_bai_bg2").hide();
        $(".fenlei_wem2").hide();
        $(".xiangmu_shouye_tu_liebiao ul li").hover(function () {
            $(this).find(".fenlei_bai_bg2").stop().fadeTo(1000,0.9)
            $(this).find(".fenlei_wem2").stop().fadeTo(500, 1)
        },
		function () {
		    $(this).find(".fenlei_bai_bg2").stop().fadeTo(1000, 0)
		    $(this).find(".fenlei_wem2").stop().fadeTo(500, 0)
		});
		$(".danwei_shouye_tu_liebiao ul li").hover(function () {
            $(this).find(".fenlei_bai_bg2").stop().fadeTo(1000,0.9)
            $(this).find(".fenlei_wem2").stop().fadeTo(500, 1)
        },
		function () {
		    $(this).find(".fenlei_bai_bg2").stop().fadeTo(1000, 0)
		    $(this).find(".fenlei_wem2").stop().fadeTo(500, 0)
		});
        $(".fenlei_bai_bg3").hide();
        $(".fenlei_wem3").hide();
        $(".da").hover(function () {
            $(this).find(".fenlei_bai_bg3").stop().fadeTo(1000, 0.5)
            $(this).find(".fenlei_wem3").stop().fadeTo(500, 1)
        },
		function () {
		    $(this).find(".fenlei_bai_bg3").stop().fadeTo(1000, 0)
		    $(this).find(".fenlei_wem3").stop().fadeTo(500, 0)
		});
        $(".fenlei_bai_bg4").hide();
        $(".fenlei_wem4").hide();
        $(".daa").hover(function () {
            $(this).find(".fenlei_bai_bg4").stop().fadeTo(1000, 0.5)
            $(this).find(".fenlei_wem4").stop().fadeTo(500, 1)
        },
		function () {
		    $(this).find(".fenlei_bai_bg4").stop().fadeTo(1000, 0)
		    $(this).find(".fenlei_wem4").stop().fadeTo(500, 0)
		});
    });
	
	
	
			$(function(){	
	$(window).scroll(function() {		
		if($(window).scrollTop() >= 100){
			$('.actGotopq').fadeIn(300); 
		}else{    
			$('.actGotopq').fadeOut(300);    
		}  
	});
	$('.actGotopq').click(function(){
	$('html,body').animate({scrollTop: '0px'}, 800);});	
});
			$(function(){
	$("#izl_rmenu").each(function(){
		$(this).find(".btn-wx").mouseenter(function(){
			$(this).find(".pic").fadeIn("fast");
		});
		$(this).find(".btn-wx").mouseleave(function(){
			$(this).find(".pic").fadeOut("fast");
		});
	});
	var lastRmenuStatus=false;
});


    $(function () {
        $(window).scroll(function () {
            var scroll_top = $(window).scrollTop();
            if ($(window).width()>414) {
            if(scroll_top >=1 && scroll_top<632){
			$('.actGotop').fadeOut(700); 
		}
		else if(scroll_top>=632)
		{
			$('.actGotop').fadeIn(700).css({'background':"#2a5117",});
			// $('.actGotop a').css({'color':"#fff",});
			// $('.actGotop .shouye_top_logo h2').css({'color':"#8aa201",});
	    }
		else if(scroll_top<1)
		{
			$('.actGotop').fadeIn(700).css({'background':"none"});
			// $('.actGotop a').css({'color':"#009688",});			
			// $('.actGotop .shouye_top_logo h2').css({'color':"#009688",});			
		}
        };})
    });
	
	
//增加人员名单
function shanchu(v){
	var b= $(v).parent().attr("id");
					//	alert(b)
						//$(this).parents(".td").parents(".fill_in_content").remove();
						$(v).parent().remove();
					}
					
					//拷贝粘贴到div里面		
					var index = 1;
					function addnav(){
						$(".add-container").append("<div class='xixi' id='xian" + index + "'><ul><li>姓名：<input class='inp5' type='text'></li><li>姓别：<input class='inp5' type='text' placeholder='男/女'></li><li>出生年月：<input class='inp5' type='text' placeholder='1992/10'></li><li>政治面貌：<input class='inp5' type='text' placeholder='党员（包含预备）/团员'></li><li>毕业院校：<input class='inp5' type='text'></li><li>专业：<input class='inp5' type='text'></li><li>学历：<input class='inp5' type='text' placeholder='本科'></li><li>职务：<input class='inp5' type='text'></li></ul><span onclick='shanchu(this)' style='position:absolute; top:0px; right:0px; cursor:pointer;'><img src='images/del.png'></span></div>");
						index++;
						$(".fill_in_content .td p input").click(function(){
							$(".fill_in_content .td p input").removeClass("on");
							$(".list .order form p select").removeClass("on");
							$(this).addClass("on");
						});
						$(".list .order form p input").click(function(){
							$(".list .order form p input").removeClass("on");
							$(".list .order form p select").removeClass("on");
							$(this).addClass("on");
						});	
					}



//增加股东
function addgu(){
	$(".add-gu").append("<div class='gudong' id='gu" + index + "'><div class='inp7' id='gu'><input type='text'><div class='inp8'><label>占股本比例：</label><input type='text'>%</div></div><span onclick='shanchu(this)' style='position:absolute; top:0px; right:0px; cursor:pointer;'><img src='images/del.png'></span></div>");
	index++;
	$(".fill_in_content .td p input").click(function(){
		$(".fill_in_content .td p input").removeClass("on");
		$(".list .order form p select").removeClass("on");
		$(this).addClass("on");
	});
	$(".list .order form p input").click(function(){
		$(".list .order form p input").removeClass("on");
		$(".list .order form p select").removeClass("on");
		$(this).addClass("on");
	});	
}

//$(function(){
//	$("input[name=sex]").click(function(){
//	var as=	$("input[name=sex]").val();	
//		if(as=='未'){
//			$(".dis").hide();
//			}else if(as=='已'){
//		$(".dis").show();
//		};
//	})	
//})
$(function(){
	$(".huiyuan_qiehuan .bd ul").height($(window).height());
});
$(":radio[name='sex']").click(function(){
    var index = $(":radio[name='sex']").index($(this));
    if(index == 1) //选中第2个时，div显示
        $(".dis").hide();
    else //当被选中的不是第2个时，div隐藏
        $(".dis").show();
});
$(":radio[name='sex1']").click(function(){
    var index = $(":radio[name='sex1']").index($(this));
    if(index == 1) //选中第2个时，div显示
        $(".dis1").hide();
    else //当被选中的不是第2个时，div隐藏
        $(".dis1").show();
});

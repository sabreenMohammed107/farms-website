!function(e){"use strict";if(e(".custom-cursor").length){var t,n=document.querySelector(".custom-cursor__cursor"),r=document.querySelector(".custom-cursor__cursor-two"),o=document.querySelectorAll("a");document.addEventListener("mousemove",function(e){e.clientX,e.clientY,n.style.transform=`translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`}),document.addEventListener("mousemove",function(e){var t=e.clientX,n=e.clientY;r.style.left=t+"px",r.style.top=n+"px"}),document.addEventListener("mousedown",function(){n.classList.add("click"),r.classList.add("custom-cursor__innerhover")}),document.addEventListener("mouseup",function(){n.classList.remove("click"),r.classList.remove("custom-cursor__innerhover")}),o.forEach(e=>{e.addEventListener("mouseover",()=>{n.classList.add("custom-cursor__hover")}),e.addEventListener("mouseleave",()=>{n.classList.remove("custom-cursor__hover")})})}function l(t){let n=window.location.href.split("/").reverse()[0];t.find("li").each(function(){let t=e(this).find("a");e(t).attr("href")==n&&e(this).addClass("current")}),t.children("li").each(function(){e(this).find(".current").length&&e(this).addClass("current")}),""==n&&t.find("li").eq(0).addClass("current")}if(e(".scroll-to-target").length&&e(".scroll-to-target").on("click",function(){var t=e(this).attr("data-target");return e("html, body").animate({scrollTop:e(t).offset().top},1e3),!1}),e(".main-menu__list").length&&l(e(".main-menu__list")),e(".service-details__sidebar-service-list").length&&l(e(".service-details__sidebar-service-list")),e(".main-menu__list").length&&e(".mobile-nav__container").length){let a=document.querySelector(".main-menu__list").outerHTML;document.querySelector(".mobile-nav__container").innerHTML=a}if(e(".sticky-header__content").length){let c=document.querySelector(".main-menu").innerHTML;document.querySelector(".sticky-header__content").innerHTML=c}if(e(".mobile-nav__container .main-menu__list").length&&e(".mobile-nav__container .main-menu__list .dropdown > a").each(function(){let t=e(this),n=document.createElement("BUTTON");n.setAttribute("aria-label","dropdown toggler"),n.innerHTML="<i class='fa fa-angle-down'></i>",t.append(function(){return n}),t.find("button").on("click",function(t){t.preventDefault();let n=e(this);n.toggleClass("expanded"),n.parent().toggleClass("expanded"),n.parent().parent().children("ul").slideToggle()})}),e(".mobile-nav__toggler").length&&e(".mobile-nav__toggler").on("click",function(t){t.preventDefault(),e(".mobile-nav__wrapper").toggleClass("expanded"),e("body").toggleClass("locked")}),e(".search-toggler").length&&e(".search-toggler").on("click",function(t){t.preventDefault(),e(".search-popup").toggleClass("active"),e(".mobile-nav__wrapper").removeClass("expanded"),e("body").toggleClass("locked")}),e(".odometer").length&&e(".odometer").each(function(){e(this).appear(function(){var t=e(this).attr("data-count");e(this).html(t)})}),e(".dynamic-year").length){let i=new Date;e(".dynamic-year").html(i.getFullYear())}(t=e(".scrollToLink")).length&&t.children("a").bind("click",function(n){if(e(window).scrollTop()>10)var r="90";else var r="90";var o=e(this);e("html, body").stop().animate({scrollTop:e(o.attr("href")).offset().top-r+"px"},1200,"easeInOutExpo"),t.removeClass("current"),t.removeClass("current-menu-ancestor"),t.removeClass("current_page_item"),t.removeClass("current-menu-parent"),o.parent().addClass("current"),n.preventDefault()}),e(window).on("load",function(){e(".thm-owl__carousel").length&&e(".thm-owl__carousel").each(function(){let t=e(this),n=t.data("owl-options");t.owlCarousel(n)}),e(".thm-owl__carousel--custom-nav").length&&e(".thm-owl__carousel--custom-nav").each(function(){let t=e(this),n=t.data("owl-nav-prev"),r=t.data("owl-nav-next");e(n).on("click",function(e){t.trigger("prev.owl.carousel"),e.preventDefault()}),e(r).on("click",function(e){t.trigger("next.owl.carousel"),e.preventDefault()})}),e(".curved-circle--item").length&&e(".curved-circle--item").circleType()}),e(document).ready(function(){e(window).scroll(function(){e(this).scrollTop()>100?e(".scroll-to-top").fadeIn():e(".scroll-to-top").fadeOut()}),e(".scroll-to-top").click(function(){return e("html, body").animate({scrollTop:0},800),!1})}),e(".before-after-twentytwenty").length&&e(".before-after-twentytwenty").each(function(){var t=e(this).attr("id");e("#"+t).twentytwenty(),e(document).on("shown.bs.tab",'a[data-toggle="tab"]',function(n){var r=e(n.target).attr("data-target"),o=e(".tab-pane"+r),l="#"+t;0===o.find(l).height()&&o.find(l).trigger("resize")})})}(jQuery);
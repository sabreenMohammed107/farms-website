(function ($) {
    "use strict";

    //custom coursor
    if ($(".custom-cursor").length) {
        var cursor = document.querySelector(".custom-cursor__cursor");
        var cursorinner = document.querySelector(".custom-cursor__cursor-two");
        var a = document.querySelectorAll("a");

        document.addEventListener("mousemove", function (e) {
            var x = e.clientX;
            var y = e.clientY;
            cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;
        });

        document.addEventListener("mousemove", function (e) {
            var x = e.clientX;
            var y = e.clientY;
            cursorinner.style.left = x + "px";
            cursorinner.style.top = y + "px";
        });

        document.addEventListener("mousedown", function () {
            cursor.classList.add("click");
            cursorinner.classList.add("custom-cursor__innerhover");
        });

        document.addEventListener("mouseup", function () {
            cursor.classList.remove("click");
            cursorinner.classList.remove("custom-cursor__innerhover");
        });

        a.forEach((item) => {
            item.addEventListener("mouseover", () => {
                cursor.classList.add("custom-cursor__hover");
            });
            item.addEventListener("mouseleave", () => {
                cursor.classList.remove("custom-cursor__hover");
            });
        });
    }

    if ($(".listing-top__map-show-hide").length) {
        $(".listing-top__map-show-hide").on("click", function () {
            $(this).toggleClass("hidden");
            var textElement = $(this).find(
                ".listing-top__map-show-hide-text span"
            );
            if (textElement.text() == textElement.data("text")) {
                textElement.text(textElement.data("toggle-text"));
            } else {
                textElement.text(textElement.data("text"));
            }
            $(".listing__map").toggleClass("hidden");
            $(".listing__content").toggleClass("hidden");
        });
    }

    if ($(".scroll-to-target").length) {
        $(".scroll-to-target").on("click", function () {
            var target = $(this).attr("data-target");
            // animate
            $("html, body").animate(
                {
                    scrollTop: $(target).offset().top,
                },
                1000
            );

            return false;
        });
    }

    if ($(".main-menu__list").length && $(".mobile-nav__container").length) {
        let navContent = document.querySelector(".main-menu__list").outerHTML;
        let mobileNavContainer = document.querySelector(
            ".mobile-nav__container"
        );
        mobileNavContainer.innerHTML = navContent;
    }
    if ($(".sticky-header__content").length) {
        let navContent = document.querySelector(".main-menu").innerHTML;
        let mobileNavContainer = document.querySelector(
            ".sticky-header__content"
        );
        mobileNavContainer.innerHTML = navContent;
    }

    if ($(".mobile-nav__container .main-menu__list").length) {
        let dropdownAnchor = $(
            ".mobile-nav__container .main-menu__list .dropdown > a"
        );
        dropdownAnchor.each(function () {
            let self = $(this);
            let toggleBtn = document.createElement("BUTTON");
            toggleBtn.setAttribute("aria-label", "dropdown toggler");
            toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
            self.append(function () {
                return toggleBtn;
            });
            self.find("button").on("click", function (e) {
                e.preventDefault();
                let self = $(this);
                self.toggleClass("expanded");
                self.parent().toggleClass("expanded");
                self.parent().parent().children("ul").slideToggle();
            });
        });
    }

    if ($(".mobile-nav__toggler").length) {
        $(".mobile-nav__toggler").on("click", function (e) {
            e.preventDefault();
            $(".mobile-nav__wrapper").toggleClass("expanded");
            $("body").toggleClass("locked");
        });
    }

    if ($(".search-toggler").length) {
        $(".search-toggler").on("click", function (e) {
            e.preventDefault();
            $(".search-popup").toggleClass("active");
            $(".mobile-nav__wrapper").removeClass("expanded");
            $("body").toggleClass("locked");
        });
    }

    if ($(".dynamic-year").length) {
        let date = new Date();
        $(".dynamic-year").html(date.getFullYear());
    }

    function SmoothMenuScroll() {
        var anchor = $(".scrollToLink");
        if (anchor.length) {
            anchor.children("a").bind("click", function (event) {
                if ($(window).scrollTop() > 10) {
                    var headerH = "90";
                } else {
                    var headerH = "90";
                }
                var target = $(this);
                $("html, body")
                    .stop()
                    .animate(
                        {
                            scrollTop:
                                $(target.attr("href")).offset().top -
                                headerH +
                                "px",
                        },
                        1200,
                        "easeInOutExpo"
                    );
                anchor.removeClass("current");
                anchor.removeClass("current-menu-ancestor");
                anchor.removeClass("current_page_item");
                anchor.removeClass("current-menu-parent");
                target.parent().addClass("current");
                event.preventDefault();
            });
        }
    }
    SmoothMenuScroll();

    // window load event

    $(window).on("load", function () {
        if ($(".preloader").length) {
            $(".preloader").fadeOut();
        }

        if ($(".curved-circle--item").length) {
            $(".curved-circle--item").circleType();
        }

        //Jquery Spinner / Quantity Spinner
        if ($(".quantity-spinner").length) {
            $("input.quantity-spinner").TouchSpin({
                verticalbuttons: true,
            });
        }
    });

    // window scroll event

    $(document).ready(function () {
        // Check to see if the window is top if not then display button
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $(".scroll-to-top").fadeIn();
            } else {
                $(".scroll-to-top").fadeOut();
            }
        });

        // Click event to scroll to top
        $(".scroll-to-top").click(function () {
            $("html, body").animate({ scrollTop: 0 }, 800);
            return false;
        });
    });

    if ($(".before-after-twentytwenty").length) {
        $(".before-after-twentytwenty").each(function () {
            var Self = $(this);
            var objName = Self.attr("id");
            $("#" + objName).twentytwenty();

            // hack for bs tab
            $(document).on(
                "shown.bs.tab",
                'a[data-toggle="tab"]',
                function (e) {
                    var paneTarget = $(e.target).attr("data-target");
                    var $thePane = $(".tab-pane" + paneTarget);
                    var twentyTwentyContainer = "#" + objName;
                    var twentyTwentyHeight = $thePane
                        .find(twentyTwentyContainer)
                        .height();
                    if (0 === twentyTwentyHeight) {
                        $thePane.find(twentyTwentyContainer).trigger("resize");
                    }
                }
            );
        });
    }

    // $("select:not(.ignore)").niceSelect();
})(jQuery);

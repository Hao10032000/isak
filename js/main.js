!(function (a) {
  "use strict";
  var e = {
      Android: function () {
        return navigator.userAgent.match(/Android/i);
      },
      BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
      },
      iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
      },
      Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
      },
      Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
      },
      any: function () {
        return (
          e.Android() || e.BlackBerry() || e.iOS() || e.Opera() || e.Windows()
        );
      },
    },
    n = function () {
      a("body");
      let e = a(".modal-menu-left"),
        n = a(".action-popup"),
        t = e.children(".modal-menu__body");
      if (e.length) {
        let o = function () {
            e.addClass("modal-menu--open");
          },
          s = function () {
            e.removeClass("modal-menu--open");
          };
        a(".modal-menu-left-btn").on("click", function () {
          o();
        }),
          a(".modal-menu__backdrop, .modal-menu__close").on(
            "click",
            function () {
              s();
            }
          ),
          a(".action-btn").on("click", function () {
            n.remove();
          });
      }
      e.on("click", function (e) {
        let n = a(this),
          o = n.closest("[data-modal-menu-item]"),
          s = o.data("panel");
        !s &&
          (s = o
            .children("[data-modal-menu-panel]")
            .children(".modal-menu__panel")).length &&
          (t.append(s), o.data("panel", s), s.width()),
          s && s.length && e.preventDefault();
      }),
        a(".modal-menu__body #mainnav-secondary .menu li").each(function (e) {
          0 ==
            a(".modal-menu__body #mainnav-secondary .menu li:has(ul)").find(
              ">span"
            ).length &&
            a(".modal-menu__body #mainnav-secondary .menu li:has(ul)").append(
              '<span class="icon-isak-ona-38"></span>'
            ),
            a(this).find(".sub-menu").css({ display: "none" });
        }),
        a(".modal-menu__body  #mainnav-secondary .menu li:has(ul) > span").on(
          "click",
          function (e) {
            e.preventDefault(),
              a(this).closest("li").children(".sub-menu").slideToggle(),
              a(this).closest("li").toggleClass("opened");
          }
        );
    },
    t = function () {
      var e = "desktop";
      a(window).on("load resize", function () {
        var n = "desktop",
          t = a("#wpadminbar").height();
        if (
          (matchMedia("only screen and (max-width: 1170px)").matches &&
            (n = "mobile"),
          n !== e)
        ) {
          if (((e = n), "mobile" === n)) {
            a("#mainnav").hide();
            var o = a("#mainnav_canvas").find("li:has(ul)");
            o.children("ul").hide(),
              0 == o.find(">span").length &&
                o.children("a").after('<span class="btn-submenu"></span>'),
              a(".btn-menu").removeClass("active"),
              a(".canvas-nav-wrap .inner-canvas-nav").css({ "padding-top": t }),
              a(".canvas-nav-wrap .canvas-menu-close").css({ top: t + 30 });
          } else
            a("#mainnav").show(),
              a(".canvas-nav-wrap .inner-canvas-nav").css({ "padding-top": t }),
              a(".canvas-nav-wrap .canvas-menu-close").css({ top: t + 30 }),
              a("#header").find(".canvas-nav-wrap").removeClass("active");
        }
      }),
        a(".btn-menu").on("click", function (e) {
          a(".canvas-nav-wrap").addClass("active");
        }),
        a(".canvas-nav-wrap .overlay-canvas-nav").on("click", function (e) {
          a(".canvas-nav-wrap").removeClass("active");
        }),
        a(document).on(
          "click",
          "#mainnav_canvas li .btn-submenu",
          function (e) {
            a(this).toggleClass("active").next("ul").slideToggle(300),
              e.stopImmediatePropagation();
          }
        );
    },
    o = function () {
      if (a("body").hasClass("header_sticky")) {
        let lastScrollTop = 0;
        let delta = 5;
        let ticking = false;

        function updateHeader() {
          let st = a(window).scrollTop();
          let navbarHeight = a(
            ".header_sticky .header-box-sticky"
          ).outerHeight();
          let adminBarHeight = a("#wpadminbar").length
            ? a("#wpadminbar").outerHeight()
            : 0;

          if (st < 0) st = 0;

          if (st > navbarHeight) {
            a(".header_sticky .header-box-sticky").addClass("is-fixed");
            if (st > lastScrollTop + delta) {
              a(".header_sticky .header-box-sticky").css({
                transform: "translateY(-110%)",
                top: adminBarHeight,
              });
            } else if (st < lastScrollTop - delta) {
              a(".header_sticky .header-box-sticky").css({
                transform: "translateY(0%)",
              });
            }
          } else {
            a(".header_sticky .header-box-sticky").removeClass("is-fixed");
            a(".header_sticky .header-box-sticky").css({
              transform: "translateY(-110%)",
              top: adminBarHeight,
            });
          }

          lastScrollTop = st;
          ticking = false;
        }

        a(window).on("scroll", function () {
          if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
          }
        });

        updateHeader();
      }
    },
    s = function () {
      a(document).on("click", function (e) {
        "s" != e.target.id &&
          (a(".top-search").removeClass("show"),
          a(".show-search").removeClass("active"));
      }),
        a(".show-search").on("click", function (a) {
          a.stopPropagation();
        }),
        a(".search-form").on("click", function (a) {
          a.stopPropagation();
        }),
        a(".show-search").on("click", function (e) {
          a(this).hasClass("active")
            ? a(this).removeClass("active")
            : a(this).addClass("active"),
            e.preventDefault(),
            a(".top-search").hasClass("show")
              ? a(".top-search").removeClass("show")
              : a(".top-search").addClass("show");
        });
    },
    i = function () {
      a(".page-title").hasClass("video") &&
        jQuery(function () {
          jQuery("#ptbgVideo").YTPlayer();
        });
    },
    l = function () {
      var e = a(".wrap-blog-article");
      if (a("body").hasClass("page-template")) var e = a(".wrap-blog-article");
      var e = a(".wrap-blog-article");
      a(".navigation.loadmore.blog a").on("click", function (n) {
        n.preventDefault(),
          a("<span/>", {
            class: "infscr-loading",
            text: "Loading...",
          }).appendTo(e),
          a.ajax({
            type: "GET",
            url: a(this).attr("href"),
            dataType: "html",
            data: {
              action: "load_posts_by_ajax",
              page: 2,
              security: blog.security,
            },
            success: function (n) {
              var t = a(n).find(".item"),
                o = a(n).find(".navigation.loadmore.blog a").attr("href");
              t.css({ opacity: 0 }),
                e.hasClass("blog-masonry")
                  ? e.append(t).imagesLoaded(function () {
                      t.css({ opacity: 1 }), e.masonry("appended", t);
                    })
                  : (t.css({ opacity: 1 }), e.append(t)),
                void 0 != o
                  ? (a(".navigation.loadmore.blog a").attr("href", o),
                    e.find(".infscr-loading").remove())
                  : (e
                      .find(".infscr-loading")
                      .addClass("no-ajax")
                      .text("All posts loaded.")
                      .delay(2e3)
                      .queue(function () {
                        a(this).remove();
                      }),
                    a(".navigation.loadmore.blog").remove()),
                customizable_carousel(),
                iziModal();
            },
          });
      });
    },
    c = function () {
      a(window).scroll(function () {
        a(this).scrollTop() > 500
          ? a(".go-top-main").addClass("show")
          : a(".go-top-main").removeClass("show");
      }),
        a(".go-top-main").on("click", function (e) {
          e.preventDefault(), a("html, body").animate({ scrollTop: 0 }, 0);
        });
    },
    r = function () {
      var e = a("div.customizable-carousel");
      e.length > 0 &&
        e.each(function () {
          var e = a(this),
            n = e.data("items") ? e.data("items") : 1,
            t = !e.attr("data-loop") || e.data("loop"),
            o = !!e.data("nav-dots") && e.data("nav-dots"),
            s = !!e.data("nav-arrows") && e.data("nav-arrows"),
            i = !!e.attr("data-autoplay") && e.data("autoplay"),
            l = e.attr("data-autospeed") ? e.data("autospeed") : 3500,
            c = e.attr("data-smartspeed") ? e.data("smartspeed") : 950,
            r = !!e.data("autoheight") && e.data("autoheight"),
            d = e.attr("data-space") ? e.data("space") : 15;
          a(this).owlCarousel({
            loop: t,
            items: n,
            responsive: {
              0: {
                items: e.data("xs-items") ? e.data("xs-items") : 1,
                nav: !1,
              },
              600: {
                items: e.data("sm-items") ? e.data("sm-items") : 2,
                nav: !1,
              },
              1e3: { items: e.data("md-items") ? e.data("md-items") : 3 },
              1240: { items: n },
            },
            dots: o,
            autoplayTimeout: l,
            smartSpeed: c,
            autoHeight: r,
            margin: 50,
            nav: s,
            navText: [
              '<i class="icon-isak-left"></i>',
              '<i class="icon-isak-right"></i>',
            ],
            autoplay: false,
            autoplayHoverPause: !0,
          });
        });
    },
    d = function () {
      a(window).on("load resize", function () {
        var e = a(".copyright span").outerWidth() + 100;
        a(".bottom .bg_copyright").css("min-width", e);
      });
    },
    m = function () {
      a(".btn-video").magnificPopup({
        fixedContentPos: !0,
        closeOnContentClick: !0,
        closeBtnInside: !1,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: !1,
      });
    },
    u = function () {
      a("#preloader").fadeOut("slow", function () {
        setTimeout(function () {
          a("#preloader").remove();
        }, 350);
      });
    },
    q = function () {
      var args = { duration: 250 };
      a(".widget.widget_nav_menu h2").on("click", function () {
        a(this).parent(".widget_nav_menu").toggleClass("open");
        if (!a(this).parent(".widget_nav_menu").is(".open")) {
          a(this).next().slideUp(args);
        } else {
          a(this).next().slideDown(args);
        }
      });
    };
  a(document).ready(function () {
    function updateBackgroundPosition() {
      let scrollTop = a(window).scrollTop();
      a(".page-title").css({
        "background-position": `center ${scrollTop * -0.5}px`,
      });
    }
    updateBackgroundPosition();

    a(window).on("scroll", updateBackgroundPosition);
  });

  a(document).ready(function () {
    if (a(".one-page-menu").length) {
      a(".mainnav > .menu > li > a").click(function (e) {
        e.preventDefault();
        var target = a(this).attr("href");

        setTimeout(function () {
          var targetOffset = a(target).offset().top - 70;
          a("html, body").animate(
            {
              scrollTop: targetOffset,
            },
            300,
            function () {
              var finalOffset = a(target).offset().top - 80;
              if (Math.abs(finalOffset - a(window).scrollTop()) > 5) {
                a("html, body").animate({ scrollTop: finalOffset }, 100);
              }
            }
          );
        }, 10);
      });

      a(window).on("scroll", function () {
        var scrollPos = a(window).scrollTop();
        a(".elementor-element.e-parent").each(function () {
          var top = a(this).offset().top - 200;
          var bottom = top + a(this).outerHeight();
          var id = a(this).attr("id");

          if (scrollPos >= top && scrollPos < bottom) {
            a("#mainnav > ul > li > a").removeClass("active");
            a("#mainnav > ul > li > a[href='#" + id + "']").addClass("active");
          }
        });
      });
    }
  });

    /* Switch Mode
    ---------------------------------------------------------- */
  const switchMode = () => {
    const a = jQuery; // Đảm bảo 'a' là jQuery
    const atoggles = a(".toggle-switch-mode");
    const abody = a("body");
    const alogoHeader = a(".image-switch");
    const alogoMobile = a("#logo_mode");

    if (!atoggles.length) return;

    // 1. Lưu lại link ảnh gốc (Light mode) ngay lập tức
    const initLogos = () => {
        a(".image-switch, #logo_mode").each(function () {
            const athis = a(this);
            if (!athis.data("light-original")) {
                athis.data("light-original", athis.attr("src"));
            }
        });
    };

    // 2. Hàm áp dụng Logo dựa trên trạng thái
    const applyLogo = (isDark) => {
        a(".image-switch, #logo_mode").each(function () {
            const athis = a(this);
            const lightSrc = athis.data("light-original");
            const darkSrc = athis.data("dark");
            athis.attr("src", (isDark && darkSrc) ? darkSrc : lightSrc);
        });
    };

    const updateToggles = (isDark) => {
        atoggles.toggleClass("active", isDark);
    };

    // --- BƯỚC QUAN TRỌNG: KIỂM TRA URL ---
    const urlParams = new URLSearchParams(window.location.search);
    const modeParam = urlParams.get('mode'); // Lấy chữ 'dark' hoặc 'light' từ ?mode=...

    let isDarkInitially;
    initLogos();

    if (modeParam === 'dark') {
        isDarkInitially = true;
    } else if (modeParam === 'light') {
        isDarkInitially = false;
    } else {
        // Nếu URL không có tham số, quay về kiểm tra localStorage hoặc mặc định
        const savedMode = localStorage.getItem("darkMode");
        const defaultMode = abody.data("default-mode");
        isDarkInitially = (savedMode === "enabled" || defaultMode === "dark");
    }

    // Thực thi ngay khi load trang
    abody.toggleClass("dark-mode", isDarkInitially);
    applyLogo(isDarkInitially);
    updateToggles(isDarkInitially);

    // 3. Sự kiện Click thủ công
    atoggles.on("click", function (e) {
        e.preventDefault();
        const isDark = !abody.hasClass("dark-mode");
        abody.toggleClass("dark-mode", isDark);
        updateToggles(isDark);
        applyLogo(isDark);
        localStorage.setItem("darkMode", isDark ? "enabled" : "disabled");
    });
};

    var handleOpenNav = () => {
        a(".action-open-mobile, .overlay-pop").on("click", function () {
            a(".nav-mobile-list, .overlay-pop").toggleClass("open");
            a("body").toggleClass("overflow-hidden");
            a(".btn-mobile-menu").toggleClass("close");
        });
    };

  a(function () {
    n(), o(), t(), s(), i(), l(), c(), r(), d(), m(), u(), q(), switchMode(), handleOpenNav();
  });
})(jQuery);

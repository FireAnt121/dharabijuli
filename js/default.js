/* Start Menu */
(function ($) {
    var index = 0;
    $.fn.menumaker = function (options) {
        var mainmenu = jQuery(this),
            settings = jQuery.extend({
                title: "",
                breakpoint: 1024,
                format: "dropdown",
                sticky: false
            }, options);
        return this.each(function () {
            mainmenu.prepend('<div id="menu-button" class="fa fa-bars" aria-hidden="true">' + settings.title + '</div>');
            jQuery(this).find("#menu-button").on('click', function () {
                jQuery(this).toggleClass('menu-opened');
                var mainmenu = jQuery(this).next('ul');
                if (mainmenu.hasClass('open')) {
                    mainmenu.slideToggle().removeClass('open');
                } else {
                    jQuery('ul.mobile-menu').slideToggle().addClass('open');
                    if (settings.format === "dropdown") {
                        mainmenu.find('ul').show();
                    }
                }
            });
            mainmenu.find('li ul').parent().addClass('has-sub');
            mainmenu.find('li ul').addClass('sub-menu');
            multiTg = function () {
                mainmenu.find(".has-sub").prepend('<span class="submenu-button fa fa-plus"></span>');
                mainmenu.find('.submenu-button').on('click', function () {
                    jQuery(this).toggleClass('submenu-opened');
                    if (jQuery(this).siblings('ul').hasClass('open')) {
                        jQuery(this).siblings('ul').slideToggle().removeClass('open');
                    } else {
                        jQuery(this).siblings('ul').slideToggle().addClass('open');
                    }
                });
            };
            if (settings.format === 'multitoggle') multiTg();
            else mainmenu.addClass('dropdown');
            if (settings.sticky === true) mainmenu.css('position', 'fixed');
            resizeFix = function () {
                if (jQuery(window).width() > 1024) {
                    mainmenu.find('ul').show();

                }
                if (jQuery(window).width() <= 1024) {
                    mainmenu.find('#menu-button').removeClass('menu-opened');
                    mainmenu.find('ul').hide().removeClass('open');
                }
            };
            resizeFix();
            return jQuery(window).on('resize', resizeFix);
        });
    };
})(jQuery);
jQuery(window).load(function(){
    jQuery('.preloader').delay(400).fadeOut(500);
});
(function ($) {
  $(document).ready(function(){
    $('.everest-form button').hide();
    $('.contact-us .everest-form button').show();
    $('.modal-body .fr_section5').hide();
    $('#fr-proceed').click(function(){
      $("form[id='registration']").validate({
        // Specify validation rules
        rules: {
          // The key name on the left side is the name attribute
          // of an input field. Validation rules are defined
          // on the right side
          firstname: "required",
          lastname: "required",
          email: {
            required: true,
            // Specify that email should be validated
            // by the built-in "email" rule
            email: true
          },
          password: {
            required: true,
            minlength: 5
          }
        },
        // Specify validation error messages
        messages: {
          firstname: "Please enter your firstname",
          lastname: "Please enter your lastname",
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
          form.submit();
        }
      });
      $('.everest-form button').show();
      $('#evf-form-50 .evf-field-container').hide();
      $('.modal-body .fr_section5').show();
      $('.fr-form-step .col-sm-6 h1').addClass('active');
      $('.fr-form-step .col-sm-6 hr').addClass('active');       
      $('#fr-proceed').hide();  
    });
    jQuery(document).scroll(function () {
        let s = $(window).scrollTop();

        if (s > 90){
            $('#header').css({
                'background':'#fff'
            });
            $('#header ul li a').addClass('fr-grey-fg');
            $('#header').addClass('fr-shadow-1');
            $('.header-logo').css({
                'width':'50px'
            });
        }
        else{
            $('#header').css({
                'background':'transparent'
            });
            $('#header ul li a').removeClass('fr-grey-fg');
            $('#header').removeClass('fr-shadow-1');
            $('.header-logo').css({
                'width':'100px'
            });           
        }
    });
  });
})(jQuery);
(function ($) {
    jQuery(document).ready(function () {
        jQuery(document).ready(function () {
            jQuery("#mainmenu").menumaker({
                title: "",
                format: "multitoggle"
            });
            var foundActive = false,
                activeElement, linePosition = 0,
                width = 0,
                menuLine = jQuery("#mainmenu #menu-line"),
                lineWidth, defaultPosition, defaultWidth;
            jQuery("#mainmenu > ul > li").each(function () {
                if (jQuery(this).hasClass('current-menu-item')) {
                    activeElement = jQuery(this);
                    foundActive = true;
                }
            });
            if (foundActive != true) {
                activeElement = jQuery("#mainmenu > ul > li").first();
            }
            if (foundActive == true) {
                activeElement = jQuery("#mainmenu > ul > li").first();
            }
            defaultWidth = lineWidth = activeElement.width();
            defaultPosition = linePosition = activeElement.position().left;
            menuLine.css("width", lineWidth);
            menuLine.css("left", linePosition);
            jQuery("#mainmenu > ul > li").hover(function () {
                    activeElement = $(this);
                    lineWidth = activeElement.width();
                    linePosition = activeElement.position().left;
                    menuLine.css("width", lineWidth);
                    menuLine.css("left", linePosition);
                },
                function () {
                    menuLine.css("left", defaultPosition);
                    menuLine.css("width", defaultWidth);
                });
        });
        /** Set Position of Sub-Menu **/
        var wapoMainWindowWidth = jQuery(window).width();
        jQuery('#mainmenu ul ul li').mouseenter(function () {
            var subMenuExist = jQuery(this).find('.sub-menu').length;
            if (subMenuExist > 0) {
                var subMenuWidth = jQuery(this).find('.sub-menu').width();
                var subMenuOffset = jQuery(this).find('.sub-menu').parent().offset().left + subMenuWidth;
                if ((subMenuWidth + subMenuOffset) > wapoMainWindowWidth) {
                    jQuery(this).find('.sub-menu').removeClass('submenu-left');
                    jQuery(this).find('.sub-menu').addClass('submenu-right');
                } else {
                    jQuery(this).find('.sub-menu').removeClass('submenu-right');
                    jQuery(this).find('.sub-menu').addClass('submenu-left');
                }
            }
        });
    });
})(jQuery);

/*Mobile Nav*/
function resize() {
    if (jQuery(window).width() <= 1024) {
        jQuery('#mainmenu > ul').addClass('mobile-menu');
    } else {
        jQuery('#mainmenu > ul').removeClass('mobile-menu');
    }
}
jQuery(document).ready(function () {
    jQuery(window).resize(resize);
    resize();    
});
(function($) {
    "use strict";
    // Author code here  
        jQuery('.current-menu-item,.current_page_item').addClass('active');
        /*-----------sidebar----------*/
})(jQuery);


/**lava lamp effect */
(function($) {
$(document).ready(function () {

  $('#myModal').on('show.bs.modal', function (event) {
    $('#header').hide();

  });
    $('#myModal').on('hide.bs.modal', function (event) {
      $('#header').show();
  });
    window.lavaAnimation = (function() {
        "use strict";
        var t,
          i = {
            screen: {
              elem: null,
              callback: null,
              ctx: null,
              width: 0,
              height: 0,
              left: 0,
              top: 0,
              init: function(t, i, s) {
                return (
                  (this.elem = document.getElementById(t)),
                  (this.callback = i || null),
                  "CANVAS" == this.elem.tagName &&
                    (this.ctx = this.elem.getContext("2d")),
                  window.addEventListener(
                    "resize",
                    function() {
                      this.resize();
                    }.bind(this),
                    !1
                  ),
                  (this.elem.onselectstart = function() {
                    return !1;
                  }),
                  (this.elem.ondrag = function() {
                    return !1;
                  }),
                  s && this.resize(),
                  this
                );
              },
              resize: function() {
                var t = this.elem;
                for (
                  this.width = t.offsetWidth/1.5,//speed
                    this.height = t.offsetHeight/1.5,
                    this.left = 0,
                    this.top = 0;
                  null != t;
                  t = t.offsetParent
                )
                  (this.left += t.offsetLeft), (this.top += t.offsetTop);
                this.ctx &&
                  ((this.elem.width = this.width), (this.elem.height = this.height)),
                  this.callback && this.callback();
              }
            }
          },
          s = function(t, i) {
            (this.x = t),
              (this.y = i),
              (this.magnitude = t * t + i * i),
              (this.computed = 0),
              (this.force = 0);
          };
        s.prototype.add = function(t) {
          return new s(this.x + t.x, this.y + t.y);
        };
        var h = function(t) {
          var i = 0.1,
            h = 1.5;
          (this.vel = new s(
            (Math.random() > 0.5 ? 1 : -1) * (0.2 + 0.25 * Math.random()),
            (Math.random() > 0.5 ? 1 : -1) * (0.2 + Math.random())
          )),
            (this.pos = new s(
              0.2 * t.width + Math.random() * t.width * 0.6,
              0.2 * t.height + Math.random() * t.height * 0.6
            )),
            (this.size = t.wh / 20 + (Math.random() * (h - i) + i) * (t.wh / 20)),//size
            (this.width = t.width),
            (this.height = t.height);
        };
        h.prototype.move = function() {
          this.pos.x >= this.width - this.size
            ? (this.vel.x > 0 && (this.vel.x = -this.vel.x),
              (this.pos.x = this.width - this.size))
            : this.pos.x <= this.size &&
              (this.vel.x < 0 && (this.vel.x = -this.vel.x),
              (this.pos.x = this.size)),
            this.pos.y >= this.height - this.size
              ? (this.vel.y > 0 && (this.vel.y = -this.vel.y),
                (this.pos.y = this.height - this.size))
              : this.pos.y <= this.size &&
                (this.vel.y < 0 && (this.vel.y = -this.vel.y),
                (this.pos.y = this.size)),
            (this.pos = this.pos.add(this.vel));
        };
        var e = function(t, i, e, n, a) {
          (this.step = 5),
            (this.width = t),
            (this.height = i),
            (this.wh = Math.min(t, i)),
            (this.sx = Math.floor(this.width / this.step)),
            (this.sy = Math.floor(this.height / this.step)),
            (this.paint = !1),
            (this.metaFill = r(t, i, t, n, a)),
            (this.plx = [0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0]),
            (this.ply = [0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 0, 1, 0, 1]),
            (this.mscases = [0, 3, 0, 3, 1, 3, 0, 3, 2, 2, 0, 2, 1, 1, 0]),
            (this.ix = [
              1,
              0,
              -1,
              0,
              0,
              1,
              0,
              -1,
              -1,
              0,
              1,
              0,
              0,
              1,
              1,
              0,
              0,
              0,
              1,
              1
            ]),
            (this.grid = []),
            (this.balls = []),
            (this.iter = 0),
            (this.sign = 1);
          for (var o = 0; o < (this.sx + 2) * (this.sy + 2); o++)
            this.grid[o] = new s(
              (o % (this.sx + 2)) * this.step,
              Math.floor(o / (this.sx + 2)) * this.step
            );
          for (var l = 0; e > l; l++) this.balls[l] = new h(this);
        };
        (e.prototype.computeForce = function(t, i, s) {
          var h,
            e = s || t + i * (this.sx + 2);
          if (0 === t || 0 === i || t === this.sx || i === this.sy)
            h = 0.6 * this.sign;
          else {
            h = 0;
            for (var r, n = this.grid[e], a = 0; (r = this.balls[a++]); )
              h +=
                r.size *
                r.size /
                (-2 * n.x * r.pos.x -
                  2 * n.y * r.pos.y +
                  r.pos.magnitude +
                  n.magnitude);
            h *= this.sign;
          }
          return (this.grid[e].force = h), h;
        }),
          (e.prototype.marchingSquares = function(t) {
            var i = t[0],
              s = t[1],
              h = t[2],
              e = i + s * (this.sx + 2);
            if (this.grid[e].computed === this.iter) return !1;
            for (var r, n = 0, a = 0; 4 > a; a++) {
              var l = i + this.ix[a + 12] + (s + this.ix[a + 16]) * (this.sx + 2),
                d = this.grid[l].force;
              ((d > 0 && this.sign < 0) || (0 > d && this.sign > 0) || !d) &&
                (d = this.computeForce(i + this.ix[a + 12], s + this.ix[a + 16], l)),
                Math.abs(d) > 1 && (n += Math.pow(2, a));
            }
            if (15 === n) return [i, s - 1, !1];
            5 === n
              ? (r = 2 === h ? 3 : 1)
              : 10 === n
                ? (r = 3 === h ? 0 : 2)
                : ((r = this.mscases[n]), (this.grid[e].computed = this.iter));
            var p =
              this.step /
              (Math.abs(
                Math.abs(
                  this.grid[
                    i +
                      this.plx[4 * r + 2] +
                      (s + this.ply[4 * r + 2]) * (this.sx + 2)
                  ].force
                ) - 1
              ) /
                Math.abs(
                  Math.abs(
                    this.grid[
                      i +
                        this.plx[4 * r + 3] +
                        (s + this.ply[4 * r + 3]) * (this.sx + 2)
                    ].force
                  ) - 1
                ) +
                1);
            return (
              o.lineTo(
                this.grid[i + this.plx[4 * r] + (s + this.ply[4 * r]) * (this.sx + 2)]
                  .x +
                  this.ix[r] * p,
                this.grid[
                  i + this.plx[4 * r + 1] + (s + this.ply[4 * r + 1]) * (this.sx + 2)
                ].y +
                  this.ix[r + 4] * p
              ),
              (this.paint = !0),
              [i + this.ix[r + 4], s + this.ix[r + 8], r]
            );
          }),
          (e.prototype.renderMetaballs = function() {
            for (var t, i = 0; (t = this.balls[i++]); ) t.move();
            for (
              this.iter++,
                this.sign = -this.sign,
                this.paint = !1,
                o.fillStyle = this.metaFill,
                o.beginPath(),
                i = 0;
              (t = this.balls[i++]);
      
            ) {
              var s = [
                Math.round(t.pos.x / this.step),
                Math.round(t.pos.y / this.step),
                !1
              ];
              do s = this.marchingSquares(s);
              while (s);
              this.paint &&
                (o.fill(), o.closePath(), o.beginPath(), (this.paint = !1));
            }
          });
        var r = function(t, i, s, h, e) {
          var r = o.createRadialGradient(t / 1, i / 1, 0, t / 1, i / 1, s);
          return r.addColorStop(0, h), r.addColorStop(1, e), r;
        };
        if (document.getElementById("lamp-anim")) {
          var n = function() {
              requestAnimationFrame(n),
                o.clearRect(0, 0, a.width, a.height),
                t.renderMetaballs();
            },
            a = i.screen.init("lamp-anim", null, !0),
            o = a.ctx;
          a.resize(), (t = new e(a.width, a.height, 6, "rgba(225, 225, 225,0.1)", "rgba(225, 225,225,0.3)"));
        }
        return { run: n };
      })();
      
      if (document.getElementById("lamp-anim")) {
        lavaAnimation.run();
      }
      setTimeout(function() {
        $(".js-works-d-list").addClass("is-loaded");
      }, 150);
      
});
})(jQuery);

/**lava lamp effects end */
jQuery(document).ready(function () {
    let h = jQuery(window).height();
    let w = jQuery(window).width();
    let start = jQuery('.fr_section2').offset();
    jQuery('.fr-flow').css({
        'margin-top' : (h-10) + 'px',
        'height' : '0px',
        'margin-left' : ((w/2)) + 'px'
    });

    jQuery('.fr_section5 .col-sm-12 .col-sm-12').hover(function(){
        jQuery(this).addClass('fr_active_card');
    },function(){
        jQuery(this).removeClass('fr_active_card');  
    }
    );
    // jQuery(document).scroll(function(){
    //     let s = jQuery(document).scrollTop();

        
    //     if(s > (h/2) && s < 2700){
    //         jQuery('.fr-flow').css({
    //             'height' : ((s*1.3-h) ) +'px'
    //         });
    //     }
    //     else if( s <= (h/2))
    //     {
    //         jQuery('.fr-flow').css({
    //             'height' : '0px'
    //         });
    //     }
    //     console.log(s);
    // });
    jQuery(".go-top").click(function () {
        jQuery("html,body").animate({scrollTop: 0}, 1e3);
    });
    jQuery("#search-label").click(function () {
        jQuery(".search-bar").slideToggle("slow");
    });

});

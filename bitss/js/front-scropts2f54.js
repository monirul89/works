var nc = jQuery.noConflict();
nc(document).ready(function () {
    if (nc('html').hasClass('desktop') && nc('body').hasClass('home')) {
        new WOW().init();
    }
    nc('.taglines').owlCarousel({
        animateOut: 'fadeOutLeft',
        animateIn: 'fadeInRight',
        items: 1,
        margin: 0,
        stagePadding: 0,
        autoplay: true,
        loop: true,
        dots: true,
    });
    var $container = nc('#tiles-container');
    nc('.ftiles-img img', $container).each(function () {
        var src = nc(this).attr('src');
        nc(this).parent().css('background-image', 'url(' + src + ')');
    })
    $container.imagesLoaded(function () {

        $container.packery({
            itemSelector: '.ftiles-box',
            isHorizontal: false,
            gutter: 0,
            rowHeight: 10,
        });
    });
});

(function ($) {
    var evlSlide = {
        option: {
            baseWidth: 0,
            slideWidth: 0,
            slideItemCount: 0,
            matchMedia: '(max-width: 1145px)',
            borderWidth: 1,
        },
        init: function () {
            var _base = nc('#evl-featured');
            var element = nc('>li', _base);
            if (window.matchMedia(this.option.matchMedia).matches == true) {
                this.verticalAccordion(_base, element);
            } else {
                this.horizontalAccordion(_base, element);
            }

            evlSlide.loadEvents(_base, element);
        },
        horizontalAccordion: function (_base, element) {
            _base.removeClass('verticalAccordion').addClass('horizontalAccordion');
            var withTotal = 0;
            var activeWidth = 0;
            var borderWidth = 0;
            element.each(function () {
                var slide = $(this);

                if (slide.hasClass('active')) {
                    activeWidth = slide.width();
                }
                slide.css({
                });
                withTotal += slide.width() + 2;
                borderWidth += 2;
            });
            var collapsWidth = _base.width() - activeWidth - borderWidth;
            element.attr('data-width', collapsWidth / element.length);
        },
        verticalAccordion: function (_base, element) {
            _base.removeClass('horizontalAccordion').addClass('verticalAccordion');
            $('.active .inner-wrap', _base).slideDown('slow');


        },
        loadEvents: function (_base, element) {
            $('.slide-title', _base).live('click', function (event) {
                event.preventDefault();
                var titleActive = $(this);
                if ($(this).parent().hasClass('active')) {
                    return;
                } else {
                    if (_base.hasClass('verticalAccordion')) {
                        $('.active .inner-wrap', _base).slideUp('slow', function () {
                            $(this).parent().removeClass('active');
                            titleActive.parent().addClass('active').find('.inner-wrap').slideDown('slow');
                        })

                    } else {
                        element.removeClass('active');
                        $(this).parent().addClass('active');
                    }
                }
            }
            );
        },
        show: function () {
            nc('#evl-featured').fadeIn('slow');
        }

    }

    evlSlide.init();

    $(window).on('resize', function () {
        evlSlide.init();
    });
    $(window).on('load', function () {
        evlSlide.show();
    });

})(jQuery);

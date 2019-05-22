var nc = jQuery.noConflict();
nc(document).ready(function () {
    nc('#submit, .wpcf7-submit, .comment-reply-link, input[type="submit"]').addClass('btn btn-default');
    nc('.wp-caption').addClass('thumbnail');
    nc('.widget_rss ul').addClass('media-list');
    nc('table#wp-calendar').addClass('table table-striped');
    nc('input[type="checkbox"]').parent('label').addClass('checked ccheckbox');
    nc('input[type="checkbox"]:checked').parent('label').addClass('checked');
    nc('a[data-toggle="collapse"]').attr('data-parent', function () {
        return '#' + nc(this).closest('.panel-group').attr('id');
    });
});
nc(document).ready(function () {
    imagesLoaded('.bits-carousel', function () {
        nc(".bits-carousel").owlCarousel({
            nav: true,
            navClass: ['owl-prev wow fadeInLeft', 'owl-next wow fadeInRight'],
            navText: ["<i class=\"bits-icon-arrow-left\"><i>", "<i class=\"bits-icon-arrow-right\"><i>"],
            loop: true,
            items: 1,
            margin: 0,
            stagePadding: 0,
            smartSpeed: 450,
            autoplay: true,
            dots: true,
            autoheight:true,
        });
    });
    nc('.bits_wgallery').owlCarousel({
        nav: false,
        animateOut: 'flipOutX',
        animateIn: 'flipInX',
        items: 1,
        margin: 0,
        stagePadding: 0,
        loop: true,
        autoplay: true,
        dots: false,
        lazyLoad: true,
    });
    nc(window).scroll(function () {
        if (nc(this).scrollTop() > 150) {
            nc('.scroll-to-top').fadeIn()
        } else {
            nc('.scroll-to-top').fadeOut()
        }
    });
    nc('.scroll-to-top').click(function () {
        nc('html, body').animate({scrollTop: 0}, 800);
        return false
    });
    nc('.form-search .searchexpand').click(function () {
        nc(this).parents('.form-group').addClass('form-group-expend');
        nc('.navbar-toggle').addClass('fexpend');
    });
    nc('.form-search .searchsubmit').click(function () {
        if (nc(this).parents('form').find('input.search-query').val() == '') {
            nc(this).parents('.form-group').removeClass('form-group-expend');
            nc('.navbar-toggle').removeClass('fexpend');
            return false;
        }
    })

    nc(window).on('load resize scroll', function (event) {
        event.preventDefault('#header');
        affixLoader();
    });
    nc('form input[checked="checked"]').live('change', function () {
        nc(this).parent('label').toggleClass('checked');
    });
    nc('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
    nc('.popup-img').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }
    });
    nc('.gallery-item').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,            
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function (element) {
                return element.find('img');
            }
        }

    });
    nc('.type-gallery').magnificPopup({
        delegate: 'a.featured-image',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,            
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function (element) {
                return element.find('img');
            }
        }

    });
    nc('div.tabpanel-responsive').tabCollapse();
    nc('.term-clients .thumbnail > a').click(function(){
        return false;
    });
    function affixLoader() {
        if (window.matchMedia('(max-width:992px)').matches == false) {

            var headeAffix = nc('#header');
            var scTop = nc(window).scrollTop();
            if (scTop >= 120) {
                headeAffix.addClass('affix');
            } else {
                headeAffix.removeClass('affix');
            }
        }
    }
});
nc(document).ready(function () {

});

(function () {
    var is_webkit = navigator.userAgent.toLowerCase().indexOf('webkit') > -1, is_opera = navigator.userAgent.toLowerCase().indexOf('opera') > -1, is_ie = navigator.userAgent.toLowerCase().indexOf('msie') > -1;
    if ((is_webkit || is_opera || is_ie) && document.getElementById && window.addEventListener) {
        window.addEventListener('hashchange', function () {
            var element = document.getElementById(location.hash.substring(1));
            if (element) {
                if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName))
                    element.tabIndex = -1;
                element.focus()
            }
        }, false)
    }
})();

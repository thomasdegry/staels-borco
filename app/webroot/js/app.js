$(document).ready(function(){

    var url = '/Personal/StaelsBorco';
    $(".success-message").slideUp(0);

    $('#nav-index-link.current').one('click', function (e) {
        e.preventDefault();

        $('body, html').animate({
            scrollTop: $('.introduction').offset().top - 150
        }, 440);
    });

    $('.fake-dropdown-toggle').closest('form').find('input, textarea').on('focus', function () {
        $('.fake-dropdown-options').slideUp(220);
    });

    $('.fake-dropdown-toggle').on('click', function (e) {
        e.preventDefault();

        $('.fake-dropdown-options').slideToggle(220);
    });

    $('.fake-dropdown-option').on('click', function (e) {
        e.preventDefault();

        var select = $('#' + $(this).closest('.fake-dropdown').data('select'))
            options = select.find('option').removeAttr('selected');

        options.filter('[value="' + $(this).attr('href').substr(1) + '"]').attr('selected', 'selected');

        $('.fake-dropdown-toggle').text($(this).text()).css('color', '#3a1e39');
        $('.fake-dropdown-options').slideUp(220);
    });

    $('input[type="text"]').on('blur', function (e) {
        e.preventDefault();

        if ($(this).val().length < 2) {
            $(this).addClass('error');
        } else {
            $(this).removeClass('error');
        }
    });

    $('input[type="email"]').on('blur', function (e) {
        e.preventDefault();

        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (regex.test($(this).val())) {
            $(this).removeClass('error');
        } else {
            $(this).addClass('error');
        }
    });

    $('textarea').on('blur', function (e) {
        e.preventDefault();

        if ($(this).val().length < 2) {
            $(this).addClass('error');
        } else {
            $(this).removeClass('error');
        }
    });

    $('form').on('submit', function (e) {
        e.stopPropagation();
        e.preventDefault();

        var form = $(this),
            button = $(this).find('input[type="submit"]');

        form.find('textarea, input:not([type="submit"])').trigger('blur');

        if (form.find('error').length > 0) {
            button.val('Oops!').addClass('button-error');

            setTimeout(function () {
                button.val('Verzenden').removeClass('button-error');
            }, 2000);

            return false;
        } else {
            $.ajax({
                url: url + '/contacts/email',
                type: 'POST',
                data: $("#contactEmailForm").serialize(),
                success: function(data) {
                    $(".success-message").slideDown(400);
                    $("#contactEmailForm")[0].reset();
                }
            });
        }
    });

    // ---

    var languageIndicatorFlag,
        getLanguageIndicatorPosition = function (i) {
            var sticky = !!$('.site-nav-sticky').length;

            switch (i) {
                case 1:
                    return (sticky) ? 9 : 9;
                break;

                case 2:
                default:
                    return (sticky) ? 32 : 38;
                break;

                case 3:
                    return (sticky) ? 55 : 65;
                break;
            }
        };

    $('.language-nav-item').on('mouseenter', function (e) {
        languageIndicatorFlag = false;
        $('.language-nav-active-indicator').css('left', getLanguageIndicatorPosition($(this).index()) + '%');
    });

    $('.language-nav-item').on('mouseleave', function (e) {
        setTimeout(function () {
            if (languageIndicatorFlag) {
                var i = $('.language-nav-item .active').closest('.language-nav-item').index();
                $('.language-nav-active-indicator').css('left', getLanguageIndicatorPosition(i) + '%');
            }
        }, 200);
        languageIndicatorFlag = true;
    });

    $('.site-nav-container').on('nav:changed', function () {
        var i = $('.language-nav-item .active').closest('.language-nav-item').index();
        $('.language-nav-active-indicator').css('left', getLanguageIndicatorPosition(i) + '%');
    });

    // ----

    var $nav = $('.site-nav-container'),
        navOffset = $nav.offset().top,
        $zipper = $('.production-process-zipper'),
        $zippertop = $('.production-process-zipper-top'),
        zipperCounter = 0,
        zipperOffset = (!!$zipper.length) ? $zipper.offset().top : 0,
        scroll,
        scrollHandler = function () {
            var direction = 'down';

            if (scroll) {
                direction = (scroll > $('body').scrollTop()) ? 'up' : 'down';
            }

            scroll = $('body').scrollTop();

            if ($('body').width() < 920) return false;

            if (scroll >= navOffset) {
                if (!$nav.hasClass('site-nav-sticky')) {
                    $nav.addClass('site-nav-sticky');
                    $nav.trigger('nav:changed');
                }
            } else {
                if ($nav.hasClass('site-nav-sticky')) {
                    $nav.removeClass('site-nav-sticky');
                    $nav.trigger('nav:changed');
                }
            }

            if (!!$zipper.length) {
                if (direction === 'up') {
                    $zippertop.addClass('production-process-zipper-top-up');
                } else {
                    $zippertop.removeClass('production-process-zipper-top-up');
                }

                if (scroll >= 2858) {
                    $zipper.removeClass('production-process-zipper-sticky');
                } else if (scroll >= zipperOffset - 155) {
                    $zipper
                        .removeClass('production-process-zipper-end')
                        .addClass('production-process-zipper-sticky')
                        .css(
                            'background-position', 'center ' + (-1 * zipperCounter * 272) + 'px'
                        );
                    zipperCounter++;
                } else {
                    $zipper
                        .removeClass('production-process-zipper-end')
                        .removeClass('production-process-zipper-sticky')
                        .css(
                            'background-position', 'center top'
                        );
                }
            }
        },
        scrollFlag = true;

    $(window).on('scroll', function () {
        if (scrollFlag) {
            scrollHandler();
            scrollFlag = false;
            setTimeout(function () {
                scrollFlag = true;
            }, 15);
        }
    });

    $('.showroom-current-album').hide();

    var stapel = $('#showroom').stapel({
        gutter: 55,
        onAfterOpen: function (pileName, itemCount) {
            $('.showroom-current-album').find('h2 > span').text(pileName);
            $('.introduction').removeClass('introduction-no-bottom');
            $('.showroom-current-album').slideDown(440);
        },
        onBeforeClose: function (pileName) {
            $('.showroom-current-album').slideUp(220);
            $('.introduction').addClass('introduction-no-bottom');
        }
    });

    $('#showroom').css('margin-left', 0);

    $('.showroom-back').on('click', function (e) {
        e.preventDefault();

        stapel.closePile();
    });

    // Overlay
    var currentImages, currentImage,
        checkButtons = function () {
            var next = $('.overlay-next'),
                prev = $('.overlay-previous');

            next.css('visibility', 'visible');
            prev.css('visibility', 'visible');

            if (currentImage === 0) {
                prev.css('visibility', 'hidden');
            }

            if (currentImage === currentImages.length - 1) {
                next.css('visibility', 'hidden');   
            }
        },
        showOverlay = function () {
            $('.overlay-container').fadeIn(220, function () {
                $('.overlay-content').fadeIn(220);
            });

            $('body').on('keydown.staels', function (e) {
                e.preventDefault();
                e.stopPropagation();

                switch (e.keyCode) {
                    case 39:
                        next();
                        break;

                    case 37:
                        previous();
                        break;

                    case 27:
                        hideOverlay();
                        break;
                }
            });
        },
        hideOverlay = function () {
            $('.overlay-container').fadeOut(220, function () {
                $('.overlay-content').hide();
            });

            $('body').off('keydown.staels');
        },
        showImage = function () {
            console.log(currentImages);
            $('.overlay-content').find('img').attr('src', currentImages[currentImage]);
            checkButtons();
        },
        previous = function () {
            if (currentImage > 0) {
                currentImage--;
                showImage();
            }
        },
        next = function () {
            if (currentImage < currentImages.length - 1) {
                currentImage++;
                showImage();
            }
        };
        

    $('body').on('click', '.overlay-container', function (e) {
        if (!$(e.target).hasClass('overlay-container')) {
            return false;
        }

        hideOverlay();
    });

    $('body').on('click', '.tp-open a', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var target = $(e.target);

        currentImages = [];
        currentImage = 0;

        $('#showroom').find('li[data-pile*="' + stapel.pileName + '"] img').each(function () {
            var src = $(this).attr('data-src');

            if ($.inArray(src, currentImages) === -1) {
                currentImages.push(src);
                if (src === target.attr('data-src')) {
                    currentImage = currentImages.length - 1;
                }
            }
        });

        showImage();
        showOverlay();
    });


    $('.overlay-close').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        hideOverlay();
    });

    $('.overlay-previous').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        previous();
    });

    $('.overlay-next').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        next();        
    });



});
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Access-Control-Allow-Origin': '*',
            'Access-Control-Allow-Methods': 'GET, POST, PATCH, PUT, DELETE, OPTIONS',
            'Access-Control-Allow-Headers': ' Origin, Content-Type, X-Auth-Token'
        }
    });
    $('.login-modal').on('click', function (e) {
        // alert('test');
        e.preventDefault();
        $('#login-modal').modal('show');
    });
    $('.join-in').on('click', function (e) {
        // alert('test');
        e.preventDefault();
        $('#login-modal').modal('show');
    });
    $('.start-chat').on('click', function () {
        $('.contact-chat').css('display', 'block');
        $('.start-chat').css('display', 'none');
    });
    $('.send-message').on('click', function (e) {

        new PNotify({
            title: 'Success!',
            text: 'Message sent- you will receive a reply shortly',
            type: 'success',
            delay: 3000,
            buttons: {
                closer: false,
                sticker: false
            }
        });
    });
    $('.rating-circle').on('click', function (e) {
        e.preventDefault();
        $('#favorite-add-note').modal('show');
    });
    $('[type*="radio"]').change(function () {
        var me = $(this);
        $('#favorite-add-note').find('.selected-rating').text(me.attr('value'));
        $('.favorite_rating').val(me.attr('value'));
    });
    $('.add-to-favorites').on('click', function (e) {
        e.preventDefault();
        var favButton = $(this);
        var data = $(this).attr('data-id');
        if (favButton.hasClass('pins-favourite-delete-form-btn')) {
            var url = window.location.origin + '/pin-fav-remove/' + data;
        } else {
            var url = window.location.origin + '/pin-fav/' + data;
        }
        $.ajax({
            url: url,
            // data: data,
            type: 'POST',
            // dataType: 'json',
            error: function error() {
                console.log('error');
            },
            success: function success(data) {
                if (data == 'OK') {
                    if (favButton.hasClass('pins-favourite-delete-form-btn')) {
                        $(favButton).find('.fa').removeClass('fa-heart').addClass('fa-heart-o');
                        $(favButton).removeClass('pins-favourite-delete-form-btn').addClass('pins-favourite-form-btn');

                        new PNotify({
                            title: 'Success!',
                            text: 'The property has been removed from your favorites list!',
                            type: 'success',
                            delay: 3000,
                            buttons: {
                                closer: false,
                                sticker: false
                            }
                        });
                    } else {
                        $(favButton).find('.fa').removeClass('fa-heart-o').addClass('fa-heart');
                        $(favButton).removeClass('pins-favourite-form-btn').addClass('pins-favourite-delete-form-btn');

                        new PNotify({
                            title: 'Success!',
                            text: 'The property has been added to your favorites list!',
                            type: 'success',
                            delay: 3000,
                            buttons: {
                                closer: false,
                                sticker: false
                            }
                        });
                    }
                }
            }
        })
    })
    $("#share").jsSocials({
        shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon"]
    });
    $('.email-login-btn').on('click', function () {
        $('.social-login').css('display', 'none');
        $('.social-login-email').css('display', 'block');
    });
    $('.cansel-email-login').on('click', function () {
        $('.social-login').css('display', 'block');
        $('.social-login-email').css('display', 'none');
    });
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.preview_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo-uploader").change(function () {
       $('.preview_image').css('display', 'block');
       $('.user-image').css('display', 'none');
        readURL(this);
    });
    $('.cancale-user-image').on('click', function () {
        $('.preview_image').css('display', 'none');
        $('.user-image').css('display', 'block');
    })
});

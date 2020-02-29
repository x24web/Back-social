$(function () {
    "use strict";
    var Nav         = $('.navbar.navbar-dark'),
        $window     = $(window),
        list       = $('#number-list li');
    $('.navbar-toggler').click(function(){
        if (Nav.hasClass('scroll') && $window.scrollTop() <= 160) {
            Nav.removeClass("scroll");
        } else {
            Nav.addClass("scroll");
        }
    })
    $window.on("scroll", function () {
        if ($window.scrollTop() > 160) {
            Nav.addClass("scroll");
        } else {
            Nav.removeClass("scroll");
        }
    })
    $('.carousel').carousel({
        interval: 5000,
    })
    for(let i = 0; i < list.length; i++){
        var x = `<li><span>${i + 1}</span><p>${list[i].textContent}</p></li>`;
        $(x).insertAfter(list[i]);
        list[i].remove();
    }
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop:true,
        autoplay:true,
        autoplayTimeout: 3400,
        autoplayHoverPause:true,
        nav:true
    })
    new WOW().init();
    $('#head-page h2').html(function(){
        var text= $(this).text().trim().split(" ");
        var textnew = [],
            start = text.length;
        if(text.length > 1){
            for(let i = start - 1; i > start/2 -1 ; i--){
                textnew.unshift(text[i]);
            }
            for(let i = start - 1; i > start/2 -1 ; i--){
                text.pop();
            }
        }else if(text.length == 1){
            textnew.unshift(text[0]);
            return  (text.length > 0 ? "<span>" + textnew.join(' ') + "</span>" : textnew.join(' '));
        }
        return text.join(" ") + (text.length > 0 ? " <span>" + textnew.join(' ') + "</span>" : textnew.join(' '));
    });
    $('#head-page').html(function(){
        var x = $('#head-page .attachment-full.size-full.wp-post-image');
        $('#head-page').css({
            "background":'url(' + x.attr('src') + ')',
            "background-size":'cover'
        });
        x.remove();
    });
    if($('#pages .member').length>0){
        $('#pages .content').prepend("<div class='row'></div>");
    }
    $('#pages .member').html(function(){
        $('#pages .content .row').append($(this).clone());
        $(this).remove();
    })
    $('#contact-section').html(function(){
        $('#contact-section .social-list').html($('footer.footer-web .social-list').html());
    })
    $('#pages').append($('#location').find('iframe').attr({'width':'100%','height':'600'}))
    if($('#server-page .price-big-item').length>0){
        $('#server-page').append("<div class='plan'></div>");
    }
    $('#server-page .price-big-item').html(function(){
        $('#server-page .plan').append($(this).clone());
        $(this).remove();
    })
    $('#all-services .item .info .control .price').click(function(){
        let x = $(this).parent().parent();
        $('#Price-service .modal-title').text(x.find('.title-price-services').text());
        let plan = x.find('.custom-big-plans-services .price-big-item');
        $('#Price-service .service-pop').find('.service').remove();
        plan.each(function() {
            let title = $(this).find('.head').find('h3').text();
            let des = $(this).find('.info').find('.text').text();
            let price = $(this).find('.info').find('.buy').find('.price').text();
            let serverPlan = '<div class="service">' +
                '<div class="row d-flex align-items-center mt-3">'+
                '<div class="col-lg-3">'+
                '<h2>'+ title +'</h2>'+
                '</div>'+
                '<div class="col-lg-6">'+
                '<p>'+ des +'</p>'+
                '</div>'+
                '<div class="col-lg-3">'+
                '<h3>'+ price +'</h3>'+
                '<button data-toggle="modal" data-target="#confirm">Buy now</button>'+
                '</div>'+
                '</div>'+
                '</div>';
            $('#Price-service .service-pop').append(serverPlan);
        })
    })
    // $('.plan .head a i').click(function(e){
    //     e.defaultprevented;
    //     $(this).toggleClass('fa-arrow-circle-down');
    //     $(this).parent().parent().parent().next().toggleClass('d-none')
    //     $(this).toggleClass('fa-arrow-circle-up');
    //     $(this).parent().parent().parent().next().toggleClass('d-block')
    // })
    // Service
    // var singlesevice = $('.modal-content .collapse-service a');
    // var dataTarget;
    // var elservice;
    // singlesevice.click(function(e){
    //     if($(this).hasClass('active')){
    //     }else{
    //         $(this).addClass('active');
    //         $(this).siblings().removeClass('active')
    //         dataTarget = $(this).data("target");
    //         elservice = $(dataTarget).parent().addClass('d-block').removeClass('d-none');
    //         elservice.siblings().addClass('d-none').removeClass('d-block');
    //         }
    // })
    // customer service 
    // var customer = $('.customer-service .box');
    // var allService = [];
    // var nameService,
    //     namePlan,
    //     Price;
    // var textInfo = "";
    // customer.click(function(e){
    //     if(!$(this).hasClass('active')){
    //         $(this).addClass('active');
    //         $(this).parent().siblings().children().removeClass('active');
    //         $(this).parent().parent().siblings().find('.confirm').addClass('d-block');
    //     }
    // })
    // $('.service-pop .confirm').click(function(e){
    //     if($('.collapse-service .active i').hasClass('d-none')){
    //         $('.collapse-service .active i').removeClass('d-none').addClass('d-inline-block');
    //         nameService = $('.collapse-service .active').text().trim();
    //         namePlan = $('.service-pop .col-12.d-block .box.active .title').text();
    //         Price = $('.service-pop .col-12.d-block .box.active .price span').text();
    //         var tempservice = [];
    //         tempservice.push(nameService)
    //         tempservice.push(namePlan)
    //         tempservice.push(Price)
    //         allService.push(tempservice)
    //         var temptext = `<h3 class="text-center">${nameService}: ${namePlan} = ${Price}</h3>\n`;
    //         textInfo += temptext;
    //         $('#confirm .container')[0].innerHTML = textInfo;
    //     }
    //     if($('.collapse-service i.d-inline-block').length > 1){
    //         $('.service-pop .submit').addClass('d-block').removeClass('d-none');
    //         let total = 0;
    //         allService.forEach(x => {
    //             let z = parseFloat(x[2]);
    //             total += z;
    //         });
    //         $('.service-pop .total').addClass('d-block').removeClass('d-none');
    //         let lentotal = $('.service-pop .total p').length;
    //         for(let i = 0; i < lentotal; i++){
    //             $('.service-pop .total p')[i].innerText = total;
    //         }
    //         $('#confirm .container')[0].innerHTML += `<h3 class="text-center">Total: ${total}</h3>`;
    //     }
    // })
    // $('.service button').click(function(e){
    //    let x = $(this).siblings().find('span').text()
    //    $('#confirm .container')[0].innerHTML = `<h3 class="text-center">Price: ${x}</h3>`;
    // })
})
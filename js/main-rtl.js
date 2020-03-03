$(function () {
    "use strict";
$('.wow').html(function(){
    if($(this).hasClass('slideInLeft')){
        $(this).addClass('slideInRight').removeClass('slideInLeft');
    }
    else if($(this).hasClass('slideInRight')){
        $(this).addClass('slideInLeft').removeClass('slideInRight');
    }
})
$('[placeholder]').html(function(){
    if($(this).attr('placeholder') == "Name"){
        $(this).attr('placeholder','الاسم');
    }
    if($(this).attr('placeholder') == "Phone"){
        $(this).attr('placeholder','رقم الهاتف');
    }
    if($(this).attr('placeholder') == "Email"){
        $(this).attr('placeholder','البريد الالكتروني');
    }
    if($(this).attr('placeholder') == "Your Message..."){
        $(this).attr('placeholder','اكتب رسالتك');
    }
})
$('#contact-section input:submit').html(function(){
    if($(this).attr('value') == "Submit"){
        $(this).attr('value','إرسال');   
    }
})
$('#all-blog .control a').text('إقرا المزيد');
$('#all-services .control .view a').text('إقرا المزيد');
$('#all-services .control .price a').text('قائمة الاسعار');
if($('#Price-service .service-pop > h2').text() == "Price Plan"){
    $('#Price-service .service-pop > h2').text("خطط الاسعار");
}
if($('#custom-one .service-pop > h2').text() == "Price Plan"){
    $('#custom-one .service-pop > h2').text("خطط الاسعار");
}
if($('#custom-one .service-pop .submit button').text() == "Submit"){
    $('#custom-one .service-pop .submit button').text("إرسال");
}
if($('#confirm .modal-title').text() == "Confirm"){
    $('#confirm .modal-title').text("تاكيد");
    $('#confirm .title-section.pb-1').html("ادخل <span>معلوماتك</span>");
    $('#confirm input:submit').val('إرسال')
}
$('#customer .modal-title').text("تخصيص");
$('#customer .service-pop h2').text("اختر من بين واحده او اكثر من خدمة");
$('#customer .service-pop .row .col-12 .row:last-child .confirm button').each(function(){
    $(this).text("تأكيد");
})
$('#customer .service-pop .row .col-12 .row:last-child .submit button').each(function(){
    $(this).text("إرسال");
})
});
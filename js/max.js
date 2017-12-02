$(document).ready(function () {
    //    Twitter share

    var urlao = window.location.href;
    $(this).find(".tm19 .tn2:eq(1) a").attr('href', 'https://twitter.com/home?status=I%20want%20this%20shirt%20%21%20%40Teemolly%3A ' + urlao);

});


$(document).ready(function () {
    //    review t-shirt
    
    $('.tm36 .tn1').click(function () {
        $('.tm36 .tn1').addClass('tn3');
        $('.tm36 .tn2').removeClass('tn3');
        $('.tm16 .tn1').addClass('tsad');
        $('.tm16 .tn2').addClass('tsde');
        $('.tm16 .tn1').removeClass('tsde');
        $('.tm16 .tn2').removeClass('tsad');
    });
    $('.tm16 .tn4').click(function () {
        $('.tm36 .tn1').addClass('tn3');
        $('.tm36 .tn2').removeClass('tn3');
        $('.tm16 .tn1').addClass('tsad');
        $('.tm16 .tn2').addClass('tsde');
        $('.tm16 .tn1').removeClass('tsde');
        $('.tm16 .tn2').removeClass('tsad');
    });
    $('.tm36 .tn2').click(function () {
        $('.tm36 .tn2').addClass('tn3');
        $('.tm36 .tn1').removeClass('tn3');
        $('.tm16 .tn2').addClass('tsad');
        $('.tm16 .tn1').addClass('tsde');
        $('.tm16 .tn2').removeClass('tsde');
        $('.tm16 .tn1').removeClass('tsad');
    });
    $('.tm16 .tn5').click(function () {
        $('.tm36 .tn2').addClass('tn3');
        $('.tm36 .tn1').removeClass('tn3');
        $('.tm16 .tn2').addClass('tsad');
        $('.tm16 .tn1').addClass('tsde');
        $('.tm16 .tn2').removeClass('tsde');
        $('.tm16 .tn1').removeClass('tsad');
    });
});

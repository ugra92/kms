$('.wminimize').on('click', function(){
    $(this).parent().parent().siblings().toggle();
    $(this).children().toggleClass('fa-chevron-up fa-chevron-down')
});

$('.toggle').on("click", function(){
    $(this).parent().toggleClass('open').find('.toggle-content').fadeToggle();
});
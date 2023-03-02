$('#danhmuc').select2();
$('#tinhtrang').select2();

$(document)
.on('click','.chevron_down', function(){
    $(this).hide();
    $(this).siblings('.chevron_right').show();
    $(this).parent().siblings('.pop_menu').hide();
})

.on('click','.chevron_right', function(){
    $(this).hide();
    $(this).siblings('.chevron_down').show();
    $(this).parent().siblings('.pop_menu').show();
})
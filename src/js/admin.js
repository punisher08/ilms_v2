let dropdown = false;
$('._actions').on('click',function(){
    let target = $(this).attr('data-id');
    $('.dropdown-content').hide();
    if(dropdown){
        $('.'+target).hide();
        dropdown = false;
        
    }else{
        $('.'+target).show();
        dropdown = true;
    }
})
$('.editform_btn').on('click',function(){
    let id = $(this).attr('data-id');
    $('#form_'+id).submit();
})
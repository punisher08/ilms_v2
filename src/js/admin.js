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
let menu = false;
$('#menu').on('click',function(){
    if(menu){
        $('#aside').removeClass('hidden');
        menu = false;
    }else{
        $('#aside').addClass('hidden');
        menu = true;
    }
 })
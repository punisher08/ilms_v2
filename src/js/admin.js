let menu = true;
$('#menu').on('click',function(e){
    if(menu){
        $('#nav_menu').find('a').hide();
    }else{
        $('#nav_menu').find('a').show();
    }
})
// let export_button = true;
// $('#dropdownDividerButton').on('click',function(e){
//     $('#dropdownDivider').toggleClass('hidden');
// })
// JSON.stringify
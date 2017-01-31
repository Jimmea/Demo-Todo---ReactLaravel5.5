/**
 * Created by hung on 31/01/17.
 */

var hei = $(window).height();

// Tính số frameHeight
function calcHeightFrame(id)
{
    var divHeight = hei - 100;
    $("#"+id).height(divHeight);
}

// Chọn tab menu trong admin
function selectTab(id) {
    $(".tabs_menu_child").removeClass('tabs_menu_select active');
    $(".tabs_content_child").removeClass('tabs_content_select active');

    $("#tabs_menu_" + id).addClass('tabs_menu_select active');
    $("#tabs_content_" + id).addClass('tabs_content_select active');
}

// Đóng tab menu
function closeTabMenu(id) {
    var idtab_menu      = 'tabs_menu_' + id;
    var idtab_content   = 'tabs_content_' + id;

    if(confirm('Bạn có chắc chắn muốn đóng lại trang đang làm việc'))
    {
        $('#' + idtab_menu).remove();
        $('#' + idtab_content).remove();
    }
    return false;
}

// reload lại iframe đang hoạt động
function reload_iframe(id) {
    document.getElementById(id).src = document.getElementById(id).src;
}

$(document).ready(function() {

});
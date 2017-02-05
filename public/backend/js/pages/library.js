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
function selectTab(id)
{
    $(".tabs_menu_child").removeClass('tabs_menu_select active');
    $(".tabs_content_child").removeClass('tabs_content_select active');

    $("#tabs_menu_" + id).addClass('tabs_menu_select active');
    $("#tabs_content_" + id).addClass('tabs_content_select active');
}

// Đóng tab menu
function closeTabMenu(id)
{
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
function reload_iframe(id)
{
    document.getElementById(id).src = document.getElementById(id).src;
}



// Tong hop cac ham ho tro in danh sach
function setCheckAllTable()
{
    $('#check_all_table').change(function ()
    {
        var check_all         = $(this).attr('data-set');
        var check_all_checked = $(this).is(":checked");

        $(check_all).each(function ()
        {
            check_all_checked
                ? ($(this).prop("checked", true))
                : ($(this).prop("checked", false));
        })
    });
}

function getAllValueCheckedTable()
{
    var selected_value  = [];
    $("#dataTableList .check-one:checked").each(function ()
    {
        selected_value.push($(this).val());
    });

    return selected_value;
}

/**
 * Ham thuc hien chuc nang nhanh cua table
 *
 */
function executeFormTable()
{
    $('.execute_form').click(function ()
    {
        $action = $(this).attr('data-action');
        $href   = $('#formTable').attr('action');

        switch ($action)
        {
            case 'deleteAll':
                    var checkedArr = getAllValueCheckedTable();
                    if(checkedArr.length <1)
                    {
                        alert('Vui lòng chọn một item để thực hiện. Xin cám ơn');
                        return '';
                    }


                    // Do something

                break;

            case 'changeStatus':
                // Do something

                break;
        }
    })
}

function hoverTrContentTable()
{
    $('#tableContent tr').hover(function ()
    {
        $(this).attr('bgcolor', '#CEEED9');
    },function()
    {
        $(this).attr('bgcolor', '');
    });
}

$(document).ready(function()
{
    setCheckAllTable();
    executeFormTable();
    hoverTrContentTable();
});
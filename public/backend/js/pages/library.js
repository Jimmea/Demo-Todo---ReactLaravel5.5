/**
 * Created by hung on 31/01/17.
 * Thu vien js cho bo admin  ho tro cac ham su dung
 * Active multiple menu tab . vao block_sidebar bo comment
 * {{--onclick="return false;"--}}
 * {{--target="_blank"--}}
 * Va bo comment o ham clickMenuSidebar()
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

// click tab menu
function clickMenuSidebar() {
    $('.tab').click(function () {
        var obj           = $(this);
        var frame_id      = obj.attr('id');
        var idtab_menu    = "tabs_menu_" + frame_id;
        var idtab_content = "tabs_content_" + frame_id;
        var frame_reload  = "idframe_" + frame_id;
        var source        = obj.attr('href');
        var title         = '<span class="icon-refresh tab-icon" ' +
                            'onclick="reload_iframe(\'' + frame_reload + '\')" ' +
                            'title="Reload Tab"></span>&nbsp;&nbsp;' + obj.attr("rel");

        $(".tabs_menu_child").removeClass('tabs_menu_select active');
        $(".tabs_content_child").removeClass('tabs_content_select');

        if($("#" + idtab_content).html() != null)
        {
            $("#" + idtab_menu).addClass('active tabs_menu_select');
            $("#" + idtab_content).addClass('tabs_content_select');
            reload_iframe(frame_reload);
        }else
        {
            var closeMenu = '<span class="ui-tabs-close ui-icon ui-icon-close ui-state-hover tab-icon tab-close" data-li="'+ idtab_menu +'" ' +
                            'onclick="closeTabMenu(\''+ frame_id + '\')" title="Close Tab"><i class="icon-close"></i></span>';
            var htmlMenu = '<li id="' + idtab_menu + '" class="active tabs_menu_child tabs_menu_select">' +
                '<a class="select_tab" href="javascript:;" onClick="selectTab(\'' + frame_id + '\');">' + title + closeMenu + '</a>' +
                '</li>';

            var htmlContent	= '<div id="' + idtab_content + '" ' +
                'class="active tabs_content_child tabs_content_select">' +
                '<iframe id="' + frame_reload + '" src="' + source + '" ' +
                'frameborder="0" width="100%" ' + 'onLoad="calcHeightFrame(\'idframe_' + frame_id + '\');"></iframe>' +
                '</div>';

            $("#tabs_menu").append(htmlMenu);
            $("#tabs_content").append(htmlContent);
        }

        return false;
    });
}

// Đóng tab menu
function closeTabMenu(id)
{
    var idtab_menu      = 'tabs_menu_' + id;
    var idtab_content   = 'tabs_content_' + id;

    if(confirm('You are sure close this tab'))
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

/**
 * Ham thuc hien chuc nang nhanh cua table
 * Từ hàm này trở xuống chuyên xử lý ajax
 */
function executeFormTable()
{
    $click_flag = false;
    $('.execute_form').click(function ()
    {
        $action = $(this).attr('data-action');
        $href   = $('#formTable').attr('action');
        $token  = $("meta[name=_token]").attr('content');

        // lay thong tin cac thuoc tinh de update
        $id             = $(this).attr('data-id');
        $check_active   = $(this).attr('data-check');
        $check          = 'fa-check-circle';
        $unCheck        = 'fa-circle';

        $arrayUpdateChecked = [
            'updateShowHome','updateStatus'
        ];

        if ($arrayUpdateChecked.indexOf($action) != -1)
        {
            if($check_active == "checked")
            {
                $(this).attr('data-check', '');
                $(this).removeClass($check);
                $(this).addClass($unCheck);
            }else
            {
                $(this).attr('data-check', 'checked');
                $(this).addClass($check);
                $(this).removeClass($unCheck);
            }
        }

        // Do something
        if ($click_flag) { alert('The system is processing ...'); return ''; }

        switch ($action)
        {
            case 'deleteAll':
                    var $valueCheckedArr = getAllValueCheckedTable();
                    if($valueCheckedArr.length <1)
                    {
                        alert('Please choice a item. Thank you.');
                        return false;
                    }

                    // Send ajax
                    $click_flag = true;
                    $.ajax({
                        type    :'POST',
                        url     : $href,
                        dataType: 'json',
                        data: {
                            id: $valueCheckedArr,
                            _token  : $token,
                            action  : 'deleteall'
                        },
                    })
                    .done(function(response)
                    {
                        if (response.status == 1 || response.status == 'success')
                        {
                            for ($i=0,$total = $valueCheckedArr.length ; $i< $total; $i++)
                            {
                                $('#tr_'+$valueCheckedArr[$i]).hide('slow').remove();
                                location.reload();
                            }
                        }
                    })
                    .fail(function(e)
                    {
                        alert('The wrong is went ...');
                    })
                    .always(function()
                    {
                        $click_flag = false;
                    });

                break;

            case 'updateShowHome':
                // Send ajax
                $click_flag = true;
                $.ajax({
                    type    :'POST',
                    url     : $href,
                    dataType: 'json',
                    data: {
                        id      : $id,
                        _token  : $token,
                        action  : 'showhome'
                    }
                })
                .fail(function(e)
                {
                    alert('The wrong is went ...');
                })
                .always(function()
                {
                    $click_flag = false;
                });

                break;

            case 'updateStatus':
                // Send ajax
                $click_flag = true;
                $.ajax({
                    type    :'POST',
                    url     : $href,
                    dataType: 'json',
                    data: {
                        id      : $id,
                        _token  : $token,
                        action  : 'editstatus'
                    }
                })
                .fail(function(e)
                {
                    alert('The wrong is went ...');
                })
                .always(function()
                {
                    $click_flag = false;
                });

                break;
        }
        return false;
    })
}

// Sửa nhanh thông tin
function EditQuickXtable($url, $selector, $title)
{
    $($selector).editable({
        type: 'text',
        url: BASE_URL + $url,
        title: $title ? $title : 'Update quick',
        placement: 'top',
        send:'always'
    });
}
function initColorPicker() {
    $(".colorpicker").asColorPicker();
}

$(document).ready(function()
{
    setCheckAllTable();
    executeFormTable();
    hoverTrContentTable();
    initColorPicker();
    // clickMenuSidebar();
});
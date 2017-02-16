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
        switch ($action)
        {
            case 'deleteAll':
                    var $valueCheckedArr = getAllValueCheckedTable();
                    if($valueCheckedArr.length <1)
                    {
                        alert('Vui lòng chọn một item để thực hiện. Xin cám ơn');
                        return false;
                    }

                    // Do something
                    if ($click_flag) { alert('Hệ thống đang xử lý ...'); return ''; }

                    // Send ajax
                    $click_flag = true;
                    $.ajax({
                        type    :'POST',
                        url     : $href,
                        dataType: 'json',
                        data: {
                            admin_id: $valueCheckedArr,
                            _token  :$token,
                            action  : 'deletemany'
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
                        alert('Có lỗi xảy ra');
                    })
                    .always(function()
                    {
                        $click_flag = false;
                    });


                break;

            case 'updateShowHome':
                // Lay id
                $admin_id       = $(this).attr('data-id');
                $check_active   = $(this).attr('data-check');
                $check          = 'fa-check-circle';
                $unCheck        = 'fa-circle';

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

                // Do something
                if ($click_flag) { alert('Hệ thống đang xử lý ...'); return ''; }

                // Send ajax
                $click_flag = true;
                $.ajax({
                    type    :'POST',
                    url     : $href,
                    dataType: 'json',
                    data: {
                        id      : $admin_id,
                        _token  : $token,
                        action  : 'showhome'
                    }
                })
                .fail(function(e)
                {
                    alert('Có lỗi xảy ra');
                })
                .always(function()
                {
                    $click_flag = false;
                });

                break;

            case 'updateStatus':
                // Lay id
                $admin_id       = $(this).attr('data-id');
                $check_active   = $(this).attr('data-check');
                $check          = 'fa-check-circle';
                $unCheck        = 'fa-circle';

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

                // Do something
                if ($click_flag) { alert('Hệ thống đang xử lý ...'); return ''; }

                // Send ajax
                $click_flag = true;
                $.ajax({
                    type    :'POST',
                    url     : $href,
                    dataType: 'json',
                    data: {
                        id      : $admin_id,
                        _token  : $token,
                        action  : 'editone'
                    }
                })
                .fail(function(e)
                {
                    alert('Có lỗi xảy ra');
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

$(document).ready(function()
{
    setCheckAllTable();
    executeFormTable();
    hoverTrContentTable();
});
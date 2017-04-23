/**
 * Created by IT_PTSP on 3/2/2017.
 */
var appTag = function () {
    'use strict';
    var urlAddTag       = BASE_URL + '/tag/add';
    var urlAutocomplete = BASE_URL + '/tag';
    var urlRemoveTag    = BASE_URL + '/tag/delete';

    var tagInput = function ()
    {
        $('#tags').tagsInput({
            'height':'75px',
            'width':'100%',
            'interactive':true,
            'defaultText':'Nhập thẻ tag',
            'onAddTag': onAddTag,
            // 'onRemoveTag':onRemoveTag,
            'autocomplete_url': urlAutocomplete
        })
    }

    var onAddTag = function (txt)
    {
        var temp_key = $('#tap_temp_key').val();
        $.ajax({
            url: urlAddTag,
            type: 'POST',
            dataType: 'json',
            data: {temp_key: temp_key, tag_name:txt}
        }) ;

    }

    // var onRemoveTag = function (txt)
    // {
    //     var temp_key = $('#tap_temp_key').val();
    //     $.ajax({
    //         url: urlRemoveTag,
    //         type: 'POST',
    //         dataType: 'json',
    //         data: {temp_key: temp_key, tag_name:txt}
    //     }) ;
    // }

    return {
        init : function () {
            tagInput();
        }
    }
}();
$(document).ready(function () {
    appTag.init();
});
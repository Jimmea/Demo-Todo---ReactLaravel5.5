/**
 * Created by IT_PTSP on 3/2/2017.
 */
var appTag = function () {
    'use strict';
    var urlAddTag    = BASE_URL;
    var urlRemoveTag = BASE_URL;

    var addTag = function ()
    {

    }

    var removeTag = function ()
    {   

    }

    return {
        init : function () {
            addTag();
            removeTag();
        }
    }
}();
$(document).ready(function () {
    appTag.init();
});
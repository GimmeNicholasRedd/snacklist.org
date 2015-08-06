$(document).ready(function () {
    $('ul.navigation li').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('ul.navigation li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    })

});
$(document).ready(function() {
    var $cell = $('.cardActivity');

    //open and close cardActivity when clicked on cardActivity
    $cell.prepend('.js-expander').click(function() {

        var $thisCell = $(this).closest('.cardActivity');

        if ($thisCell.hasClass('is-collapsed')) {
            $cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed').addClass('is-inactive');
            $thisCell.removeClass('is-collapsed').addClass('is-expanded');

            if ($cell.not($thisCell).hasClass('is-inactive')) {
                //do nothing
            } else {
                $cell.not($thisCell).addClass('is-inactive');
            }

        } else {
            $thisCell.removeClass('is-expanded').addClass('is-collapsed');
            $cell.not($thisCell).removeClass('is-inactive');
        }
    });

    //close cardActivity when click on cross
    $cell.find('.js-collapser').click(function() {

        var $thisCell = $(this).closest('.cardActivity');

        $thisCell.removeClass('is-expanded').addClass('is-collapsed');
        $cell.not($thisCell).removeClass('is-inactive');

    });

});

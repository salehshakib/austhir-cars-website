/*Dropdown Menu*/
$('.austhir-dropdown').click(function () {
        $(this).attr('tabindex', 1).focus();
        $(this).toggleClass('active');
        $(this).find('.dropdown-menu').slideToggle(300);
    });
    $('.austhir-dropdown').focusout(function () {
        $(this).removeClass('active');
        $(this).find('.dropdown-menu').slideUp(300);
    });
    $('.austhir-dropdown .dropdown-menu li').click(function () {
        $(this).parents('.austhir-dropdown').find('span').text($(this).text());
        $(this).parents('.austhir-dropdown').find('input').attr('value', $(this).attr('id'));
    });
/*End Dropdown Menu*/

$(function() {
    let theme = $('html').attr('theme');
    if (theme == 'dark') {
        $('#themeSwitch').prop('checked', true)
    }

    $('#themeSwitch').on('click', function() {
        if ($(this).is(':checked')) {
            $('html').removeAttr('theme');
            $('html').attr('theme', 'dark');
            document.cookie = "theme=dark";
        }
        else {
            $('html').removeAttr('theme');
            $('html').attr('theme', 'light');
            document.cookie = "theme=light";
        }
    });

    $('.lazy').lazy();
});

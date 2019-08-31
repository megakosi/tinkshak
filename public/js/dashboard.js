(function ($) {
    $(function () {

        let userAccountBalance = $('#user-account-balance');
        let accountBalance = parseInt(userAccountBalance.text()).toLocaleString();
        userAccountBalance.text(accountBalance);

        let spaceFields = $('.space-field');

        spaceFields.each(function (index) {

            let space = $(this).attr('data-space');
            $(this).text(defaults.convertSizeToString(space));
        })
    });
})(jQuery);
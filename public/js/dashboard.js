(function ($) {
    $(function () {

        let userAccountBalance = $('#user-account-balance');
        let accountBalance = parseInt(userAccountBalance.text()).toLocaleString();
        userAccountBalance.text(accountBalance);

    });
})(jQuery);
function Defaults () {
    var $this = this;
    this.maxTagLength = 5;
    this.convertSizeToString = function (size) {


        let returnedSize = parseInt(size / 1048576);

        let postFix = "MB";
        if(returnedSize >= 1000)
        {
            returnedSize = returnedSize / 1024;
            postFix = "GB";
        }
        return returnedSize.toFixed(2) + postFix;
    };
}

var defaults = new Defaults();

(function($){
    $(function(){


        $('.sidenav').sidenav();
        $('.parallax').parallax();


        //Enable character account
        $('input#post-title, input#account-username').characterCounter();
        $('select').formSelect();
        $('.dropdown-trigger').dropdown();

        //Chips



    }); // end of document ready
})(jQuery); // end of jQuery name space
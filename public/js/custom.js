function Defaults () {
    var $this = this;
    this.maxTagLength = 5
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
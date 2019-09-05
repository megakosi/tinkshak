let obj = {
    'username' : 'megakosi',
    'email' : 'itskosieric@gmail.com',
    'contact' : '07084419530',
    'name' : 'Kosi Eric'
};
let prop;

    for (prop in obj){
        document.getElementById(prop).value = obj[prop];
    }


var countriesCodes = JSON.parse($('#registration-country-code').attr('data-countries-codes'));
var country = document.getElementById('country');
var registrationCountryCode = $('#registration-country-code');

function changeCountryCode() {

    var selectedCountry = country.options[country.selectedIndex].value;

    registrationCountryCode.text('+'+countriesCodes[selectedCountry]);

}


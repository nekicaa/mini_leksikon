function phonenumeric()
{
    var phoneNo = document.forms["forma"]["phone"].value;
    var numbers = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    // this doesn't work -> no validation!
    if(phoneNo.value.match(numbers)){
        return true;
    }else{
        alert('Broj telefona podrazumeva da se koriste samo brojevi!');
        return false;
    }
}
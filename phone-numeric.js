function allnumeric(inputtxt)
   {
      var numbers = /^[0-9]+$/;
      if(inputtxt.value.match(numbers))
      {
      document.forma.phone.focus();
      return true;
      }
      else
      {
      alert('Unesite samo brojeve za broj telefona!');
      document.forma.phone.focus();
      return false;
      }
   }
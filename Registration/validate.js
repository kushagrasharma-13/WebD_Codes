function validate()
  {
    var x = document.getElementById("Number").value;
    var y = document.getElementById("pass").value;
    var z = document.getElementById("cpass").value;
    if (x.length != 10)
    {
      alert("Invalid Mobile Number");
      return false;
    }
    else if (y != z)
    {
    alert("password not correct") ;
    return false ;
    }
    else return true;

}
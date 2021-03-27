
function myFunction(value) {
    var x = document.getElementById("numberofpeople");
    var country = document.getElementById("visaapplycountry");

  if (value === "Immigration") {
    x.style.display = "none";
    country.style.display = "block";
  } else if(value=="Hajj") {

    x.style.display = "none";
    country.style.display = "none";

  } else if(value=="Ummrah") {
    country.style.display = "none";
    x.style.display = "block";

  } else if(value=="Ticket") {
    x.style.display = "none";
    country.style.display = "block";

  }else {//visit
    country.style.display = "block";
    x.style.display = "block";
  }
}
myFunction(document.getElementById("type").value);


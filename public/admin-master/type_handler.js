
function myFunction(value) {
    var country = document.getElementById("visaapplycountry");

  if (value === "Immigration") {
    country.style.display = "block";
  } else if(value=="Hajj") {

    country.style.display = "none";

  } else if(value=="Ummrah") {
    country.style.display = "none";

  } else if(value=="Ticket") {
    country.style.display = "block";

  }else {//visit
    country.style.display = "block";
  }
}
myFunction(document.getElementById("type").value);


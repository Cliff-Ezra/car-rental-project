/* Toggle between adding and removing the "responsive" class to top-nav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("my-topnav");
    if (x.className === "top-navbar") {
      x.className += " responsive";
    } else {
      x.className = "top-navbar";
    }
  }
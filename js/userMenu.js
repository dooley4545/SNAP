/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function userMenu() {
    document.getElementById("user-info").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.user-button img') && !event.target.matches('#user-info') && !event.target.matches('#user-info *')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


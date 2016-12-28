$(document).ready(function () {
    $("#wrapper").toggleClass("displaySidebar");
})

$("#menu-toggle").click( function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("displaySidebar");
})

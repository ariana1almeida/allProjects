$(document).ready(() => {
  $("section").load("pages/news.html");
  $("#menuNews").addClass("active");

  function removeClassMenu() {
    $("#menuNews").removeClass("active");
    $("#menuProducts").removeClass("active");
    $("#menuMedia").removeClass("active");
    $("#menuTour").removeClass("active");
  }

  $("#menuNews").click(() => {
    removeClassMenu();
    $("section").load("pages/news.html");
    $("#menuNews").addClass("active");
  });

  $("#menuProducts").click(() => {
    removeClassMenu();
    $("section").load("pages/products.html");
    $("#menuProducts").addClass("active");
  });

  $("#menuMedia").click(() => {
    removeClassMenu();
    $("section").load("pages/media.html");
    $("#menuMedia").addClass("active");
  });

  $("#menuTour").click(() => {
    removeClassMenu();
    $("section").load("pages/tour.html");
    $("#menuTour").addClass("active");
  });
});

function validate() {
  var email = document.getElementById("email").value;
  if (email === "" || email == null) {
    alert("Please type something.");
  } else {
    alert("You are now subscribed");
    var grab = document.getElementById("email");
    if (grab.value != "") {
      grab.value = "";
    }
  }
}

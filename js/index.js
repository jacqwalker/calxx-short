console.log("say hello");

// cookies popup
$(function () {
  if(localStorage.getItem('popState') != 'shown'){
      $(".cookies-popup-section").delay(2000).fadeIn();
      localStorage.setItem('popState','shown');
  } else {
    document.querySelector(".cookies-popup-section").style.display = "none";
  }
  });

$('.close-cookies-popup').click(function(e) {
    $('.cookies-popup-section').fadeOut();
  });

// set up page loading job search
$(function () {
 $("#findJobs").val("");
});

// Nav bar
function showNavBar(e) {
  e.preventDefault();
  $(".nav-header").toggleClass("visible");
}

$(".nav-icon").click(showNavBar);


// Linking find jobs to search page
var newUrl;
$("#findJobs").change(function () {
  // newUrl = $("#findJobs").val();
  newUrl = document.getElementById("findJobs").value;
  }
);

$("#findJobsButton").click(function (e) {
  e.preventDefault();
  location = newUrl;
  }
);

// job alerts popup
function showPopup () {
  document.querySelector(".overlay").style.display = "block";
  $("#myPopup").addClass("show");
  // var popup = document.getElementById("myPopup");
  // popup.addClass("show");
}

$(".job-alerts").click(showPopup);
$(".search-jobs").click(showPopup);


// close job alerts popup

function closePopup () {
  document.querySelector(".overlay").style.display = "none";
  $("#myPopup").removeClass("show");
}

$(".close-job-alerts").click(closePopup);

// Navbar Scroll Effect
window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".navbar-custom");
  if (window.scrollY > 50) {
    navbar.classList.add("navbar-scrolled");
  } else {
    navbar.classList.remove("navbar-scrolled");
  }
});

// Script Side Bar

document.addEventListener("DOMContentLoaded", function () {
  const sidebar = document.getElementById("sidebar");
  const toggleButton = document.getElementById("sidebarToggle");

  toggleButton.addEventListener("click", function () {
    sidebar.classList.toggle("show");
  });

  // Tutup sidebar saat klik di luar area sidebar
  document.addEventListener("click", function (event) {
    if (
      !sidebar.contains(event.target) &&
      !toggleButton.contains(event.target)
    ) {
      sidebar.classList.remove("show");
    }
  });
});

// Toggle Sidebar
const sidebarToggle = document.getElementById("sidebarToggle");
const sidebar = document.getElementById("sidebar");

sidebarToggle.addEventListener("click", function () {
  sidebar.classList.toggle("show");
});

// Tutup sidebar jika klik di luar
document.addEventListener("click", function (event) {
  if (
    !sidebar.contains(event.target) &&
    !sidebarToggle.contains(event.target)
  ) {
    sidebar.classList.remove("show");
  }
});

// Lightbox JS
lightbox.option({
  resizeDuration: 200,
  wrapAround: true,
});

// Instagram
function openInstagram() {
  var url = "instagram://user?username=weddingmustika";
  window.location.href = url;
  setTimeout(function () {
    window.location.href = "https://www.instagram.com/weddingmustikapekanbaru/";
  }, 3000);
}

// Tiktok
function openTikTok() {
  var url = "tiktok://user/@weddingmustika";
  window.location.href = url;
  setTimeout(function () {
    window.location.href = "https://www.tiktok.com/@weddingmustika";
  }, 3000);
}

$(document).ready(function () {
  $(".gallery img").on("click", function () {
    let imgSrc = $(this).attr("src");
    $("#modalImage").attr("src", imgSrc);
  });
  $(".thumbnail").click(function () {
    $("#mainImage").attr("src", $(this).attr("src"));
    $(".thumbnail").removeClass("active");
    $(this).addClass("active");
  });
  $("#addToCart").click(function () {
    let theme = $("#theme").val();
    let venue = $("#venue").val();
    $("#cartItems").append(`<p>${theme} - ${venue} : $2,500</p>`);
    $("#cartMessage")
      .text("Item added to cart!")
      .fadeIn()
      .delay(2000)
      .fadeOut();
  });
});

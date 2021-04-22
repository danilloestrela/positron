// src/app.js
// silence is golden
jQuery(document).ready(function ($) {
  // modal search
  $(".search-close").on('click', function () {
    $("#search-fixed-bg").hide();
    $("#search-fixed").hide();
  });

  $(".search").on('click', function () {
    $("#search-fixed-bg").show();
    $("#search-fixed").show();
  });

  // sitemap search
  $(".sitemap-close").on('click', function () {
    $("#sitemap-fixed-bg").hide();
    $("#sitemap-fixed").hide();
  });

  $('a[href$="#sitemap"]').on('click', function (e) {
    $("#sitemap-fixed-bg").show();
    $("#sitemap-fixed").show();
    e.preventDefault();
  });

  // Submenu

  $("#menu-wrapper li.menu-item").hover(function () {
    $(this).find(" > .sub-menu").css('display', 'flex');

  }, function () {
    if (!$(this).hasClass("current_page_item")) {
      $(this).find(".sub-menu").hide();
    }
  });

  // carousel

  $('.pst-quick-carousel').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: slickPrev,
    nextArrow: slickNext
  });

});
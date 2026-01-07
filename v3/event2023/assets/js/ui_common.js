$(document).ready(function() {
  
  $(".ui-open").on("click", function() {
    $("#" + $(this).data("open")).addClass("active");
  });
  
  $(".ui-close").on("click", function() {
    $("#" + $(this).data("close")).removeClass("active");
  });
  
})
$(document).ready(function () {
  $(".test").load("content.txt #test");
  smoothScroll();
  emailValidation();
});
$(window).scroll(function () {
  $('.js-fadein').each(function (i) {
    var bottom_of_object = $(this).position().top + $(this).outerHeight();
    var bottom_of_window = $(window).scrollTop() + $(window).height();
    if (bottom_of_window > bottom_of_object) {
      $(this).animate({ 'opacity': '1' }, 600);

    }
  });
});


function smoothScroll() {// Function to smooth all anchors
  $("a").on('click', function (event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {
        window.location.hash = hash;
      });
    }
  });
}
function emailValidation() {//Function to check if email is a valid email. If not submit wont be possible
  $('#email').keyup(function () {
    var checkValid = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    if (checkValid.test(this.value)) {
      $('#register-form .valid').css('display', 'block');
      setTimeout(function () {
        $('#register-form i').removeClass('hidden');
      }, 20);//Set timeout to smoothly fade in the icons
      $('.register-button--js').prop("disabled", false);
    }
  });
}

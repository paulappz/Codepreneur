$(document).ready(function() {
  responsifyTopNav();
  setUpLeanModal();
  loginTransitions();
  registrationTransitions();
  socialTransitions();
});

function responsifyTopNav() {
  var topNav = $('#myTopnav.topnav');
  $('#hamburger').on('click', function() {
    topNav.addClass('responsive');
  });

}

function setUpLeanModal() {
  $("#modal_trigger2").leanModal({top : 20, overlay : 0.6, closeButton: ".modal_close" });
}

var Forms = {
  social: $('.social_login'),
  login: $('.user_login'),
  register: $('.user_register'),
  title: $('.header_title'),
  hide: function(formType){
    this[formType].hide();
  },
  show: function(formType) {
    this[formType].show();
  }
};

function LoginTransitions() {
  $("#login_form").click(function() {
    Forms.hide('social');
    Forms.show('login');
    return false;
  });
}

function registrationTransitions() {
  $("#register_form").click(function(){
    Forms.hide('social');
    Forms.show('register');
    Forms.title.text('Register');
    return false;
  });
}

function socialTransitions() {
  $(".back_btn").click(function(){
    Forms.hide('register');
    Forms.hide('login');
    Forms.show('social');
    Forms.title.text('Login');
    return false;
  });
}

function initTwitterSlider() {
  var TwitterSlider = {
    lastTweetsList: $('#topbar .last-tweets ul'),
    lastTweets: $('#topbar .last-tweets'),
    init: function () {
      this.lastTweets.find('ul').addClass('slides');
      this.lastTweets.flexslider({
        animation: "fade",
        slideshowSpeed: 5 * 1000,
        animationDuration: 700,
        directionNav: false,
        controlNav: false,
        keyboardNav: false
      });
    }
  }
  $('#topbar .last-tweets > div').bind('tweetable_loaded', TwitterSlider.init);
}

function moreTweets() {
  $('#last-tweets-2 .list-tweets-2').tweetable({
    listClass: 'tweets-widget-2',
    username: 'envato',
    time: true,
    limit: 2,
    replies: true
  });
}

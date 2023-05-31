(function () {
  // Check if the user is logged in
  var isLoggedIn = /* Add your logic to determine if the user is logged in */;

  // Disable the back button if the user is logged in
  if (isLoggedIn) {
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
      history.go(1);
    };
  }
})();

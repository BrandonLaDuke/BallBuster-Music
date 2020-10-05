//Drawer

function openDrawer() {
  var shim = document.getElementById('drawer');
  shim.classList.add("openDrawerShim");
  var drawer = document.getElementById('nav-list');
  drawer.classList.add("openDrawer");
  console.log("Shoulda worked");
}
function closeDrawer() {
  var shim = document.getElementById('drawer');
  shim.classList.remove("openDrawerShim");
  var drawer = document.getElementById('nav-list');
  drawer.classList.remove("openDrawer");
}

//Share Buttons

var getWindowOptions = function() {
  var width = 500;
  var height = 350;
  var left = (window.innerWidth / 2) - (width / 2);
  var top = (window.innerHeight / 2) - (height / 2);

  return [
    'resizable,scrollbars,status',
    'height=' + height,
    'width=' + width,
    'left=' + left,
    'top=' + top,
  ].join();
};

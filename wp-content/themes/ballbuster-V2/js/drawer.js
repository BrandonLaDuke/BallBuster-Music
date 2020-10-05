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

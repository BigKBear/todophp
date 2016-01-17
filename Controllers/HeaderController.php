<?php
//TODO: get the menue items from the configuration
class HeaderController {
  public function index() {
    //checks the URL if it is the index page
    if ($_SERVER['REQUEST_URI'] == "/Views/login.php") {
      $_COOKIE['main_menu'] = array(null, null, 'Please login');
    }
    else {
      $_COOKIE['main_menu'] = array('Home', 'Logout','Status 1');
    }
  }
}
?>
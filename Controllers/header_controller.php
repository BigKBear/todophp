<?php
class HeaderController{
  public function index(){
    //checks the URL if it is the index page
    if($_SERVER['REQUEST_URI']=="/Views/login.php"){
     $_COOKIE['main_menu'] = array('Home',null);
    }else{
      $_COOKIE['main_menu'] = array('Home','Logout');
    }
  }
  public function logout(){
    if($_GET['logout']==true){
      session_service::clear_session();
      header("Location: ../../Views/login.php");
    }
    else{
      return;
    }
  }
}
?>
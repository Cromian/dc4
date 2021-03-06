<?php 

class Auth {
  
  public function __construct()
  {
    session_start();
  }
  
  public function logout()
  {  
    session_regenerate_id(true);    // invalidate old session ID
    session_unset(); 
    session_destroy();
    header('Location:' . SiteInfo::baseUrl() . 'login');
  }
}


?>
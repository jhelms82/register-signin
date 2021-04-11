<?php
 include('../../model/admin_db.php');
// If the user isn't logged in, force the user to login
if (!isset($_SESSION['is_valid_admin'])) {
    $action = 'login';
}


    switch($action) {
    case 'login':
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        if (is_valid_admin_login($username, $password)) {
            $_SESSION['is_valid_admin'] = true;
            include('view/admin_vehicle_list.php');
        } else {
            $login_message = 'You must login to view this page.';
            include('../view/login.php');
        }
        break;
    case 'show_login':
        include('../view/login.php');
        break;

    
    case 'register':
                $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
    //     include('/util/valid_register.php')
    //     if (valid_registration($username)){
    //     include('/util/valid_register.php');
    //     } else {
    //         (add_admin($username, $password)){
    //          $_SESSION['is_valid_admin'] = true;
    //         include('view/list_vehicles.php');
    //     }
    // }
    
    
    //     break;
  include('util/valid_admin.php');
  valid_registration($username, $password, $confirm_password);
  if ($error) {
      include('/view/register.php');
    }  else  
          {
              $_SESSION['is_valid_admin'] = add_admin($username, $password);
              include('view/vehicle_list.php');
          }
        
    
  break;
    case 'logout':
        $_SESSION = array();   // Clear all session data from memory
        session_destroy();     // Clean up the session ID
        $logout_message = 'You have been logged out.';
        include('view/login.php');
        break;
}
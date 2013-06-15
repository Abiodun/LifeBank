<?php
// General functions

// User logged in or not?
//  Checked by other methods that requires user to be logged in
// return bool
function is_logged() {
  return $_SESSION['user']['user_id'] ? true : false;
}
  
function logout() {
  $_SESSION = array();
  session_destroy();
  
  header('location:/');
  exit;  
}

/*// Escapes user input for injections
function escape($input) {
  $input = trim($input);

  if (get_magic_quotes_gpc ()) {
    $input = stripslashes($input);
  }

  // Normalize newlines
  $input = str_replace("\r", "\n", $input);
  $input = preg_replace("/\n\n+/", "\n", $input);

  // Escape HTML
  $input = htmlentities($input, ENT_QUOTES, 'UTF-8');

  return mysql_real_escape_string($input); 
}//*/

// Get the session parameter from passed key
function get_session_parameter($key) {
}

// Get gravatar from email
function get_gravatar($email, $s = 48, $d = 'mm', $r = 'g', $img = false, $atts = array()) {
  $url = 'http://www.gravatar.com/avatar/';
  $url .= md5(strtolower(trim($email)));
  $url .= "?s=$s&d=$d&r=$r";
  
  if ($img) {
    $url = '<img src="' . $url . '"';
    foreach ($atts as $key => $val)
      $url .= ' ' . $key . '="' . $val . '"';
    $url .= ' />';
  }
  
  return $url;
}


// Log (super and hospital) admin activities
function log_activity($object, $id, $action) {
}

function get_locations() {
  $row = Database::fetchRows("select location_id, name from locations order by name");
  return $row;
}

function get_location_id($name) {
  $name = Database::escape($name);
  $row = Database::fetchRows("select location_id from locations where name='$name'");
  return $row['id'];
}

// Display error in session (and unset session variable?)
function get_error() {
  $error = $_SESSION['error'];
  unset($_SESSION['error']);
  return $error;
}

// TODO:
function get_notifications($filters) {
}
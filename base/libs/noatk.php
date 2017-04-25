<?php
# NoATK 1.0 - Method against attacks of multiple accesses
# https://github.com/gmasson/noatk
# License MIT

// If your application has a session_start() before, hide the line down
// session_start();

// URL for redirect
define("NOATK_redirects", "http://127.0.0.1/");

// Per-minute access limit
define("NOATK_hits_per_minute", 30);

# ------------------------------
# DO NOT CHANGE ANYTHING AFTER HERE
# ------------------------------

// Current Minute
define("NOATK_minutes", date('i'));

// Fill in the sessions
if (empty($_SESSION['noatk'])) {
  $_SESSION['noatk'] = "yes";
  $_SESSION['noatk_hits'] = 1;
  $_SESSION['noatk_minute'] = date('i');
  if (empty($_SESSION['noatk'])) { 
    header("Location: ".NOATK_redirects);
  }
}

// Access check per minute
if ($_SESSION['noatk_hits'] == NOATK_hits_per_minute) {
  if ($_SESSION['noatk_minute'] == date('i')) {
    header("Location: ".NOATK_redirects);
  } else {
    $_SESSION['noatk_hits'] = 0;
    $_SESSION['noatk_minute'] = date('i');
  }
} else {
  $_SESSION['noatk_hits'] = $_SESSION['noatk_hits'] + 1;
}
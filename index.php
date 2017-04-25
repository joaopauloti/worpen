<?php
include "config.php";

// Language
if (file_exists(LANGUAGE)) {
  include LANGUAGE;
} else {
  include LANGUAGE_DEFAULT;
}

if (file_exists(PATH_template.'header.php')) {

  // Current Page
  if (file_exists(CURRENT_PAGE)) {
    include CURRENT_PAGE;
  } else {
    include PATH_pages."error.php";
  }

} else {
  print "<h1>Error, template not found</h1>";
}
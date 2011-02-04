<?php

/**
 * @file
 * This is a test PHP file.
 */

print 'Hello World!';

/**
 * A new function that does something useless.
 */
function do_something_useless() {
  // Set a useless variable.
  $variable = TRUE;
  // Waste time with a useless controll statement.
  if ($variable == TRUE) {
    // Waste some more time and set useless variable to FALSE.
    $variable = FALSE;
  }
  // Return the useless variable.
  return $variable;
  // A last comment on this.
}

// With this change git branch -d firstbranch should fail.

/**
 * Another testfunction.
 */
function another_test($test) {
  print_r($GLOBALS);
  foreach ($GLOBALS as $key => $value) {
    if ($value == $test) {
      return 'Was für ein Zufall!';
    }
  }
}


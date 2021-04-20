<?php

// Idexable array
  $colors = array('red', 'blue', 'green');

  print_r($colors);
  echo '<p>' . $colors[0] . '</p>';

  // PHP do not need to specify the size of the array
  // to add a new element just do:
  $colors[] = 'yellow';

  // Associative array


  $home_twons = array(
    'Joe' => 'Middletown, NY',
    'Erin' => 'West Chester, PA',
    'Dave' => 'Exton, PA',
    'Brian' => 'Grand Rapids, MI', // ADD COMMA HERE TO MAKE IT EASY TO ADD MORE LATER
  );

  echo '<pre>';
  print_r($home_twons);
  echo '</pre>';

  echo '<p>' . $home_twons['Dave'] . '</p>';


  // Multidimensional array

  $brothers = array (
    'Joe' => array (
      'age' => 30,
      'job' => 'teacher',
      'state' => 'CA',
    ),

    'John' => array(
      'age' => 33,
      'job' => 'lumberjack',
      'state' => 'BC',
    ),
    'Mario' => array(
      'age' => 29,
      'job' => 'waiter',
      'state' => 'WA',
    ),
    'Will' => array(
      'age' => 35,
      'job' => 'policeman',
      'state' => 'CA',
    ),
  );

  echo '<pre>';
  print_r($brothers);
  echo '</pre>';

  echo '<p>' . $brothers['Joe']['age'] . '</p>';

?>

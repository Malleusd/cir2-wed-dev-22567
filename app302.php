<?php
  $year = 2009;
  switch ($year) {
    case $year >= 2010 && $year <=2024;
        print "Generation Alpa";
        break;
    case $year >= 1995 && $year <=2009;
        print "Generation z";
        break;
    case $year >= 1980 && $year <=1994;
        print "Generation y";
        break;
    case $year >= 1969 && $year <=1979;
        print "Generation x";
        break;
    case $year >= 1946 && $year <=1964;
        print "Generation Boomer";
        break;
    case $year >= 1925 && $year <=1945;
        print "Generation Builder";
        break;
    default:
     print "Yaer ERROR";
     break;
  }
?>
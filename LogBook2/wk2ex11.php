<?php

  $total = 0;

  $mymarks["CO403"] = 45;
  $mymarks["CO404"] = 55;
  $mymarks["CO450"] = 65;
  $mymarks["CO451"] = 75;
  $mymarks["CO454"] = 85;
  $mymarks["CO456"] = 95;

  while(list($index, $value) = each($mymarks))
  {
    $total += $mymarks[$index];
    $average = $total /  6;
  }

  echo "Average mark: $average";
?>
<?php

function getdobbyic($icnumber = false)
{
      $y = substr($icnumber, 0, 2);
      $y = DateTime::createFromFormat('y', $y);
      $y = $y->format('Y');
      $m = substr($icnumber, 2, 2);
      $d = substr($icnumber, 4, 2);
      return $y . "-" . $m . "-" . $d;
}

function getgendercodebyic($icnumber = false)
{
      $lastvalueofic = substr($icnumber, -1);
      $evennumber = $lastvalueofic % 2 == 0;
      return ($evennumber == true) ? 2 : 1; // 2 = perempuan; 1 = lelaki
}

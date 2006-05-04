<?
## $Id$

## This file is part of CDS Invenio.
## Copyright (C) 2002, 2003, 2004, 2005, 2006 CERN.
##
## CDS Invenio is free software; you can redistribute it and/or
## modify it under the terms of the GNU General Public License as
## published by the Free Software Foundation; either version 2 of the
## License, or (at your option) any later version.
##
## CDS Invenio is distributed in the hope that it will be useful, but
## WITHOUT ANY WARRANTY; without even the implied warranty of
## MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
## General Public License for more details.  
##
## You should have received a copy of the GNU General Public License
## along with CDS Invenio; if not, write to the Free Software Foundation, Inc.,
## 59 Temple Place, Suite 330, Boston, MA 02111-1307, USA.

//----------------------------------------------------------------------
// General purpose functions
//----------------------------------------------------------------------

  function array2str($a){
    reset($a);
    $t="[";
    while(current($a))
    {
      $t.=current($a).",";
      next($a);
    }
    return ($t."]");
  }

//----------------------------------------------------------------------

  function getmicrotime(){
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec +(float)$sec);
  }

//----------------------------------------------------------------------

  function printtime(){
    $ti=gettimeofday();
    print "<font color=\"red\">[".$ti["sec"].":".$ti["usec"]."]</font><br>";
  }

//----------------------------------------------------------------------

  function printDuration( $cad, $tini )
  {
    $t1=$tini["sec"]*1000000+$tini["usec"];
    $tnow=gettimeofday();
    $t2=$tnow["sec"]*1000000+$tnow["usec"];
    $dur=($t2-$t1)/1000000;
    print "<br><font color=\"blue\">$cad: $dur sec</font><br>";
  }

//----------------------------------------------------------------------
  
  function text2HTML($text)
  {
    $text=htmlspecialchars($text);
    $text=str_replace("\n", "<br>", $text);
    $text=str_replace(" ", "&nbsp;", $text);
    return $text;
  }

//----------------------------------------------------------------------
?>

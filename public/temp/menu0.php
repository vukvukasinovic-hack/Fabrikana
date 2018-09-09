<?php

// Protection
if (!defined('ENTER')){die('Denied access!');}

$menu = "
<div id='menu'>
    <ul>
        <li><a href='".ROOT.LANG.'/'.HOMEPAGE."'><b>$c[fabrikana]</b></a></li>
        <li class='dropdown'>
            <a href='javascript:void(0)' class='dropbtn'>$c[key]</a>
            <div class='dropdown-content'>
                <a href='".ROOT.LANG.'/signin'."'>$c[signin]</a>
                <a href='".ROOT.LANG.'/signup'."'>$c[signup]</a>
                <a href='".ROOT.LANG.'/forgot'."'>$c[forgot]</a>
            </div>
        </li>
        <li class='dropdown'>
            <a href='javascript:void(0)' class='dropbtn'>$c[blog]</a>
            <div class='dropdown-content'>
                <a href='".ROOT.LANG.'/view'."'>$c[bview]</a>
                <a href='".ROOT.LANG.'/new'."'>$c[bnew]</a>
                <a href='".ROOT.LANG.'/old'."'>$c[bold]</a>
                <a href='".ROOT.LANG.'/like'."'>$c[blike]</a>
                <a href='".ROOT.LANG.'/comment'."'>$c[bcomment]</a>
            </div>
        </li>
        <li><a href='".ROOT.LANG.'/categories'."'>$c[categories]</a></li>
        <li><a href='".ROOT.LANG.'/archive'."'>$c[archive]</a></li>
        <li><a href='#' class='not-active'>$c[members]</a></li>
        <li class='dropdown'>
            <a href='javascript:void(0)' class='dropbtn'>$c[lang]</a>
            <div class='dropdown-content'>
                <a href='".ROOT.'en'.$c1.$c2.$c3.$c4.$c5."'>$c[en]</a>
                <a href='".ROOT.'cir'.$c1.$c2.$c3.$c4.$c5."'>$c[cir]</a>
                <a href='".ROOT.'lat'.$c1.$c2.$c3.$c4.$c5."'>$c[lat]</a>
            </div>
        </li>
    </ul>
</div>
";

?>

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
        <li><a href='".ROOT.LANG.'/blog'."'>$c[blog]</a></li>
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
<?php
function Generate_Navigation($page){
    global $PAGES;
$nv = '<ul>' ;
foreach($PAGES as $link){
if($link == $page){ $class = 'current' ; } else{ $class = '' ;}
$nv .= "<li><a href='./".ucfirst($link)."' class='$class'><span><img src='img/$link.png' /></span> <label>$link</label></a></li>" ;
}
$nv .= '</ul>' ;
return $nv ;
}

?>
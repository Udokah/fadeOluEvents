
<?php
$dir = "../img/gallery/" ;
$imgDir = "img/gallery/" ;
if ($handle = opendir($dir)) {
    while (false !== ($file = readdir($handle))) {
        if (!is_dir($file)) {
            ?>
            <li>
                <a href="<?php echo $imgDir.$file ?>" title="Helony Concept">
                <img src="<?php echo $imgDir.$file ?>"  alt="Image" /></a>
            </li>
        <?php
        }
    }
    closedir($handle);
}
?>
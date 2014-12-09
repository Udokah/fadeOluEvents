<?php
ini_set('upload_max_filesize', '3M');
ini_set('post_max_size', '5M');
ini_set('max_input_time', 600);
ini_set('max_execution_time', 600);

include("server.php") ;

$action = '' ;

if(isset($_POST['action'])){
	$action = $_POST['action'] ;
}


$slides_dir_path = '../../img/slides/' ;
$gallery_dir_path = '../../img/gallery/' ;

$image = new server() ;

if( $action == 'LoadImage'){
	$dir = "" ;

	if($_POST['dir'] == 'galleryDir'){
		$dir = $gallery_dir_path ;
	}
	elseif($_POST['dir'] == 'slideDir'){
		$dir = $slides_dir_path ;
	}

	$picArr = $image->LoadImages($dir);
	$html = implode("", $picArr);
	echo $html;
	exit();

} else if( $action == 'DeleteImage'){
	$delete = $image->deleteImage($_POST['imgfile']);
	echo $delete ;
	exit();
} else{

	/////// IMAGE UPLOADER  ////////////////////

	$dir = '' ;
    $imagearr = array();
   foreach ($_FILES as $key => $value) {
	$dir = $key ;
	foreach ($value as $key2 => $value2) {
		$imagearr[$key2] = $value2 ;
	}
  }

    $max_size = 3145728 ; /// 3MB
	$path = '' ;
	if( $dir == 'slideDir' ){
		$path = $slides_dir_path ;
	}else{
		$path = $gallery_dir_path ;
	}

	$name =  $imagearr['name']  ;
	$size =  $imagearr['size']  ;
	$tmp_name =  $imagearr['tmp_name']  ;
	
	unset($imagearr); // remove large variable to optimize script
	
	 	// Check if image exceeds file size
	if($size > $max_size){
    echo "your picture exceeds the max image size (3mb)" ;
	exit();
	}

	unset($max_size,$size);

	$uploadresult = $image->Upload_image( $name , $tmp_name , $path) ;

	echo $uploadresult ;
	exit();
}

?>
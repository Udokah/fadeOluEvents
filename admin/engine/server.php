<?php

class server{

	public function LoadImages($dir){
		$images = glob($dir."*.{jpg,jpeg,png,gif}", GLOB_BRACE);
		$html = $this->formatHTML($images) ;
		return $html ;
	}

	private function formatHTML($array){
		$HTML = array();
		$i = 0 ;
		foreach ($array as $key => $dir) {
			$value = substr($dir, 3) ;			
			$HTML[]  = "<fieldset id='imageSet-".$i."'>" ;
			$HTML[] .= "<figure><img src='".$value."' /></figure>" ;
			$HTML[] .= "<section>" ;
			$HTML[] .= "<a data-img='".$value."' class='view'>view</a>" ;
		    $HTML[] .= "<a data-img='".$value."' data-parent-id='imageSet-".$i."' class='delete'>delete</a>" ;
			$HTML[] .= "</section>" ;
			$HTML[] .= "</fieldset>" ;
		}
		return $HTML ;
	}

	public function deleteImage($dir){
		$return = 'unable to delete picture' ;
		if(file_exists('../' . $dir)){
			if(unlink('../' . $dir)){
				$return = 'picture has been deleted' ;
			}
		}
		return $return;
	}

	public function Upload_image( $name , $tmp , $path){
	        list($txt, $ext) = explode(".", $name);
			$ext = mb_strtolower($ext);   // change all extensgion to lowercase
			$newName = $this->get_random().time().'.'.$ext;// Create Random Name
			if(move_uploaded_file($tmp, $path.$newName)){
            $status = true ;
			}
			else{
				$status = false ;
			}
			return  $status ;
     }

     private function get_random(){
			$characters = array(
			"A","B","C","D","E","F","G","H","J","K","L","M",
			"N","P","Q","R","S","T","U","V","W","X","Y","Z",
			"1","2","3","4","5","6","7","8","9","0");

			$keys = array();

			while(count($keys) < 8) {
 			   $x = mt_rand(0, count($characters));
			    if(!in_array($x, $keys)) {
			       $keys[] = $x ;
			    }
			}
			@$random_chars = '' ;
			foreach($keys as $key){
			   @$random_chars .= $characters[$key];
			}
			return $random_chars;
	}



}

?>
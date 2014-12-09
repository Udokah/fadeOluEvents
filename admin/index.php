<!doctype html>
<html>
<head>
	<title>Picture Manager</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="../img/logo.png" />
	<meta name="robots" content="noindex, nofollow" />
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery.form.js"></script>

	<script type="text/javascript" charset="utf-8">

	$(document).ajaxStart(function(){   
		       $('.loader').show();
	}).ajaxStop(function() {
		    $('.loader').hide();    });

	$(document).ready(function(){

		var loginSession = localStorage.getItem("session");
		var loginpassword = 'fadeoluevents' ;

		if( loginSession !== loginpassword ){
			var doLogin = prompt("enter password to use this page") ;
		if( doLogin != loginpassword ){
			alert('You are not authorized to view this page');
			history.go(-1);
		}else{
			alert('welcome');
			localStorage.setItem("session", doLogin) ;
		}

		}		

		selected = localStorage.getItem("selected");
		if(selected == null ){
			selected = 'slideDir' ;
		}

		$('#uploader').attr('name', selected);	
		LoadImages(selected) ;

		var select = document.getElementById('picDir');
		var opts = select.options;
		var opt=0;
        for(opt=0; opt<opts.length; opt++) {
		var optVal = $.trim(opts[opt].value) ;
        if(optVal == selected){
			opts[opt].selected = 'selected' ;
		}
		}


		$('#close').on('click', function(e){
			e.preventDefault();
			$('.imageViewer').fadeOut('fast');
			$('#imageHolder').attr('src', ' ' );
		});

		$('body').on('click', '.view' , function(e){
			e.preventDefault();
			var img = $(this).attr('data-img');
			$('.imageViewer').fadeIn('fast', function(){
				$('#imageHolder').attr('src', img );
			});
		});  

		$('body').on('click', '.delete' , function(e){
			e.preventDefault();
			var verfiy = confirm("sure you want delete this picture ?");
			if( verfiy === true ){
				var imgFile = $(this).attr('data-img');
				var parentID = $(this).attr('data-parent-id');
				var deleteStat = '' ;
				$.post('engine/ajax.php', {'action': 'DeleteImage' , 'imgfile': imgFile } , 
					function(data) {			
			        LoadImages(selected) ;
		        });
			}			
		}); 

		$('#picDir').on('change', function(){
			var dir = $(this).val();
			localStorage.setItem("selected", dir); // set editmode to off
			selected = dir ;
			$('#uploader').attr('name', dir);		
			LoadImages(dir) ;
		});


		$('#uploader').on('change', function(){
			if($(this).val() == ''){
		     alert('no picture selected');		     
		  }else{

		  	pattern = new RegExp(/(jpg|png|jpeg|gif)$/i);
		  	if(!pattern.test($(this).val())) {
			alert('Only JPG, PNG or GIF files are allowed!');
			$(this).val(' ');
			}else{

				$('#uploadForm').ajaxForm({
	             delegation: true , 
	             resetForm: true , 
	             success: function(data){
		         if( data == 1){
		         	alert('Image has been uploaded');
		         	LoadImages(selected) ;
		         }else{
		         	alert('uploading failed');
		         }
		         },
	             error: function(){
		         alert("Picture upload failed") ;
		         },
	             }).submit();
			}

		  }
		});

	});


	function LoadImages(DirType){
		$.post('engine/ajax.php', {'action': 'LoadImage' , 'dir': DirType } , function(data) {
			$('.board').html(data);
		});
	}
		
	</script>
	



</head>
<body>

	<div class="wrapper">

	<div class="imageViewer">
    <span>
	<a href="" id="close">close</a>
	</span>
	<aside>
		<img id="imageHolder" src="" />
	</aside>
</div>

	<div class="container">
	<h2 class="title">Picture Manager</h2>

	<header>
		<ul>
		<li><span>Upload Picture</span></li>
		<li>
		<form enctype='multipart/form-data' id="uploadForm" method='post' action='engine/ajax.php' >
		<input type="file" name="pic" data-dir="" id="uploader" placeholder="choose picture">		
		</form>
		</li>
		<li><img src="img/ajax_loader.gif" class="loader" /></li>
		<li><span>Choose Directory</span></li>
		<li><select id="picDir">
			<option value="slideDir">Slide (Home)</option>
			<option value="galleryDir">Gallery</option>
		</select></li>
		
		</ul>
	</header>

	<input type="hidden" id="deletestatus" >

	<div class="board">

	</div>

	</div>
		
	</div>
</body>
</html>
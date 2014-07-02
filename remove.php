<?php


function remove_dir_and_files($dir) {

    $dir_path = $_SERVER['DOCUMENT_ROOT'].'/';
    
	// Please echo it and see what is going to deleted      echo $root.$dir; die(); 
	
  // This is the condition 
    
	if (is_dir($dir_path.$dir)) {
      
      // This is the command and default function
       exec('rm -rf '.$dir_path.$dir);
       
	      echo $dir_path.$dir."    Successfully Deleted <br/>";
	      
	     }
	else	   {
	
	    echo "This is not Directory, You can only delete the directory.";
	    
	   }
}


// Now call the functions with $directory name

remove_dir_and_files("wp-content/uploads/");


?>

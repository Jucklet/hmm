<?php
if(move_uploaded_file($_FILES[file][tmp_name],"C:\APM_Setup\htdocs\\".$_FILES[file][name])){
	echo "성공";
}else{
	echo "실패";
}
?>

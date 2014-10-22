<?php 
	$filename = "thisimage.jpgz";

	function checkImage ($filename) {
		$filenamez = array("jpg", "png", "gif");
		$mini = $filenamez[0];
		//strstr function find 'j' and print every word come along.
		$isa = strstr($filename, 'j');
		echo $isa." ";

		//compare $isa and $filename.
		if($isa == $filenamez[0]) {
			echo "Green Light";
		} else {
			echo "Red Light";
		}
	}
		echo checkImage($filename);
 ?>
 <?php
 function getcate($id_pro,$cate_data)
 {
 	foreach ($cate_data as $cate) {

 		if($id_pro==$cate["id"])
 		{
 			echo $cate["name"];
 		}
 	}
 }
 	function getbrand($id_pro,$brand_data)
 {
 	foreach ($brand_data as $brand) {

 		if($id_pro==$brand["id"])
 		{
 			echo $brand["brand"];
 		}
 	}
 }	
 
 function showcate($data,$parent_id=0,$str=""){
 	foreach($data as $key => $var){
 		$id = $var["id"];
 		$name = $var["name"];
 		if($var["parent_id"] == $parent_id){		
 			echo "<option value = '$id'>$str $name</option>";
 			showcate($data,$id,$str.'--');
 		}
 	}
 }
 function checkcolor($color,$pro_color)
 {
 	foreach ($pro_color as $key ) {
 			if($key["color_id"]==$color)
 			{
 				echo "checked=";
 			}
 		}
 }
function checksize($color,$pro_color)
 {
 	foreach ($pro_color as $key ) {
 			if($key["size_id"]==$color)				
 			{
 				echo "checked=";
 			}
 		}
 }

 function showcolor($pro_color,$color)
 {
 	foreach ($pro_color as $key) {
 		foreach($color as $key1)
 		{
 			if($key["color_id"]==$key1["id"])
 			{
 				echo "<option>".$key1["color"]."</option>";
 			}
 		}
 	}
 }
 function showsize($pro_size,$size)
 {
 	foreach ($pro_size as $key) {
 		foreach($size as $key1)
 		{
 			if($key["size_id"]==$key1["id"])
 			{
 				echo "<option>".$key1["size"]."</option>";
 			}
 		}
 	}
 }
 ?>


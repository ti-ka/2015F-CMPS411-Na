<?php


if(!isset($_SESSION)){
    session_start();
}

header("Pragma: public");
header("Cache-Control: max-age = 604800");
header("Expires: ".gmdate("D, d M Y H:i:s", time() + 604800)." GMT");


function thumbnail($image, $width, $height, $aspect) {

    //BasePath is not there
    if(strpos($image,BASE_DIR) === false) {
        $image = BASE_DIR  . $image;
    }


    if(!function_exists("imagecreatefromjpeg")){
        return $image;
    }



    $image_properties = getimagesize($image);
    $image_width = $image_properties[0];
    $image_height = $image_properties[1];
    $image_ratio = $image_width / $image_height;
    $type = $image_properties["mime"];

    if(!$width && !$height) {
        $width = $image_width;
        $height = $image_height;
    }
    if(!$width) {
        $width = round($height * $image_ratio);
    }
    if(!$height) {
        $height = round($width / $image_ratio);
    }

    if($type == "image/jpeg") {
//        header('Content-type: image/jpeg');
        $thumb = imagecreatefromjpeg($image);
    } elseif($type == "image/png") {
//        header('Content-type: image/png');
        $thumb = imagecreatefrompng($image);
    } else {
        return false;
    }

    if($aspect){

        $srcX = 0;
        $srcY = 0;
        //Required Aspect Ratio !!! Not of IMAGE
        $aspectRatio = $width / $height;

        if($image_width / $width > $image_height / $height){
            $cropHeight = $image_height;
            $cropWidth = round($image_height * $aspectRatio);
            //Centering
            $srcX = ($image_width - $cropWidth) / 2;

        } else {
            $cropWidth = $image_width;
            $cropHeight = round($image_width / $aspectRatio);
            //Centering
            $srcY = ($image_height - $cropHeight) / 2;
        }



        $temp_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($temp_image, $thumb, 0, 0, $srcX, $srcY, $width, $height, $cropWidth, $cropHeight);

        $thumbnail = imagecreatetruecolor($width, $height);
        imagecopyresampled($thumbnail, $temp_image, 0, 0, 0, 0, $width, $height, $width, $height);


    } else {

        $temp_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($temp_image, $thumb, 0, 0, 0, 0, $width, $height, $image_width, $image_height);

        $thumbnail = imagecreatetruecolor($width, $height);
        imagecopyresampled($thumbnail, $temp_image, 0, 0, 0, 0, $width, $height, $width, $height);

    }



    if($type == "image/jpeg") {
        imagejpeg($thumbnail);
    } else {
        imagepng($thumbnail);
    }

    imagedestroy($temp_image);
    imagedestroy($thumbnail);

}

$a = (isset($_GET["a"]) && $_GET["a"] == "false") ? false : true;
$h = (isset($_GET["h"])) ? $_GET["h"] : 0;
$w = (isset($_GET["w"])) ? $_GET["w"] : 0;
$i = (isset($_GET["img"])) ? $_GET["img"] : 'dot.png';


thumbnail($i, $w, $h, $a);

?>
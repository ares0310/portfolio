<?php
require_once ("../model/ModelTypeSoc.php");
class ViewTest
{
    public static function uploadImage(){  
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="submit" value="Upload Image" name="submit">
        </form>
<?php
    }
}

?>
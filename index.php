<?php

session_start();

require "classes/utils.php";

$output = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require "classes/images.php";

    $output = Images::uploadImage();
}

require "classes/components.php";

Components::pageHeader("Image Gallery", ["main"], ["pathToClipboard"]);

?>

<h2>Upload image</h2>

<form 
    method="POST" 
    action="<?php echo $_SERVER["PHP_SELF"] ?>" 
    enctype="multipart/form-data" 
    class="form"
>
    <label>Image</label>
    <input type="file" name="image" value="">

    <input class="button" type="submit" name="submitButton" value="Upload">

    <?php if ($output) {
        echo $output;
    } ?>
</form>

<h2>Gallery</h2>

<div class="gallery-container">
    <?php

    require_once "classes/images.php";
    
    Components::displayAllGalleryImages(Images::getAllImages());
    
    ?>
</div>

<?php Components::pageFooter(); ?>
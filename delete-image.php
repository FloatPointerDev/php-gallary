<?php

session_start();

require "classes/utils.php";

if (!isset($_GET["filename"])) {
    Utils::redirect("index");
    exit;
}

require "classes/images.php";

$image = Images::getSingleImage($_GET["filename"]);

if (empty($image)) {
    Utils::redirect("index");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Delete the POST
    $result = Images::deleteImage($_GET["filename"]);

    if (!$result) {
        // Could output a more sophisticated error screen here
        echo "couldn't remove the file";
        exit;
    }

    Utils::redirect("index");
    exit;
}

require "classes/components.php";

Components::pageHeader("Delete image", ["main"], []);

?>

<h2>Delete image "<?php echo Utils::escape($_GET["filename"]); ?>"?</h2>

<form
    method="POST"
    action="<?php echo $_SERVER["PHP_SELF"]; ?>?filename=<?php echo $_GET["filename"]; ?>"
    class="form dialogue"
>
    <input type="submit" name="deleteSubmit" value="Yes" class="button dialogue-button danger">

    <a href="index.php" class="button dialogue-button">No</a>
</form>

<?php Components::pageFooter(); ?>
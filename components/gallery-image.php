<div>
    <a href="<?php echo $filepath; ?>" target="_blank" class="gallery-image">
        <img src=" <?php echo $thumbpath; ?>" alt="<?php echo $filename; ?>">
    </a>

    <div class="row">
        <button 
            type="button"
            id="<?php echo Utils::$projectFilePath . "/$filepath"; ?>"
            class="button dialogue-button link-button"
        >
            Copy Link
        </button>
        <a
            href="delete-image.php?filename=<?php echo $filename; ?>"
            class="button danger dialogue-button"
        >
            Delete
        </a>
    </div>
</div>
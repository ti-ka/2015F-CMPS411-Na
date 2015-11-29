<?php use Framework\Storage\File; ?>
<div class="container"  style="background: rgba(255,255,255,.8)">


    <br />

    <div class="well">
        <br />
        <strong class="pull-right"><?= $event->getDate() ?></strong>
        <h3><?= $event->title ?></h3>
        <hr class="skinny" />
        <img class="media-object"
             style="width: 100%; margin: 20px 0; border-radius: 6px"
             src="<?= File::cropImage($event->coverPhoto,1200,300) ?>" alt="...">

        <p class="text-justify"><?= $event->description ?></p>

    </div>

</div>

<link href="assets/library/froala_editor_1.2.8/css/froala_editor.min.css" rel="stylesheet" type="text/css">
<link href="assets/library/froala_editor_1.2.8/css/froala_style.min.css" rel="stylesheet" type="text/css">
<script src="assets/library/froala_editor_1.2.8/js/froala_editor.min.js"></script>
<?php use Framework\Storage\File; ?>
<div class="container"  style="background: rgba(255,255,255,.8)">


    <br />
    <?php $i = 1; ?>
    <?php foreach ($events as $event): ?>
        <a href="blog/<?= $event->slug ?>" class="no-udl">
            <div class="well">

                <div class="media">
                    <div class="media-left media-middle">
                        <a href="blog/<?= $event->slug ?>">
                            <img class="media-object" src="<?= File::cropImage($event->coverPhoto,250,250) ?>" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?= $event->title ?></h4>
                        <strong><?= $event->dateTime ?></strong>
                        <hr class="skinny" />
                        <p class="text-justify"><?= substr($event->description,0,600) ?>...</p>
                        </div>

                    <div class="media-right media-middle" style="min-width: 200px">
                        <h4><strong><i class="fa fa-map-marker"></i> <?= $event->place ?></strong></h4>
                        <h4><strong><i class="fa fa-calendar"></i> <?= (new DateTime($event->dateTime))->format("M, d Y") ?></strong></h4>
                        <h4><strong><i class="fa fa-clock-o"></i> <?= (new DateTime($event->dateTime))->format("h:i A") ?></strong></h4>
                        <a href="events/<?= $event->slug ?>" class="btn btn-sm btn-block btn-info btn-lnk mar50"><i class="fa fa-map-marker"></i> View Map</a>
                        <a href="events/<?= $event->slug ?>" class="btn btn-sm btn-block btn-danger btn-lnk mar50">Read more</a>
                    </div>
                </div>
            </div>
        </a>
        <?php $i++; ?>
    <?php endforeach; ?>


</div>
<style>
    a.no-udl{text-decoration: none !important;}
    a.no-udl:hover{text-decoration: none !important;}
    .btn-lnk{border-radius: 0 !important;
        margin-left: 10px}
    img.media-object{
        background: #000;
        margin-right: 20px;
        border-radius: 5px;
    }
</style>
<div class="container"  style="background: rgba(255,255,255,.8)">


    <br />
    <?php $i = 1; ?>
    <?php foreach ($blogs as $blog): ?>
        <a href="blog/<?= $blog->slug ?>" class="no-udl">
            <div class="well">

                <div class="media">
                    <div class="media-left media-middle">
                        <a href="blog/<?= $blog->slug ?>">
                            <img class="media-object" src="assets/services/image.php?w=300&h=200&img=/assets/images/sample<?= $i ?>.jpg" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?= $blog->title ?></h4>
                        <strong><?= $blog->createDate ?></strong>
                        <hr class="skinny" />
                        <p class="text-justify"><?= substr($blog->content,0,490) ?>...</p>
                        <a href="blog/<?= $blog->slug ?>" class="btn btn-sm btn-info btn-lnk pull-right">Read Blog</a>
                        <a href="blog/<?= $blog->slug ?>" class="btn btn-sm btn-danger btn-lnk pull-right">View Gallery</a>
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
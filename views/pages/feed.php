<div class="container" style="background: rgba(255,255,255,0.8)">

    <br />

    <div class="row">
    <?php foreach($feeds as $feed):  ?>


       <div class="well well-sm col-md-6 col-md-offset-3">
           <h4><?= $feed->title ?></h4>
           <?php
               if( property_exists ( $feed ,  "desc" )){
                   echo $feed->desc ."...";
               }
           ?>

           <hr/>
           <h6>via <?= $feed->via ?>

           <?php
                if( property_exists ( $feed ,  "link" )){
                    echo " &bull;&bull;&bull; <a target='_blank' href='".$feed->link."'>See post</a>";
                }
           ?>
           </h6>
           <?php
               if(property_exists ( $feed ,  "image" )){
                   if( property_exists ( $feed ,  "link" )){
                       echo "<a target='_blank' href='".$feed->link."'><img src='".$feed->image."' style='width:100%'></a>";
                   } else {

                       echo "<img src='".$feed->image."' style='width:100%'>";
                   }
               }
           ?>
           <?php
               if(property_exists ( $feed ,  "likes" )){
                    echo "<hr /><h5>".$feed->likes." like(s)</h5>";
               }
           ?>
       </div>



    <?php endforeach; ?>

    </div>


</div>
<style>
    div.well{
        background-color: #ffffff;
        border-radius: 0;
        -webkit-box-shadow: 0 5px 7px #999999;
        box-shadow: 0 5px 7px #999999;
    }

    div.well h4{
        color: #1b6d85;
    }
</style>

<div class="container"  style="background: rgba(255,255,255,.8)">


    <br />

    <div class="well">
        <form action="events/add/save" method="POST"  onclick="transferContent();" enctype="multipart/form-data">

            <label>Event Title</label>
            <input type="text" class="form-control" name="title">
            <br />

            <label>Place of Event</label>
            <input type="text" class="form-control" name="place">
            <br />

            <label>Date Time</label>
            <input type="datetime" class="form-control" name="datetime">
            <br />

            <label>Event Cover Photo</label>
            <input type="file" class="form-control" name="cover-photo">
            <br />

            <label>Event Description</label>
            <textarea type="text" id="content" class="form-control" name="description" rows="20"></textarea>

            <br />
            <input onclick="transferContent();" type="submit" class="btn btn-success" value="Save/Update">
        </form>

    </div>

</div>



<link href="assets/library/froala_editor_1.2.8/css/froala_editor.min.css" rel="stylesheet" type="text/css">
<link href="assets/library/froala_editor_1.2.8/css/froala_style.min.css" rel="stylesheet" type="text/css">
<script src="assets/library/froala_editor_1.2.8/js/froala_editor.min.js"></script>
<!--[if lt IE 9]>
<script src="assets/library/froala_editor_1.2.8/js/froala_editor_ie8.min.js"></script>
<![endif]-->
<script src="assets/library/froala_editor_1.2.8/js/plugins/tables.min.js"></script>
<script src="assets/library/froala_editor_1.2.8/js/plugins/lists.min.js"></script>
<script src="assets/library/froala_editor_1.2.8/js/plugins/colors.min.js"></script>
<script src="assets/library/froala_editor_1.2.8/js/plugins/media_manager.min.js"></script>
<script src="assets/library/froala_editor_1.2.8/js/plugins/font_family.min.js"></script>
<script src="assets/library/froala_editor_1.2.8/js/plugins/font_size.min.js"></script>
<script src="assets/library/froala_editor_1.2.8/js/plugins/block_styles.min.js"></script>
<script src="assets/library/froala_editor_1.2.8/js/plugins/video.min.js"></script>

<script>
    $('textarea').editable({
        inlineMode: false,
        imageUploadParams: {
            id: 'my_editor'
        }
    });

    function transferContent(){
        var content = $("div.froala-view.froala-element.not-msie.f-basic").html();
        $("#content").val(content);
        console.log("Transfer complete");
    }


</script>

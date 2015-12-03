@extend('_layout')


@block('content')




<section id="blog-wrapper" class="section-padding content-editor">
    <div class="container">
        <h1>Create a new Blog</h1>
        <hr />

        <form action="blog/save" method="post" class="form form-horizontal">

            <div class="row">

                <div class="col-md-6">
                    <label for="blog_title" >Blog Title: </label>
                    <input id="blog_title" value="@( $post.title )" name="blog_title" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="blog_category" >Blog Category: </label>
                    <input id="blog_category" value="" name="blog_category" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="blog_cover_photo" >Cover Photo: </label>
                    <input id="blog_cover_photo" type="file" accept="image/*" value="" name="blog_cover_photo" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="blog_author" >Author: </label>
                    <input id="blog_author" type="text" value="" name="blog_author" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="blog_content" >Blog Content: </label>
                    <textarea id="blog_content" name="blog_content" class="form-control"></textarea>
                </div>
            </div>


            <br />
            <input type="submit" class="btn btn-primary" value="Save">


        </form>

    </div>
</section>




@endblock



@include('_editor')



@block('post-script-block')
<script>
    $(function() {
        $('#blog_content').froalaEditor();
    });
</script>
@endblock



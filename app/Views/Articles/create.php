<div class="container">
    <h1>Create a article</h1>
    <?php
        if ($_POST) {
            echo \Config\Services::validation()->listErrors();
        }
    ?>
    <form action="/BlogController/create" method="post">
        <div class="form-group">
            <label for="title"><strong>Title: </strong></label>
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="content"><strong>Content: </strong></label>
            <textarea name="content" class="form-control" id="content"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

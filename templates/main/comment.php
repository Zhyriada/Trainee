<?php include __DIR__ . '/../header.php'; ?>

    <h1>Comment</h1>
    <form method="post" action="/www/blog/add-comment"><div class="form-floating">
            <textarea class="form-control" name="visitore_name" required placeholder="Leave a name here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Name</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="comment" required placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Comment</label>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Add Comment</button>
        </div>

        <input type="hidden" name="post_id" value="<?php echo $_GET['post_id'] ?>">

    </form>


<?php include __DIR__ . '/../footer.php'; ?>
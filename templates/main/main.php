<?php include __DIR__ . '/../header.php'; ?>

<h1>Counter</h1>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Trainee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="blog/post">Negative Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog/post">All Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog/post">Positive Posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<h1>Post</h1>
<form method="post" action="/www/blog/add-post"><div class="form-floating">
        <textarea class="form-control" name="name" required placeholder="Leave a name here" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Name</label>
    </div>
    <div class="form-floating">
        <textarea class="form-control" name="text" required placeholder="Leave a text here" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Text</label>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Add Post</button>
    </div></form>

<?php include __DIR__ . '/../footer.php'; ?>

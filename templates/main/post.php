<?php include __DIR__ . '/../header.php'; ?>

    <table class="Blog">
        <th>name</th>
        <th>text</th>
        <?php foreach ($articles as $onePost): ?>
        <tr>
            <td> <?php echo $onePost->getName(); ?> </td>
            <td> <?php echo $onePost->getText(); ?> </td>
            <td> <a href="general.php?post_id=<?php echo $onePost->getId()?>" >
                <?php echo $onePost->getId(); ?> </a>  </td>
            <td>
                <form action="/templates/main/comment.php">
                    <button>Add Comment</button>
            </td>

            <input type="hidden" value="<?php echo $onePost->getId(); ?>"
                   name="post_id" />

            </form>
            <?php endforeach; ?>
        </tr>
    </table>

<?php include __DIR__ . '/../footer.php'; ?>
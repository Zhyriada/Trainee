<table class="Blog">
        <th>name</th>
        <th>comment</th>
        <?php foreach ($articles as $oneComment): ?>
        <tr>
            <td> <?php echo $oneComment->getName(); ?> </td>
            <td> <?php echo $oneComment->getComment(); ?> </td>
            <td> <?php echo $oneComment->getId(); ?> </td>
            <?php endforeach; ?>
        </tr>
</table>
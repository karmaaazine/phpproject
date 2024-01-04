<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <h2>Les commentaires</h2>
    <?php
    foreach($comments as $comment){
          ?> <p><strong><?= htmlspecialchars($comment['firstname']);?></strong></p>
    <em>le <?php echo $comment['french_visite_date']; ?></em>
    <em><?php echo $comment['comment']; ?></em>
    <?php
    }
    ?>
    </body>

</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BAE</title>
</head>
<body>

<?php foreach ($news as $news_item): ?>

    <h3><?php echo $news_item['title']; ?></h3>
    <div class="main">
        <?php echo $news_item['text']; ?>
    </div>
    <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>
</body>
</html>
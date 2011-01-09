
    <?php foreach($posts as $post): ?>
    <article>
        <h2><?=$h($post->title)?></h2>
        <p><?=$h($post->body)?></p>
    </article>
    <?php endforeach; ?>

<pre><?=get_class($this)?></pre>

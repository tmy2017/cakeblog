<?php

$this->extend('/Common/view');

$this->assign('title', $post['Post']['title']);

$this->start('sidebar');
?>
<li>
    <?php echo $this->Html->link('edit', ['action' => 'edit', $post['Post']['id']]); ?>
</li>
<?php $this->end(); ?>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>
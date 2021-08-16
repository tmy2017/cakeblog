<h1><?php echo $this->fetch('title'); ?></h1>
<?php echo $this->fetch('content'); ?>

<div class="actions">
    <h3>Related actions</h3>
    <ul>
        <?php $this->fetch('sidebar'); ?>
    </ul>
</div>
<h1>Objective: modify this blog app into a "Pokemon manager" = search + CRUD app! </h1>
<?php echo $this->Html->link(
    'Add Post',
    ['controllers' => 'posts', 'action' => 'add']
); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
        <th>Created</th>
    </tr>
    
    <!-- Here is where we loop through our $posts array,
        printing out post info -->
    
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php 
                    echo $this->Html->link(
                        $post['Post']['title'], 
                        ['controller' => 'posts', 'action' => 'view', $post['Post']['id']]
                    ); 
                ?>
            </td>
            <td>
                <?php
                    echo $this->Form->postLink(
                        'Delete',
                        ['action' => 'delete', $post['Post']['id']],
                        ['confirm' => 'Are you sure?']
                    );
                ?>
                <?php
                    echo $this->Html->link(
                        'Edit',
                        ['action' => 'edit', $post['Post']['id']]
                    );
                ?>
            </td>
            <td><?php echo $post['Post']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
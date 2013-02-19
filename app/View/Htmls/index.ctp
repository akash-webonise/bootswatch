<div class="container">
    <?php
        echo $this->Html->tag('h1', 'Welcome to the world of "Cake PHP"');
    ?>
    <?php
    echo $this->Form->create();
    ?>
    <?php echo $this->Form->input('User.name', array(
            'label' => array(
                'class' => 'thingy',
                'text' => 'The User Alias'
            ))
        );
    ?>
    <?php
    echo $this->Form->end('Add');
    ?>
</div>
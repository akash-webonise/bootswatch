<?php ?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>Cake PHP Assignment</title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css(array(
        'bootstrap',
        'custom'
    ));
    echo $this->fetch('meta');
    echo $this->fetch('css');
    ?>
</head>
<body>
<div class="mainOutCnt">
<?php
echo $this->element('header');
?>
<section  class="outerWrap">
    <?php
    echo $this->fetch('content');
    ?>

</section>
</div>
<?php
echo $this->element('footer');
?>

</body>
</html>
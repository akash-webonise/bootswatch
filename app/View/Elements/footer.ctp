<footer id="footer">
    <div class="container">
    Made by
    <?php
        echo $this->Html->link('Thomas Park', 'http://thomaspark.me', array('target' => '_blank'))
    ?>
    . Contact him
    <?php
        echo $this->Html->link('hello@thomaspark.me', 'mailto:hello@thomaspark.me', array('target' => '_blank'))
    ?>.<br>
    Code licensed under the
    <?php
        echo $this->Html->link('Apache License v2.0','http://www.apache.org/licenses/LICENSE-2.0')
    ?>.<br>
    Based on
    <?php
    echo $this->Html->link('Bootstrap','http://twitter.github.com/bootstrap/', array('target' => '_blank'))
    ?>
    . Hosted on
    <?php
    echo $this->Html->link('GitHub','http://pages.github.com/', array('target' => '_blank'))
    ?>. Icons from
    <?php
    echo $this->Html->link('Font Awesome','http://fortawesome.github.com/Font-Awesome/', array('target' => '_blank'))
    ?>. Web fonts from
    <?php
    echo $this->Html->link('Google','http://www.google.com/webfonts', array('target' => '_blank'))
    ?>.
    </div>
</footer>
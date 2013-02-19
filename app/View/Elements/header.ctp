<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <?php
            echo $this->Html->link('Bootswatch', '/html/index', array('class' => 'brand'));
            ?>
            <div class="nav-collapse collapse" id="main-menu">
                <ul class="nav" id="main-menu-left">
                    <li>
                        <?php
                        echo $this->Html->link('News', 'http://news.bootswatch.com');
                        ?>
                    </li>

                    <li>
                        <?php
                        echo $this->Html->link('Gallery', '../#gallery', array('id' => 'swatch-link'));
                        ?>
                    </li>
                </ul>
                <ul class="nav pull-right" id="main-menu-right">
                    <li>
                        <?php
                        echo $this->Html->link('Built With Bootstrap', 'http://builtwithbootstrap.com/', array('id' => 'swatch-link', 'target' => '_blank'));
                        ?>
                    </li>
                    <li>
                        <?php
                        echo $this->Html->link('WrapBootstrap', 'https://wrapbootstrap.com/?ref=bsw', array('target' => '_blank'));
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
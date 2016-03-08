<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <?php $user = AuthComponent::user(); ?>
        <?php if (!empty($user)): ?>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <?php endif; ?>
        <?php
        echo $this->Html->link('TREE SALE SYSTEM', array(
            'controller' => 'top',
            'action' => 'index'), array(
            'class' => 'navbar-brand',
            'style' => 'font-weight: bold;'
        ))
        ?>
    </div>
    <?php if (!empty($user)): ?>
        <?php
        switch ($user['type']) {
            case 7:
                echo $this->element('topbar_marketing');
                break;
            default : echo $this->element('topbar_default');
        }
        ?>
    <?php endif; ?>
</nav>
<div id="login-container" class="grid_6 push_4 ui-widget">
    <?php
    echo $session->flash('auth');
    echo $this->Form->create('User', array('action' => 'login'));
    echo $this->Form->input('username', array('class' => 'ui-widget-content'));
    echo $this->Form->input('password', array('class' => 'ui-widget-content') );
    echo $this->Form->end('Login');
    ?>
</div>
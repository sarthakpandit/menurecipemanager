<div class="ui-widget">
<?php
echo $this->Form->create();
echo $this->Form->input('l_name', array('class' => 'ui-widget-content', 'size' => 32));
echo $this->Form->input('s_name', array('class' => 'ui-widget-content', 'size' => 32));
echo $this->Form->button('Add Unit', array('class' => 'ui-button ui-widget ui-state-default'));
echo $this->Form->end();
?>
</div>
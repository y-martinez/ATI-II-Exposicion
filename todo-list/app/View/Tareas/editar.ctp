<?php echo $this->Form->create('Tarea'); ?>
<fieldset>
<legend> Editar Tarea </legend>
<?php
echo $this->Form->hidden('id');
echo $this->Form->input('titulo');
echo $this->Form->input('hecha');
?>
</fieldset>
<?php echo $this->Form->end('Guardar'); ?>

<?php echo $this->Html->link('Volver a la Lista',array('controller' => 'tareas', 'action' => 'index', 'full_base' => true ) ); ?>

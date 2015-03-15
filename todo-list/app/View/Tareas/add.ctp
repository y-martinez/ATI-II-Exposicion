<?php echo $this->Form->create('Tarea'); ?>
<fieldset>
<legend> Añadir Nueva Tarea </legend>
<?php
echo $this->Form->input('titulo');
echo $this->Form->input('hecha');
?>
</fieldset>
<?php echo $this->Form->end('Añadir Tarea'); ?>

<?php echo $this->Html->link('Volver a la Lista',array('controller' => 'tareas', 'action' => 'index', 'full_base' => true ) ); ?>

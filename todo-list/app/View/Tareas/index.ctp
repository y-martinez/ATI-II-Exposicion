<h2> Lista de Tareas </h2>

<?php if(empty($tareas) and empty($tareasp)): ?>
No Hay Tareas en la lista
<?php else: ?>
<table>
<tr>
<th>Titulo</th>
<th>Estatus</th>
<th>Creador</th>
<th> Modificado </th>
<th>Acciones </th>
</tr>

<?php foreach($tareasp as $tareap): ?>
<tr>
<td>
<?php echo $tareap['Tarea']['titulo'] ?>
</td>
<td>
<?php
if($tareap['Tarea']['hecha']) echo 'Hecha';
else echo 'Pendiente';
?>
</td>

<td>
<?php echo $tareap['Tarea']['created'] ?>
</td>

<td>
<?php echo $tareap['Tarea']['modified'] ?>
</td>

<td>
<?php echo $this->Html->link('Editar',array('action'=>'editar',$tareap['Tarea']['id'])); ?> |
<?php echo $this->Html->link($this->Html->image('http://skylineholiday.com/images/delete_icon.gif', array('alt' => 'Eliminar')),array('action'=>'delete',$tareap['Tarea']['id']),array('escape'=>false)); ?>
</td>
</tr>
<?php endforeach; ?>

<?php foreach($tareas as $tarea): ?>
<tr>
<td>
<?php echo $tarea['Tarea']['titulo'] ?>
</td>
<td>
<?php
if($tarea['Tarea']['hecha']) echo 'Hecha';
else echo 'Pendiente';
?>
</td>

<td>
<?php echo $tarea['Tarea']['created'] ?>
</td>

<td>
<?php echo $tarea['Tarea']['modified'] ?>
</td>

<td>
<?php echo $this->Html->link('Editar',array('action'=>'editar',$tarea['Tarea']['id'])); ?> |
<?php echo $this->Html->link($this->Html->image('http://skylineholiday.com/images/delete_icon.gif', array('alt' => 'Eliminar')),array('action'=>'delete',$tarea['Tarea']['id']),array('escape'=>false)); ?>
</td>
</tr>
<?php endforeach; ?>



</table>
<?php endif; ?>

<?php echo $this->Html->link('Agregar Tarea',array('controller' => 'tareas','action'=> 'add', 'full_base' => true) ); ?>

<?php $render('header'); ?>

<a href="<?=$base;?>/novo">Novo Usuário</a>

<table border="1" width=100%>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
           <td><?=$usuario['id'];?> 
           <td><?=$usuario['nome'];?> 
           <td><?=$usuario['email'];?>
           <td>
               <a href="<?=$base;?>/usuario/<?=$usuario['id']?>/editar">[ editar ]</a>
               <a href="<?=$base;?>/usuario/<?=$usuario['id']?>/excluir">[ excluir ]</a>
           </td> 
        </tr>
    <?php endforeach;?>
</table>

<?php $render('footer');?>
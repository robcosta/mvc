<?php $render('header')?>

<h2>Editar Usuário: <?=$usuario['id'];?></h2>
<form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar" style ="width:200px">
    <fieldset>
        <legend>Edição</legend>
        <label>Nome:</label><br/>
        <input type="text" name='nome'value="<?=$usuario['nome'];?>"/><br/><br/>        
        <label>Email:</label><br/>
        <input type="email" name='email' value="<?=$usuario['email'];?>"/><br/><br/>      
        <input type="submit" value="Salvar"/><br/>        
    </fieldset>
</form>

<?php $render('footer')?>
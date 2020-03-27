<?php $render('header')?>

<h2>Adicionar novo Usuário</h2>

<form method="POST" action="<?=$base;?>/novo" style ="width:200px">
    <fieldset>
        <legend>Cadastro de Usários</legend>
        <label>Nome:</label><br/>
        <input type="text" name='nome'/><br/><br/>        
        <label>Email:</label><br/>
        <input type="email" name='email'/><br/><br/>      
        <input type="submit" value="Adicionar"/><br/>
    </fieldset>
</form>

<?php $render('footer')?>
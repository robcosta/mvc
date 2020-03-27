<?php $render('header'); ?>

<h3>Nome: <?=$nome;?></h3><hr/>

<?php foreach ($posts as $post): ?>
    <h4><?php echo "Titulo: ".$post['titulo'];?></h3>
    <p><?php echo "Corpo: ".$post['corpo'];?></p>
<?php endforeach; ?>
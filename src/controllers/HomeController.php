<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $nome = "Roberto";
        $idade = 90;
        $posts = [
            ['titulo'=>'Título de teste1', 'corpo' => 'Corpo de teste1'],
            ['titulo'=>'Título de teste2', 'corpo' => 'Corpo de teste2'],
            ['titulo'=>'Título de teste3', 'corpo' => 'Corpo de teste3'],
            ['titulo'=>'Título de teste4', 'corpo' => 'Corpo de teste4'],
            ['titulo'=>'Título de teste5', 'corpo' => 'Corpo de teste5'],
        ];
        $this->render('home',[
            'nome' => $nome,
            'idade' => $idade,
            'posts' => $posts
        ]);
    }

    public function fotos(){
        $this->render('fotos');
    }

    public function foto($parametros){
        echo "Acessando a foto: ".$parametros['id'];
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        echo "Opa, ".$args['nome'];
    }

}
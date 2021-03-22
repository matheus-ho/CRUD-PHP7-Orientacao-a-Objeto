<?php

require_once 'vendor/autoload.php';

$produto = new \app\model\Produto();
//$produto->setId(2);
//$produto->setNome('AMD Ryzen 9 3950X');
//$produto->setDescricao('32 nucleos, 64 Threads');

$produtoDAO = new \app\model\ProdutoDAO();
$produtoDAO->delete(2);

///
$produtoDAO->read();

foreach($produtoDAO->read() as $produto):
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;
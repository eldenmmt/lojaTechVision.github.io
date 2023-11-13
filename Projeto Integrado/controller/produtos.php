<?php

$smarty = new Template();

$produtos = new Produtos();
$produtos->getProdutos();

$smarty->assign('PRO', $produtos->GetItens());
$smarty->display('produtos.tpl');

// echo '<pre>';
// var_dump($produtos->GetItens());
// echo '</pre>';
?>
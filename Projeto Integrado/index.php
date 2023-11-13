<?php

require './lib/autoload.php';

$smarty = new Template();

//valores para o template
$smarty->assign('NOME', 'ELDEN TRINDADE');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CHECKOUT', Rotas::pag_Checkout());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('PAG_CONTACTO', Rotas::pag_Contacto());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);



$smarty->display('index.tpl');
?>
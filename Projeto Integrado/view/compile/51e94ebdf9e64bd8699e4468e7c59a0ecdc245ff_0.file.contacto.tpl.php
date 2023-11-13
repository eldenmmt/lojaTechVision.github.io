<?php
/* Smarty version 3.1.46, created on 2023-11-12 15:48:20
  from 'C:\xampp\htdocs\php d\Projeto Integrado\view\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_6550e5b404b9e2_34191323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51e94ebdf9e64bd8699e4468e7c59a0ecdc245ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php d\\Projeto Integrado\\view\\contacto.tpl',
      1 => 1699800493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6550e5b404b9e2_34191323 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        
        <form class="form-horizontal" id="frmcontatoazul" action="envio">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Contato</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputnome">Nome</label>  
          <div class="col-md-8">
          <input id="txtinputnome" name="txtinputnome" placeholder="Escreva seu nome completo" class="form-control input-md" required="required" type="text" />
          <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputemail">Email</label>  
          <div class="col-md-8">
          <input id="txtinputemail" name="txtinputemail" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" />
          <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputassunto">Assunto</label>  
          <div class="col-md-8">
          <input id="txtinputassunto" name="txtinputassunto" placeholder="Informe do que se trata" class="form-control input-md" required="required" type="text" />
          <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputarea">Mensagem</label>
          <div class="col-md-8">                     
            <textarea class="form-control" id="txtinputarea" rows="6" name="txtinputarea" placeholder="Escreva sua opinião, crítica ou sugestão para o site"></textarea>
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="btnenviar"></label>
          <div class="col-md-8">
            <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">Enviar</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        
	</div>
</div><?php }
}

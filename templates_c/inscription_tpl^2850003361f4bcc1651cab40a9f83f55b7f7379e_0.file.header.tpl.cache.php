<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-11 18:22:03
  from "C:\wamp\www\tli\templates\header.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56bcc33bac3139_70906789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2850003361f4bcc1651cab40a9f83f55b7f7379e' => 
    array (
      0 => 'C:\\wamp\\www\\tli\\templates\\header.tpl',
      1 => 1455211025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bcc33bac3139_70906789 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1012356bcc33ba8f018_31166709';
?>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-collapse">

                <ul class="nav navbar-nav">
                    
                     
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'template_name', false, 'url_val');
foreach ($_from as $_smarty_tpl->tpl_vars['url_val']->value => $_smarty_tpl->tpl_vars['template_name']->value) {
$_smarty_tpl->tpl_vars['template_name']->_loop = true;
$__foreach_template_name_0_saved = $_smarty_tpl->tpl_vars['template_name'];
?> 
                       <li> 
                          <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['page_var']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['url_val']->value;?>
"> 
                             <?php echo $_smarty_tpl->tpl_vars['url_val']->value;?>
<br /> 
                          </a> 
                       </li> 
                    <?php
$_smarty_tpl->tpl_vars['template_name'] = $__foreach_template_name_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?> 
<!--

                    <li><a href="php/accueil.php">Accueil</a></li>
                    <li><a href="php/inscription.php">Inscription</a></li>
                    <li><a href="#">A propos</a></li>
-->
                </ul>

                <form class="navbar-form navbar-right" method="post" action="">
                    <div class="form-group">
                      <input title="logIn" type="text" class="form-control input-sm" name="identifiant" placeholder="Identifiant">
                    </div>
                    <div class="form-group">
                      <input title="password" type="password" class="form-control input-sm" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default btn-sm">Log In</button>
                </form>

            </div>
        </div>
    </nav>
</header><?php }
}

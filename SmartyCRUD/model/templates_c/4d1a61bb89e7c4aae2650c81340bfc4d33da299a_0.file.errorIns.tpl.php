<?php
/* Smarty version 3.1.39, created on 2021-05-21 13:53:28
  from 'C:\laragon\www\SmartyCRUD\template\errorIns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a7bb5840d192_22247395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d1a61bb89e7c4aae2650c81340bfc4d33da299a' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\template\\errorIns.tpl',
      1 => 1621244934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a7bb5840d192_22247395 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102613704260a7bb58402002_96190015', 'error');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/inscription.tpl");
}
/* {block 'error'} */
class Block_102613704260a7bb58402002_96190015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'error' => 
  array (
    0 => 'Block_102613704260a7bb58402002_96190015',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<div class="cond-error">- <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br></div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'error'} */
}

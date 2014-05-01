<?php /* Smarty version Smarty-3.1.11, created on 2012-08-30 16:32:00
         compiled from "..\mysmarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22642503f7960d65be2-42381360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f98a90324d500770587a3c7c2d3f4f0808a6a4f5' => 
    array (
      0 => '..\\mysmarty\\templates\\index.tpl',
      1 => 1345472112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22642503f7960d65be2-42381360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'choose' => 0,
    'question_choose' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503f7960e18d31_03826133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f7960e18d31_03826133')) {function content_503f7960e18d31_03826133($_smarty_tpl) {?><div>
<div class="div">
<input type=text id="<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
" class="answerchoose" onfocus="blur()" value=""/>
<span class="question">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['question_choose']->value[0];?>
、<?php echo $_smarty_tpl->tpl_vars['question_choose']->value[1];?>
</span>
<label for="A<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
">
<div class="forward" onmouseover="this.className='mouseover'" onmouseout="this.className='forward'">
<input  class="hidden" type=radio name="<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
" value="A" id="A<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
" onfocus="blur()" onclick="check(this)" />
A、<?php echo $_smarty_tpl->tpl_vars['question_choose']->value[2];?>

</div></label>
<label for="B<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
" >
<div class="forward" onmouseover="this.className='mouseover'" onmouseout="this.className='forward'" >
<input  class="hidden" type=radio name="<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
" value="B" id="B<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
" onfocus="blur()" onclick="check(this)" />
B、<?php echo $_smarty_tpl->tpl_vars['question_choose']->value[3];?>

</div></label>
<label for="C<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
">
<div class="forward"  onmouseover="this.className='mouseover'" onmouseout="this.className='forward'" >
<input  class="hidden" type=radio name="<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
" value="C" id="C<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
" onfocus="blur()" onclick="check(this)" />
C、<?php echo $_smarty_tpl->tpl_vars['question_choose']->value[4];?>

</div></label>
<label for="D<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
" >
<div class="forward" onmouseover="this.className='mouseover'" onmouseout="this.className='forward'" >
<input  class="hidden" type=radio name="<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
" value="D" id="D<?php echo $_smarty_tpl->tpl_vars['choose']->value;?>
" onfocus="blur()" onclick="check(this)"/>
D、<?php echo $_smarty_tpl->tpl_vars['question_choose']->value[5];?>

</div></label>
 </div>
</div><?php }} ?>
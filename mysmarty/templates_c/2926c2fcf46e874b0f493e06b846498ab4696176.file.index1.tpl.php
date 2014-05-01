<?php /* Smarty version Smarty-3.1.11, created on 2012-08-30 16:32:00
         compiled from "..\mysmarty\templates\index1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5315503f7960e71222-78062408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2926c2fcf46e874b0f493e06b846498ab4696176' => 
    array (
      0 => '..\\mysmarty\\templates\\index1.tpl',
      1 => 1346248060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5315503f7960e71222-78062408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'judge' => 0,
    'question_judge' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503f7960f41ca3_60316483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f7960f41ca3_60316483')) {function content_503f7960f41ca3_60316483($_smarty_tpl) {?> <div>
 <div class="div">
<input type=text id="<?php echo $_smarty_tpl->tpl_vars['judge']->value;?>
" class="answerjudge" onfocus="blur()" value=""/>
<span class="question">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['question_judge']->value[0];?>
、<?php echo $_smarty_tpl->tpl_vars['question_judge']->value[1];?>
</span></br></br>
<label for="E<?php echo $_smarty_tpl->tpl_vars['judge']->value;?>
" >
<div class="forward" onmouseover="this.className='mouseover'" onmouseout="this.className='forward'">
<input class="hidden" type=radio name="<?php echo $_smarty_tpl->tpl_vars['judge']->value;?>
" value="正确" id="E<?php echo $_smarty_tpl->tpl_vars['judge']->value;?>
" onfocus="blur()" onclick="check(this)"/>
正确
</div></label>
<label for="F<?php echo $_smarty_tpl->tpl_vars['judge']->value;?>
" >
<div class="forward" onmouseover="this.className='mouseover'" onmouseout="this.className='forward'">
<input class="hidden" type=radio name="<?php echo $_smarty_tpl->tpl_vars['judge']->value;?>
" value="错误" id="F<?php echo $_smarty_tpl->tpl_vars['judge']->value;?>
" onfocus="blur()" onclick="check(this)"/>
错误
</div></label>
</div>
</div> <?php }} ?>
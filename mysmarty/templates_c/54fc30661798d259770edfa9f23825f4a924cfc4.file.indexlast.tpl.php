<?php /* Smarty version Smarty-3.1.11, created on 2012-09-06 12:32:01
         compiled from "..\mysmarty\templates\indexlast.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28992503f79610481b8-36359750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54fc30661798d259770edfa9f23825f4a924cfc4' => 
    array (
      0 => '..\\mysmarty\\templates\\indexlast.tpl',
      1 => 1346934719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28992503f79610481b8-36359750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503f79610c5a30_96002499',
  'variables' => 
  array (
    'judge' => 0,
    'question_judge' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f79610c5a30_96002499')) {function content_503f79610c5a30_96002499($_smarty_tpl) {?> <div>
 <div class="div">
<input type=text id="<?php echo $_smarty_tpl->tpl_vars['judge']->value;?>
" class="answerjudge"  onfocus="blur()" value=""/>
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
</br>
</div> 
</ul>
<script language="javascript"> 
 function checkanswer()
 {
	var arrnull=new Array();
	var i=0;
	var arr=new Array("q1","q2","q3","q4","q5","q6","q7","q8","q9","q10","q11","q12","q13","q14","q15","q16","q17","q18","q19","q20","q21","q22","q23","q24","q25","q26","q27","q28","q29","q30","q31","q32","q33","q34","q35","q36","q37","q38","q39","q40");
	for(var k=0;k<40;k++)
	{
		if(document.getElementById(arr[k]).value=="")
		{
			arrnull[i]=k+1;
			i++;
		}

	}
	document.getElementById("rest").value=i;
	if(i!=0)
		return false;
	else 
		return true;
 }
 </script>
 <script language="javascript">
function check(now) 
    {
			document.getElementById(now.name).value=now.value;
			if(checkanswer())
				document.getElementById("completebutton").id="completebuttonhover";
    }
</script>
</form>
<div class="clr"></div>
</div>
</div>
<div class="clr"></div>
</div>
 <script language="javascript"> 
function checkForm()
{
	var arrnull=new Array();
	var i=0;
	var arr=new Array("q1","q2","q3","q4","q5","q6","q7","q8","q9","q10","q11","q12","q13","q14","q15","q16","q17","q18","q19","q20","q21","q22","q23","q24","q25","q26","q27","q28","q29","q30","q31","q32","q33","q34","q35","q36","q37","q38","q39","q40");
	for(var k=0;k<40;k++)
	{
		if(document.getElementById(arr[k]).value=="")
		{
			arrnull[i]=k+1;
			i++;
		}

	}
	if(i!=0)
	{
		var str="第";
		for(var j=0;j<i;j++)
			str=str+arrnull[j]+"、";
		str+="题尚未做完";
		alert(str);
		return false;
	}
	else
		return true;

}
</script> 
<img src="../view/images/banner.png" id="ban" />
<div id="restall">
<input type="text" value="40" id="rest"/>/40
</div>
</form>
<script language="javascript"> 
function topnow()
{

	document.body.scrollTop=0;
	document.documentElement.scrollTop=0;
}
</script>
<img src="../view/images/top.png" id="top" onclick="topnow()"/>
</body>
</html><?php }} ?>
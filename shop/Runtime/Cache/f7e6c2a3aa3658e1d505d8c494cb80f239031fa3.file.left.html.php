<?php /* Smarty version Smarty-3.1.6, created on 2016-05-10 11:43:07
         compiled from "F:/www/mvc/shop/Admin/View\Index\left.html" */ ?>
<?php /*%%SmartyHeaderCode:265573158cb6d6503-45631349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7e6c2a3aa3658e1d505d8c494cb80f239031fa3' => 
    array (
      0 => 'F:/www/mvc/shop/Admin/View\\Index\\left.html',
      1 => 1462851582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265573158cb6d6503-45631349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth_infoA' => 0,
    'v' => 0,
    'auth_infoB' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_573158cb8021c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573158cb8021c')) {function content_573158cb8021c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
User_Login.css" type="text/css" rel="stylesheet" />
        
            <script language=javascript>
                function expand(el)
                {
                    childobj = document.getElementById("child" + el);

                    if (childobj.style.display == 'none')
                    {
                        childobj.style.display = 'block';
                    }
                    else
                    {
                        childobj.style.display = 'none';
                    }
                    return;
                }
            </script>
        
    </head>
    <body>
        <table height="100%" cellspacing=0 cellpadding=0 width=170 background=<?php echo @ADMIN_IMG_URL;?>
menu_bg.jpg border=0>
               <tr>
                <td valign=top align=middle>
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>
                        <tr>
                            <td height=10></td>
                        </tr>
                    </table>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg><a  class=menuparent onclick="expand(<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
)"  href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</a></td></tr>
                        <tr height=4>
                            <td></td>
                        </tr>
                    </table>
                    <table id="child<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" style="display: none" cellspacing=0 cellpadding=0  width=150 border=0>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['val']->value['auth_pid']===$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                        <tr height=20>
                            <td align=middle width=30><img height=9 src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild href="<?php echo @__MODULE__;?>
/<?php echo $_smarty_tpl->tpl_vars['val']->value['auth_c'];?>
/<?php echo $_smarty_tpl->tpl_vars['val']->value['auth_a'];?>
" target="right"><?php echo $_smarty_tpl->tpl_vars['val']->value['auth_name'];?>
</a></td>
                        </tr>
                        <?php }?>
                        <?php } ?>
                        <tr height="4"><td colspan="2"></td></tr>
                    </table>
                    <?php } ?>
                </td>
                <td width=1 bgcolor=#d1e6f7></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>
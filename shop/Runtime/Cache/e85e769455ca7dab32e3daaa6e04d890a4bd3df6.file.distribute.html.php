<?php /* Smarty version Smarty-3.1.6, created on 2016-05-10 22:08:48
         compiled from "E:/www/mvc/shop/Admin/View\Role\distribute.html" */ ?>
<?php /*%%SmartyHeaderCode:167055731eb708e5d56-97112824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e85e769455ca7dab32e3daaa6e04d890a4bd3df6' => 
    array (
      0 => 'E:/www/mvc/shop/Admin/View\\Role\\distribute.html',
      1 => 1462889287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167055731eb708e5d56-97112824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role_info' => 0,
    'auth_infoA' => 0,
    'v' => 0,
    'auth_infoB' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5731eb7095eef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5731eb7095eef')) {function content_5731eb7095eef($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>分配权限</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
User_Login.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：角色管理-》分配权限【<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_name'];?>
】</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_id'];?>
" name="role_id">
            <table style="border: 1px solid #eee" cellspacing="0" cellpadding="0" width="100%" class="table_a">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <tr>
                    
                    <style>
                        .td{
                            border:1px solid #eee;
                        }
                    </style>
                    
                    <td style="width:18%" class="td"><input type="checkbox" name="auth_id[]" id="check<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"><label for="check<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</label></td>
                    <td class="td">
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['val']->value['auth_pid']===$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                        <div style="width: 200px;float: left"><input type="checkbox" name="auth_id[]" id="check<?php echo $_smarty_tpl->tpl_vars['val']->value['auth_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['auth_id'];?>
"><label for="check<?php echo $_smarty_tpl->tpl_vars['val']->value['auth_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['auth_name'];?>
</label></div>
                        <?php }?>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </table>
                <input type="submit" value="分配权限" >
            </form>
        </div>
    </body>
</html><?php }} ?>
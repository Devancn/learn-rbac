<?php /* Smarty version Smarty-3.1.6, created on 2016-05-11 09:03:02
         compiled from "F:/www/mvc/shop/Admin/View\Role\distribute.html" */ ?>
<?php /*%%SmartyHeaderCode:2442357315c5e56f264-80240143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09ba2eacd16b1a2aa68d11e20d2c1dad6152556' => 
    array (
      0 => 'F:/www/mvc/shop/Admin/View\\Role\\distribute.html',
      1 => 1462928568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2442357315c5e56f264-80240143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57315c5e5b260',
  'variables' => 
  array (
    'role_info' => 0,
    'auth_infoA' => 0,
    'v' => 0,
    'have_authids' => 0,
    'auth_infoB' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57315c5e5b260')) {function content_57315c5e5b260($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                    
                    <td style="width:18%" class="td">
                        <input type="checkbox" name="auth_id[]" id="check<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"
                               <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['auth_id'],$_smarty_tpl->tpl_vars['have_authids']->value)){?> checked='checked'<?php }?>
                        >
                        <label for="check<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
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
"
                           <?php if (in_array($_smarty_tpl->tpl_vars['val']->value['auth_id'],$_smarty_tpl->tpl_vars['have_authids']->value)){?> checked='checked'<?php }?>
                        ><label for="check<?php echo $_smarty_tpl->tpl_vars['val']->value['auth_id'];?>
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
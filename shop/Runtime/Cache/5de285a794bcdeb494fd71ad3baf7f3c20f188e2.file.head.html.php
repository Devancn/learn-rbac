<?php /* Smarty version Smarty-3.1.6, created on 2016-05-10 11:43:07
         compiled from "F:/www/mvc/shop/Admin/View\Index\head.html" */ ?>
<?php /*%%SmartyHeaderCode:29147573158cb46ad09-49209025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5de285a794bcdeb494fd71ad3baf7f3c20f188e2' => 
    array (
      0 => 'F:/www/mvc/shop/Admin/View\\Index\\head.html',
      1 => 1462851582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29147573158cb46ad09-49209025',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_573158cb4b2f7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573158cb4b2f7')) {function content_573158cb4b2f7($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
ser_Login.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" 
               background="<?php echo @ADMIN_IMG_URL;?>
header_bg.jpg" border=0>
            <tr height=56>
                <td width=260><img height=56 src="<?php echo @ADMIN_IMG_URL;?>
header_left.jpg" 
                                   width=260></td>
                <td style="font-weight: bold; color: #fff; padding-top: 20px" 
                    align=middle>当前用户：<?php echo $_SESSION['admin_name'];?>
&nbsp;&nbsp;
                    <a style="color: #fff"
                            href=""
                            target=main>修改口令</a> &nbsp;&nbsp; <a style="color: #fff"
                            onclick="if (confirm('确定要退出吗？')) return true; else return false;"
                            href="<?php echo @__MODULE__;?>
/Manager/logout" target=_top>退出系统</a>
                </td>
                <td align=right width=268><img height=56 
                                               src="<?php echo @ADMIN_IMG_URL;?>
header_right.jpg" width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>
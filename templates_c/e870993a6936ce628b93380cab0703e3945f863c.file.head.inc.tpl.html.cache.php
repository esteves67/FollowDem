<?php /* Smarty version Smarty-3.1.14, created on 2015-06-09 15:46:54
         compiled from "./templates/head.inc.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1278146875576ee4eb7d282-00537580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e870993a6936ce628b93380cab0703e3945f863c' => 
    array (
      0 => './templates/head.inc.tpl.html',
      1 => 1404903962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1278146875576ee4eb7d282-00537580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_titre' => 0,
    'titre_application' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5576ee4eb86772_25330329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5576ee4eb86772_25330329')) {function content_5576ee4eb86772_25330329($_smarty_tpl) {?><head>
    <meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1">
	<title><?php if (isset($_smarty_tpl->tpl_vars['page_titre']->value)){?><?php echo $_smarty_tpl->tpl_vars['page_titre']->value;?>
 - <?php }?> <?php echo $_smarty_tpl->tpl_vars['titre_application']->value;?>
</title>

    <!-- Core CSS -->
	
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"  type="text/css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/leaflet/leaflet.css" rel="stylesheet" type="text/css"/>
	 <!--[if lte IE 8]>
        <link href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.ie.css" rel="stylesheet" type="text/css">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
    <![endif]-->

    <!-- Style de l'application -->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->
  </head><?php }} ?>
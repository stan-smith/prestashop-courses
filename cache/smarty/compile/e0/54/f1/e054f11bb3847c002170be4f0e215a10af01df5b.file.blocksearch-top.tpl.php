<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 07:39:56
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/ap_juice/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1654717300574d780c81f1d6-84778059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e054f11bb3847c002170be4f0e215a10af01df5b' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/ap_juice/modules/blocksearch/blocksearch-top.tpl',
      1 => 1464694748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1654717300574d780c81f1d6-84778059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d780c834c92_83127010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d780c834c92_83127010')) {function content_574d780c834c92_83127010($_smarty_tpl) {?>

<script type="text/javascript">
	$(document).ready( function(){
 		$("#search_block_top").each( function(){
	 		$(".btn-search").click( function(){
	 				$(".over-layer,.block-form,.close-overlay").addClass('active');
	 			});
 		});
 		$('.close-overlay').click(function(){
			$(".over-layer,.block-form,.close-overlay").removeClass('active');
 		});
 });
</script>

<!-- Block search module TOP -->
<div id="search_block_top">
	<div class="btn-search" title="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
">
		<i class="fa fa-search"></i>
	</div>
	<span class="close-overlay"><i class="fa fa-close"></i></span>
	<div class="over-layer"></div>
	<div class="block-form clearfix">
		<form id="searchbox" class="container" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			<button type="submit" name="submit_search" class="btn btn-outline" >
				<i class="fa fa-search"></i>
				<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
			</button> 
		</form>
	</div>
</div>
<!-- /Block search module TOP --><?php }} ?>

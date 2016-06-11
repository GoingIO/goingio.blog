<?php  
	if( _hui('footer_brand_s') ){
		_moloader('mo_footer_brand', false);
	}
?>

<footer class="footer">
	<div class="container">
		<div class="fcode">
			<?php echo _hui('fcode') ?>
		</div>
		<p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url() ?>"><?php echo get_bloginfo('name') ?></a>
        
<a href="http://www.goingio.com/%E5%85%B3%E4%BA%8E%E6%88%91%E4%BB%AC/" target="_blank">关于我们</a>
<!--  
<a href="http://www.goingio.com/sitemap" target="_blank">网站地图</a>
-->
<a href="http://www.miitbeian.gov.cn" target="_blank">京ICP备16015769号</a>
<br><br>
<a href="http://www.goingio.com/link" target="_blank">友情链接</a>
		<a href="http://www.bigcloud.online/" target="_blank">中国移动苏研大数据平台博客</a>
		<!--
		<?php echo _hui('footer_seo') ?></p>
		<?php echo _hui('trackcode') ?>
		-->
	</div>
</footer>

<?php  
	$roll = 0;
	if( is_home() && _hui('sideroll_index_s') ){
		$roll = _hui('sideroll_index');
	}else if( (is_category() || is_tag() || is_search()) && _hui('sideroll_list_s') ){
		$roll = _hui('sideroll_list');
	}else if( is_single() && _hui('sideroll_post_s') ){
		$roll = _hui('sideroll_post');
	}
	if( $roll ){
		$roll = json_encode(explode(' ', $roll));
	}/*else{
		$roll = [];
	}*/

	_moloader('mo_get_user_rp');
?>
<script>
window.jsui={
    www: '<?php echo home_url() ?>',
    uri: '<?php echo get_stylesheet_directory_uri() ?>',
    ver: '<?php echo THEME_VERSION ?>',
	roll: <?php echo $roll ?>,
    ajaxpager: '<?php echo _hui("ajaxpager") ?>',
    url_rp: '<?php echo mo_get_user_rp() ?>'
};
</script>
<?php wp_footer(); ?>
</body>
</html>
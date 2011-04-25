<div id="TagCloud">
	{foreach from = $tags item = tag}
	<a href="page.php?tag={$tag.imglib_tagname}" style="font-size: {$tag.imglib_tagsize}px;">{$tag.imglib_tagname}</a>
	{/foreach}
</div>
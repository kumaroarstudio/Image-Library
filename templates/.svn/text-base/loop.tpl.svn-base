<div class="box">
	<div class="content">
		<img src="uploads/photo/{$file.imglib_filename}" alt="{$file.imglib_filetitle}" border="0"/>
		<a>Title : </a>
		<a>{$file.imglib_filetitle}</a><br class="clearfix"/>
		<div class="clearfix"></div>
	</div>
	<div class="operation">
		<a class="mouse">Doit : </a><a href="uploads/photo/{$file.imglib_filename}">Download</a>
		<br class="clearfix"/>
	</div>
	<div class="info">
		<div class="cat">
			<a class="mouse">Cats : </a>
			{foreach from = $catnames item = catname}
			<a href="page.php?cat={$catname}">{$catname}</a>
			{/foreach}
			<br class="clearfix"/>
		</div>
		<a class="mouse">Tags : </a>
		{foreach from = $tagnames item = tagname}
		<a href="page.php?tag={$tagname[0]['imglib_tagname']}">{$tagname[0]['imglib_tagname']}</a>
		{/foreach}
	</div>
</div>
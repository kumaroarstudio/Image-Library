<div class="menu">
	<a class="mouse">&nbsp;1&nbsp;</a>
	{foreach from = $catstop item = cattop}
	<a href="page.php?cat={$cattop.imglib_catname}">{$cattop.imglib_catname}</a>
	<a href="#" onclick="slide('{$cattop.imglib_catid}')" style="margin-left:1px;">+</a>
	{/foreach}
	<div class="clearfix"></div>
</div>
<div class="menu">
<a class="mouse">&nbsp;2&nbsp;</a>
{foreach from = $catstop item = cattop}
<div id="item{$cattop.imglib_catid}" class="item">
	{foreach from = $catssecond item = catsecond}
		{if $catsecond.imglib_par == $cattop.imglib_catid}
		<a href="page.php?cat={$catsecond.imglib_catname}">{$catsecond.imglib_catname}</a>
		<a href="#" onclick="slide_child('{$catsecond.imglib_catid}')" style="margin-left:1px;">+</a>
		{/if}
	{/foreach}
</div>
{/foreach}
<div class="clearfix"></div>
</div>

<a class="mouse">&nbsp;3&nbsp;</a>
{foreach from = $catssecond item = catsecond2}
<div id="item_child{$catsecond2.imglib_catid}" class="item_child">
	{foreach from = $catsthird item = catthird}
		{if $catthird.imglib_par == $catsecond2.imglib_catid}
		<a href="page.php?cat={$catthird.imglib_catname}">{$catthird.imglib_catname}</a>
		{/if}
	{/foreach}
</div>
{/foreach}
<div class="clearfix"></div>
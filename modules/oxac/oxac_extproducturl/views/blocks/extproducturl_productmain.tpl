[{$smarty.block.parent}]

[{if $oDetailsProduct->oxarticles__oxac_extproducturl->value}]
	<p><a href="[{$oDetailsProduct->oxarticles__oxac_extproducturl->value}]">
		[{$oDetailsProduct->oxarticles__oxac_extproducturllabel->value}]</a></p>
[{/if}]
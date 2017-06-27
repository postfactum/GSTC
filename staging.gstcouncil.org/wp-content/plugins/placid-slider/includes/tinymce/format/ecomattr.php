<?php 
require_once( dirname ( dirname( dirname(__FILE__) ) ). '/placid-config.php');
	$ecomterms = get_terms('wpsc_product_category');
	$ecomcat_html='<option value="" selected >Select the Category</option>';
	foreach( $ecomterms as $ecomcategory) {
		$ecomcat_html =$ecomcat_html.'<option value="'.$ecomcategory->slug.'" >'.$ecomcategory->name.'</option>';
	}


$html='
<tr valign="top" id="ecom-slider-type" onchange="ecomcheck();" >
<td scope="row">
<label for="post_type">'.__('Slide type','placid-slider').'</label>
</td> 
<td>
	<div class="styled-select">
		<select name="post_type" >
		<option value="wpsc-product" >'.__('eCom Recent Product Slider','placid-slider').'</option>
		<option value="wpsc-product" >'.__('eCom Product Category Slider','placid-slider').'</option>
		</select>
	</div>
</td>
</tr>

<tr valign="top" class="ecom_cat_slug" style="display:none;">
	<td scope="row">
		<label for="term">'.__('category','placid-slider').'</label></td> 
	<td>
		<div class="styled-select">
			<select name="term" id="placid_slider_ecomcatslug" class="placid-ecomcatslug" >'.$ecomcat_html.'</select>
		</div>
	</td>
</tr>

<tr valign="top" class="ecom_cat_slug" style="display:none;">
	<td scope="row">
		<label for="taxonomy">'.__('Taxonomy(Read only)','placid-slider').'</label></td> 
	<td>
		<input type="text" name="taxonomy" value="wpsc_product_category" readonly/>
	</td>
</tr>
';
print($html);
?>
<script type="text/javascript">
function ecomcheck(){
	var wooindex = jQuery("#ecom-slider-type option:selected").index();
		if(wooindex == 0) {
			jQuery(".ecom_cat_slug").css({"display":"none"});			
		}
		else {
			jQuery(".ecom_cat_slug").css({"display":"table-row"});
		}
}
</script>
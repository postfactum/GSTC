<?php
require_once( dirname ( dirname( dirname(__FILE__) ) ). '/placid-config.php');
$galleriesOptions = get_placid_nextgen_galleries(); 
$html='
<!-- nextGen-->
<tr valign="top" class="nextgen">
	<td scope="row">
		<label for="gallery_id">'.__('Select Gallery','placid-slider').'</label></td> 
	<td>
		<div class="styled-select">
			<select name="gallery_id">
				'.$galleriesOptions.'
			</select>
		</div>
	</td>
</tr>
';
print($html);
?>
<?php echo ModuleHelper::buildMethodCallForm("VisitorJSSettings", "save");?>
		<?php
		if (Request::getVar ( "save" )) {
			
			?>
<div class="alert alert-success alert-dismissable fade in">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php translate("changes_was_saved")?>
		</div>
<?php
		}
		?>

	<strong><?php translate("visitor_js_key");?></strong> <br /> <input
		type="text" name="visitor_js_key"
		value="<?php Template::escape(Settings::get("visitor_js_key"));?>">
	<div class="row voffset3">
		<div class="col-xs-4">
	<button type="submit" class="btn btn-default"><i class="fa fa-save"></i> <?php translate("save");?></button>
		</div>
	
		<div class="col-xs-8 text-right">
			<a href="http://www.visitorjs.com/plans" target="_blank" class="btn btn-info"><i class="fas fa-shopping-cart"></i> <?php translate("get_a_key");?></a>
		</div>
	</div>
</form>
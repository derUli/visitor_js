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
<p>
	<strong><?php translate("visitor_js_key");?></strong> <br /> <input
		type="text" name="visitor_js_key"
		value="<?php Template::escape(Settings::get("visitor_js_key"));?>">
</p>
<p>
	[<a href="http://www.visitorjs.com/plans" target="_blank"><?php translate("get_a_key")?></a>]
</p>

<p>
	<button type="submit" class="btn btn-default"><?php translate("save");?></button>
</p>
</form>
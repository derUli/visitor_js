<?php
class VisitorJS extends Controller {
	private $moduleName = "visitor_js";
	public function frontendFooter() {
		echo Template::executeModuleTemplate ( $this->moduleName, "script_tag.php" );
	}
	public function adminFooter() {
		$this->frontendFooter ();
	}
	public function getSettingsHeadline() {
		return TITLE_VISITOR_JS;
	}
	public function settings() {
		return Template::executeModuleTemplate ( $this->moduleName, "settings.php" );
	}
}
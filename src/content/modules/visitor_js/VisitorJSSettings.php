<?php
class VisitorJSSettings extends Controller {
	private $moduleName = "visitor_js";
	public function savePost() {
		if (Request::hasVar ( "visitor_js_key" )) {
			Settings::set ( "visitor_js_key", Request::getVar ( "visitor_js_key" ) );
		}
		Request::redirect ( ModuleHelper::buildAdminURL ( $this->moduleName, "save=1" ) );
	}
}
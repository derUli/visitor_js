<?php
if (Settings::get ( "visitor_js_key" ) && strtoupper ( Settings::get ( "visitor_js_key" ) ) != "API_KEY") {
	?>

<script type="text/javascript"
	src="http://www.visitorjs.com/visitor.js?key=<?php Template::escape(Settings::get("visitor_js_key"));?>"></script>
<?php
} else {
	// @TODO: Alert Ausgaben, dass der API-Key noch nicht eingegeben wurde.
}
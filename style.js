$(document).ready(
	function(){		
		"use strict";
		$("figure").mouseenter(
			function(){
				$("figcaption", this).stop().animate({"top":"0%",}, 200, 'swing');
			}
		);
		$("figure").mouseleave(
			function(){
				$("figcaption", this).stop().animate({"top":"100%",}, 400, 'swing');
			}
		);
	}
);
$(function() {
	function setSize($el, size) {
		$el.attr('size',size);
		$el.attr('maxlength',size);
	}
	setSize($('input#subscriber_birthday_year'), '4');
	setSize($('input#subscriber_birthday_month'), '2');
	setSize($('input#subscriber_birthday_day'), '2');
});

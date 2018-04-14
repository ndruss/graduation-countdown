
function milliseconds_to_days(ms) {
	return Math.round((ms) / (1000 * 60 * 60 * 24));
}

function difference_in_days(first_date, second_date) {
	var difference = second_date - first_date;
	return milliseconds_to_days(difference);
}

function display_days_til_graduation(el) {
	var today = new Date();
	var graduation = new Date(2016, 11, 17); // December 17, 2016
	el.innerHTML = difference_in_days(today, graduation);
}

var countdown = document.getElementById('countdown');

if (countdown) {
	display_days_til_graduation(countdown);
}
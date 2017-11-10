/*-----Countdown timer created by webnesters.com-------*/
jQuery.fn.CountingDown = function(options) {
	var settings = jQuery.extend({
		'date': null
	},
	options );
	myp=jQuery(this);
	function calculate_time(){
		var future = Date.parse(settings[
			'date'
		]);
    var now = new Date();
	
    var difference = Math.floor((future - now) / 1000);
    var seconds = chkinteger(difference % 60);
	
    difference = Math.floor(difference / 60);
    var minutes = chkinteger(difference % 60);
	
    difference = Math.floor(difference / 60);
    var hours = chkinteger(difference % 24);
	
    difference = Math.floor(difference / 24);
    var days = difference;
	
    myp.find("#seconds").text(seconds);
    myp.find("#minutes").text(minutes);
   	myp.find("#hours").text(hours);
   	myp.find("#days").text(days);
	}
	
	function chkinteger(integer)
	{
		if (integer < 0)
        integer = 0;
    if (integer < 10)
        return "0" + integer;
    return "" + integer;
	}
	calculate_time();
	interval = setInterval(calculate_time,1000);
};
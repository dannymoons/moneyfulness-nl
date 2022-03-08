// FILTER SECONDS OUT OF TIMEPICKER
acf.add_filter('time_picker_args', function( args, field ){
	args.altTimeFormat = "HH:mm";
	return args;
});
function drop_down_list() {
    var state = $('#state').val();
    if(state == '') {
        $('#county_drop_down').hide();
        $('#no_county_drop_down').show();
    } else {
	    $('#county_drop_down').show(); // Hide the drop down
        $('#no_county_drop_down').hide(); // Hide the "no counties" message (if it's the case)
        $.getScript("https://jadedlebi.github.io/fair-lending-tool/js/areas/"+ state.toLowerCase() + ".js", function(){
            populate(document.form.county);
	        $('#county_drop_down').show(); // Show the drop down
        });
    }
}

$(document).ready(function() {
    $("#state").change(drop_down_list);
});

$(window).load(drop_down_list);

function drop_down_list()
{
  var area = $('#area').val();
    if(area == '')
    {
    $('#county_drop_down').hide();
    $('#no_county_drop_down').show();
    }
    else
    {
      // Show the drop down
      $('#no_county_drop_down').hide();
      $('#county_drop_down').show();
      $.getScript("https://jadedlebi.github.io/fair-lending-tool/" + area.toLowerCase() + ".js", function(){
        populate(document.form.county);
      });
    }
}

$(document).ready(function(){
  $("#area").change(drop_down_list);
});

$(window).load(drop_down_list);
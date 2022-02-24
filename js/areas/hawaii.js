$(document).ready(function () {
   var data = [
      { "options": "Hawaii County" },
      { "options": "City & County of Honolulu" },
      { "options": "Kalawao County" },
      { "options": "Kauai County" },
      { "options": "Maui County" }
   ];
   for (var index = 0; index <= data.length; index++) {
      $('#county').append('<option value="' + data[index].options + '"></option>');
   }
});

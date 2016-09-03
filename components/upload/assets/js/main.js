// $(function(){
//     $('#modalButton').click(function() {
//         $('#modal').modal('show')
//           .find('#modalContent')
//           .load($(this).attr('value'));
//     });
// });

// $(function() {
//    $('.popupModal').click(function(e) {
//      e.preventDefault();
//      $('#modal').modal('show').find('.modal-content') //Change find('.modal-content') to find('.modal-body') modal-content
//      .load($(this).attr('href'));
//    });
// });
//$('#myModal').modal('show')
// (function($){
//
//   // I did JSON.stringify(jcrop_api.tellSelect()) on a crop I liked:
//   var c = {"x":13,"y":7,"x2":487,"y2":107,"w":474,"h":100};
//
//   $('#target').Jcrop({
//     bgFade: true,
//     setSelect: [c.x,c.y,c.x2,c.y2]
//   });
//
// });

$(function(){

    $('#target').Jcrop({
      aspectRatio: 1,
      onSelect: updateCoords
    });

  });

  function updateCoords(c)
  {
    $('#x').val(c.x);
    $('#y').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
  };

  function checkCoords()
  {
    if (parseInt($('#w').val())) return true;
    alert('Please select a crop region then press submit.');
    return false;
  };

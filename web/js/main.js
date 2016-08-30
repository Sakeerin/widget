// $(function(){
//     $('#modalButton').click(function() {
//         $('#modal').modal('show')
//           .find('#modalContent')
//           .load($(this).attr('value'));
//     });
// });

$(function() {
   $('.popupModal').click(function(e) {
     e.preventDefault();
     $('#modal').modal('show').find('.modal-content') //Change find('.modal-content') to find('.modal-body') modal-content
     .load($(this).attr('href'));
   });
});
//$('#myModal').modal('show')

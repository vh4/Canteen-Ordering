$(document).ready(function(){

    var table = $("#dataTable").DataTable({
      "paging": false
    });

          table.on('click','.editTable', function(){
              $tr = $(this).closest('tr');
              if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
              }

              var data = table.row($tr).data()
              $('#fnama').val(data[2]);
              $('#fnim').val(data[4]);
              $('#femail').val(data[3]);
              $('#falamat').val(data[5]);
              $('#efoto').attr('src',data[1]);
              $("#editForm").attr('action','/home/'+data[0]+'/edit');
              $('#editdata').modal('show');
    });

});

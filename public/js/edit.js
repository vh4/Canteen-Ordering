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
              $('#fno_pelajar').val(data[4]);
              $('#femail').val(data[3]);
              $('#falamat').val(data[5]);
              $('#efoto').attr('src',data[1]);
              $("#editForm").attr('action','/home/'+data[0]+'/edit');
              $('#editdata').modal('show');
    });

});

$(document).ready(function(){

    var table = $("#foodTable").DataTable({
      "paging": false
    });

          table.on('click','.FoodeditTable', function(){
              $trr = $(this).closest('tr');
              if($($trr).hasClass('child')){
                $trr = $trr.prev('.parent');
              }

              var data = table.row($trr).data()
              $('#fname_food').val(data[2]);
              $('#fprice').val(data[3]);
              $('#fdescription').val(data[4]);
              $('#fcategory').val(data[5]);
              $('#ffoto_food').attr('src',data[1]);
              $("#editFoodForm").attr('action','/home/food/'+data[0]+'/edit');
              $('#editFood').modal('show');
    });

});

function initMap() {
  const myLatlng = { lat: -7.5604586, lng: 110.8550299 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: myLatlng,
  });
  const marker = new google.maps.Marker({
    position: myLatlng,
    map,
    title: "Click to zoom",
  });
  map.addListener("center_changed", () => {
    window.setTimeout(() => {
      map.panTo(marker.getPosition());
    }, 3000);
  });

}
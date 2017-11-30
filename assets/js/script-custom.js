// ajax for upload file
$('#form-upload-file').submit(function(e){
  e.preventDefault();

  var formData = new FormData(this);
  formData.append('key', "UdF");

  $.ajax({
    url: site_url + "upload/ajax_upload_file",
    data: formData,
    type: "POST",
    dataType: "JSON",
    contentType: false,
    processData: false,
  }).done(function(data){
    if (data.success === true) {
        $('#message').html('<div id="success-alert" class="alert alert-success"><strong>Success!</strong> File upload successfully.</div>');
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
            location.replace(site_url + 'data');
        });
    } else if (data.success === false) {
        $('#message').html('<div id="success-alert" class="alert alert-warning"><strong>Warning!</strong> File upload failed.</div>');
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });
    }
  });
});

// ajax for get data file
$('#select-file').ready(function(){
  var id = 1;
  var limit = 3;
  var formData = {
    'key': "SF"
  };

  $.ajax({
    url: site_url + "data/ajax_show_data_file",
    data: formData,
    type: "POST",
    dataType: "JSON"
  }).done(function(data){
    if(data.success === true) {
      $.each(data.response.data, function(index, val){
        $('#select-file').html( $('#select-file').html() + '<div><input type="checkbox" class="single-checkbox" id="file'+id+'" name="fileData[]" value="'+val.file_name+'"><label for="checkbox1">'+val.file_name+'</label></div>');
        id++;
      });
      $('input.single-checkbox').change(function() {
        if($("input[id^='file']:checked").length >= limit) {
          this.checked = false;
        }
      });
    } else if(data.success === false) {
      $('#select-file').html('<p>File not available</p>');
    }
  });
});

// ajax for select file
$('#form-select-file').submit(function(e){
  e.preventDefault();

  var dataString = $('#form-select-file').serialize();

  $.ajax({
    url: site_url + "data/ajax_set_data_api",
    data: dataString,
    type: "POST",
    dataType: "JSON"
  }).done(function(data){
      if (data.success === true) {
          $('#message').html('<div id="success-alert" class="alert alert-success"><strong>Success!</strong> Data set successfully.</div>');
          $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
              $("#success-alert").slideUp(500);
              location.reload();
          });
      }
  });
});

// jquery for split data
$('#form-split').ready(function(){
    $('#data_1').on('keyup', function(e){
        e.preventDefault();
        var value = $(this).val();
        var sisa = 100 - value;
        $('#data_2').val(sisa);
    })
});

// jquery for submit split data
$('#form-split').submit(function(e){
  e.preventDefault();

  var dataString = $('#form-split').serialize();

  $.ajax({
    url: site_url + "summarization/split_data",
    data: dataString,
    type: "POST",
    dataType: "JSON"
  }).done(function(data){
    if (data.success === true) {
        $('#setting').modal('toggle');
        location.reload();
    }
  });
});

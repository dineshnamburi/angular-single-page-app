//callback handler for form submit
$("#ajaxform").submit(function(e)
{
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
          $('#msg').html(data);
		  //data: return data from server
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //if fails      
        }
    });
    e.preventDefault(); //STOP default action
    e.unbind(); //unbind. to stop multiple form submit.
});

$('#parent').change(function() {
    var str = "";
    $( "#parent option:selected" ).each(function() {
      str = $( this ).val();
  });
    $("#child option").each(function() {
        $(this).remove();
    });
    $.ajax({
        url: 'http://localhost/resto/admin/index.php/menu/category/get_category',
        type: 'POST',
        data: {
            id: str
        },
        dataType: 'json',
        success: function(data) {
            // console.log(data);
            $.each(data, function (i, item) {
                $('#child').append($('<option>', { 
                    value: item.c_id,
                    text : item.title 
                }));
            });

        }
    });
});


$('#child').change(function() {
    var str = "";
    $( "#child option:selected" ).each(function() {
      str = $( this ).val();
  });
    $("#subchild option").each(function() {
        $(this).remove();
    });
    $.ajax({
        url: 'http://localhost/resto/admin/index.php/menu/category/get_subcategory',
        type: 'POST',
        data: {
            id: str
        },
        dataType: 'json',
        success: function(data) {
            // console.log(data);
            $.each(data, function (i, item) {
                $('#subchild').append($('<option>', { 
                    value: item.s_id,
                    text : item.title 
                }));
            });

        }
    });
});


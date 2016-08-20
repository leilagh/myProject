    $(function() {
        $("#province_id").on("change",  function(){
            var selectName = $(this).attr('name');
            var optionValiue = $(this).children('option:selected').attr('value');
            $.ajax({
               // type: "POST",
                dataType: "json",
                url: "/page/province/"+optionValiue,
                data: {select: selectName, option: optionValiue},
                success: function (data) {
                 //   console.log(data);
                    var toAppend = '';
                  for(var i=0;i<data.length;i++){
                      toAppend += '<option value="'+data[i]['id']+'">'+data[i]['name']+'</option>';
                  }
                  var $selectDropdown = $("#city_id").empty().html(' ');
                  $selectDropdown.append($(toAppend));
                  // trigger event
                  $selectDropdown.trigger('contentChanged');
                  $('select').on('contentChanged', function() {
                    // re-initialize (update)
                    $(this).material_select();
                  });
                }
            });
        });
    });
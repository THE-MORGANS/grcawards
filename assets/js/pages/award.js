$(document).ready(function ($) {
    $('select[id=category_name]').on('change',function () {

        if ($("select[id=category_name]").val() !== '') {
            $("select[id=sector_name]").find("#init").siblings().remove();
            let category = $("select[id=category_name]").val();
            let baseUrl = $("select[id=category_name]").attr('data-url');
            jQuery.ajax({
                url: baseUrl+"/"+category+"/sectors",
                type:'GET',
                cache: false,
                success: function(html){
                    $("select[id=sector_name]").html(html);
                    $("select[id=sector_name]").removeAttr('disabled');
                }
            })
        }
    });
    $('select[id=sector_name]').change(function () {
      
    });

});

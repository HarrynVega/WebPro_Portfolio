function showview(view){
    $.ajax({
        data: {},
        url: "php/"+view+"/"+view+".php",
        type: "POST",
        dataType: 'html'
    }).done(function(data){
        $("#pageView").html(data);
    })
}




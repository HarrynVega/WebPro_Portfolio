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

$(".nav-link").on("click", function(){
    $(".nav-item").removeClass("active");
    $(this).parent().addClass("active");
});

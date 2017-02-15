$(function(){
    $('form').submit(function(e){
        e.preventDefault();
        subscriber_email = $( this ).serializeArray()[0].value;

        Devless.addData("Echopodcast", "subscription", {
            "email": subscriber_email
        }, function(res){
            if(res.status_code === 609){
                $('.alert').show();
                document.getElementById("email").reset();
            }
        });
    })
});


$(function(){
    $('form').submit(function(e){
        e.preventDefault();
        subscriber_email = $( this ).serializeArray()[0].value;

        if(subscriber_email !== ""){
            Devless.addData("echopodcast", "subscription", {
                "email": subscriber_email
            }, function(res){
                if(res.status_code === 609){
                    $('.alert').show();
                }
            });
        } else {
            alert("Don't do that else I will whop you :(");
        }
    })
});


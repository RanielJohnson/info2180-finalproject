var email = document.querySelector("#loginemail");
var pass = document.querySelector("#loginpassword");
var sub = document.querySelector("#loginsubmit");
var invalid = $("#invalid");
var secReq = new XMLHttpRequest();

sub.addEventListener("click", function(event){
    $.get("sign-in.php?email="+email.value+"&password="+pass.value, function(output){
        if(output==1){
            $.get("dashboard.php", function(data){
                $("body").html(data);
            });
        }else{
            alert("Invalid email or password");
            invalid.show();
        }
    });
});
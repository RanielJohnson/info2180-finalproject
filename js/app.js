var home = document.getElementById("home");
var user = document.getElementById("user");
var logout = document.getElementById("logout");
var issue = document.getElementById("issue");
var createUser = document.getElementById("create-user");
var filter = document.getElementById("all-filter");
var openFilter = document.getElementById("open-filter");
var ticFilter = document.getElementById("tickets-filter");
var cIssues = $(".all");
var createIssue = document.getElementById("c-new-issue");
var closeIssue = document.getElementById("close-issue");
var inProgressIssue = document.getElementById("in-progress-issue");
var this_all = document.getElementsByClassName("this-all");
var this_open = document.getElementsByClassName("this-open");
var this_tickets = document.getElementsByClassName("this-tickets");
var formUser = document.querySelector("#add-user");
var fname = document.querySelector("#add-user-fname");
var lname = document.querySelector("#add-user-lname");
var Useremail = document.querySelector("#add-user-email");
var Userpassword = document.querySelector("#add-user-password");
var newUser = document.getElementById("addSubmit");
var formIssue = document.querySelector("#add-issue");
var title = document.querySelector("#add-issue-title");
var desc = document.querySelector("#add-issue-desc");
var assigned = document.querySelector("#add-issue-assigned");
var type = document.querySelector("#add-issue-type");
var priority = document.getElementById("add-issue-priority");
var newIssue = document.getElementById("issueSubmit");
var views = document.getElementsByClassName("views");
var id = document.getElementsByClassName("views_id");
var invalidPass = $("#invPass");

if(home){
    home.addEventListener("click", ()=>{
        $.get("dashboard.php", function(data){
            $("body").html(data);
        });
    });
}

if(user){
    user.addEventListener("click", ()=>{
        $.get("addUser.php", function(data){
            var rtext = "not admin";
            if(data != rtext){
                $("body").html(data);
            }else{
                alert('Only the administrator can add new users.');
            }
        });
    });
}
if(newUser){
    newUser.addEventListener("click", ()=>{
        if(formUser.checkValidity()){
            $.get("insertuser.php?fname="+fname.value+"&lname="+lname.value+"&email="+Useremail.value+"&password="+Userpassword.value, function(data){
                if(data == "done"){
                    alert("User Inserted!");
                    fname.value="";
                    lname.value="";
                    Useremail.value="";
                    Userpassword.value="";
                }
            });
        }else{
            alert("Invalid form fields.");
            invalidPass.show();
        }
    });
}

if(logout){
    logout.addEventListener("click", ()=>{
        $.get("logout.php", function(data){
            $("body").html(data);
        });
    });
}

if(views){
    for(let i = 0; i < views.length; i++){
        views[i].addEventListener("click", () =>{
            $.get("view.php?index="+views_id[i].value, function(data){
                $("body").html(data);
            });
        });
    }
}

if(filter){
    filter.addEventListener("click", ()=>{
        openFilter.classList.remove("active");
        ticFilter.classList.remove("active");
        filter.classList.add("active");
        cIssues.each(function(i){
            $(this).show();
        });
    
    });
}

if(openFilter){
    openFilter.addEventListener("click", ()=>{
        openFilter.classList.add("active");
        ticFilter.classList.remove("active");
        filter.classList.remove("active");
    
        cIssues.each(function(i){
            if($(this).hasClass("this-open")){
                $(this).show();
            }
            else{
                $(this).hide();
            }
        });
    
    });
}

if(ticFilter){
    ticFilter.addEventListener("click", ()=>{
        openFilter.classList.remove("active");
        ticFilter.classList.add("active");
        filter.classList.remove("active");
    
        cIssues.each(function(i){
            if($(this).hasClass("mytickets")){
                $(this).show();
            }
            else{
                $(this).hide();
            }
        });
    });
}

if(issue){
    issue.addEventListener("click", ()=>{
        $.get("issue.php", function(data){
            $("body").html(data);
        });
    });
}

if(createIssue){
    createIssue.addEventListener("click", ()=>{
        $.get("issue.php", function(data){
            $("body").html(data);
        });
    });
}

if(closeIssue){
    let xhr = new XMLHttpRequest();

    var input = document.querySelector("#issue-id");

    xhr.addEventListener("load",() =>{
        alert("Update has taken effect. Issue is now closed. You'll see the last updated time when you navigate back to here!");
    });

    closeIssue.addEventListener('click', () => {
        var url='closeissue.php?index='+input.value;
        xhr.open('GET',url);
        xhr.send();
    });
}

if(inProgressIssue){
    let xhr = new XMLHttpRequest();

    var input = document.querySelector("#issue-id");

    xhr.addEventListener("load",() =>{
        alert("Update has taken effect. Issue is now in progress. You'll see the last updated time when you navigate back to here!");
    });

    inProgressIssue.addEventListener('click', () => {
        var url='inprogressissue.php?index='+input.value;
        xhr.open('GET',url);
        xhr.send();
    });
}



if(newIssue){
    newIssue.addEventListener("click", ()=>{
        if(formIssue.checkValidity()){
            $.get("createissue.php?title="+title.value+"&desc="+desc.value+"&assigned="+assigned.value+"&type="+type.value+"&priority="+priority.value, function(data){
                if(data == "done"){
                    alert("Issue Created!");
                    title.value="";
                    desc.value="";
                }
            });
        }else
        {
            alert("Invalid form fields.");
        }
    });
}

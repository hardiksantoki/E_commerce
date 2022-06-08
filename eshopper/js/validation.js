regster = () => {
    let flag = true;
    let username = $('#name').val();
    let email = $('#email').val();
    let password = $('#pass').val();
    let mobile = $('#mobile').val();
    let isValid = $("input[name=gender]").is(":checked");

    let letter = /^[a-zA-Z\s]+$/;
    
    let mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
    

    if (username == "") {
        $("#elo").html("please enter name");
        $('#username').focus();
        flag = false;
    } else if (!username.match(letter)) {
        $("#elo").html("please enter valid name");
        $('#username').focus();
        flag = false;
    } else if (email == "") {
        $("#elo").html("please enter email");
        $('#email').focus();
        flag = false;
    } else if (email.match(mailformat) == null) {
        $("#elo").html("please enter valid email");
        $('#email').focus();
        flag = false;
    }
     else if (mobile == "") {
        $("#elo").html("please enter Mobile");
        $('#mobile').focus();

        flag = false;
    } 
    else if (!mobile.match(/^[0-9]{10}$/)) {
        $('#elo').html("Mobile must be 10 digitin Ex.(9999999999)");
        $('#password').focus();
        return false;
    }
     else if (password == "") {
        $("#elo").html("please enter password");
        $('#password').focus();

        flag = false;
    }
    else if (!password.match(/^[A-Za-z][A-Za-z#@0-9_]{6,19}$/)) {
        $('#elo').html("password must be 7 digitin Ex.(Example123)");
        $('#password').focus();
        return false;
    } 
    else if((isValid== false) ){
        
 
            $('#elo').html("Select Gender");
            
            return false;
    }
    else{
        $('#elo').html("");
    }
    
    return flag;
        
}


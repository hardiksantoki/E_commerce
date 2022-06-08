login = () => {
    
    let flag = true;
    let Lun = $('#email').val();
    let Lpa = $('#password').val();

    // let letter = /^[a-zA-Z][a-zA-Z\s]+$/;
    let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


    if (Lun == "") {
        $("#elo1").html("please enter email");
        $('#Lun').focus();
        flag = false;
    } else if (Lun.match(mailformat) == null) {
        $("#elo1").html("please enter valid email");
        $('#Lun').focus();
        flag = false;
    } else if (Lpa == "") {
        $("#elo1").html("please enter password");
        $('#Lpa').focus();

        flag = false;
    } else if (!Lpa.match(/^[A-Za-z][A-Za-z#@0-9_]{6,19}$/)) {
        $('#elo1').html("Password must be 8 digitin Ex.(example#123)");
        $('#Lpa').focus();

        flag = false;
    }else{
        $('#elo').html("");
    }
    return flag;
 
}
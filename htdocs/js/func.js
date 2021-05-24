function signup(event){
    username = document.getElementById("username_su");
    username_value = username.value;
    password = document.getElementById("password_su");
    password_value = password.value;
    again    = document.getElementById("againPassword_su");
    again_value = again.value;
    email    = document.getElementById("email_su");
    email_value = email.value;
    error    = document.getElementById("error_su");


    if (password_value != again_value){

        event.preventDefault();
        error.innerHTML = "Mật khẩu không khớp";
    }
    if ((username_value.length == 0 || password_value.length == 0 || again_value.length == 0 || email_value.length == 0)){

        event.preventDefault();
        error.innerHTML = "Vui lòng nhập đầy đủ thông tin";
    }
}
function update(event){
    password = document.getElementById("password_1");
    password_value = password.value;
    again    = document.getElementById("password_2");
    again_value = again.value;
    email    = document.getElementById("email");
    email_value = email.value;
    error    = document.getElementById("error_su");
    if (password_value != again_value){

        event.preventDefault();
        error.innerHTML = "Mật khẩu không khớp";
    }
    if ((password_value.length == 0 || again_value.length == 0 || email_value.length == 0)){

        event.preventDefault();
        error.innerHTML = "Vui lòng nhập đầy đủ thông tin";
    }
}


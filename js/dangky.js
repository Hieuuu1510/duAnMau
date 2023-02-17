

function kiemtra() {
    var user = document.getElementById('taiKhoan');

    if(user.value == ""){
        alert('User không được để trống!!!');
        user.style.background = "#DD0000";
        return false
    }else{
        user.style.background = "#99FFCC";
        
    }

    var pass = document.getElementById('matKhau');
    if(pass.value == ""){
        alert('Pass không được để trống')
        pass.style.background = "#DD0000";
        return false
    }
    else{
        pass.style.background = "#99FFCC";
    
    }

    var tenn = document.getElementById('tenn');
    if(tenn.value == ""){
        alert('họ tên không được để trống!!!')
        tenn.style.background = "#DD0000"
        return false
    }else{
        tenn.style.background = "#99FFCC"
    }
    var email = document.getElementById('email');
    if(email.value == ""){
        alert('email không được để trống!!!');
        email.style.background = "#DD0000"
        return false
    }else{
        email.style.background = "#99FFCC"
    }

    alert('Đăng ký thành công!!!')
    


}
function error() {
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
    alert('Đăng nhập thành công!!!')
    var bnt = document.getElementById('lg_dn')


}
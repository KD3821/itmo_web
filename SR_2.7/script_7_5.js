"use strict";

let login = () => {
    let username = document.getElementById('login').value;
    let password = document.getElementById('password').value;
    if (username == 'stanislav' && password == 'pass') {
        Cookies.set('login', username);
        Cookies.set('password', password);
        checkStatus();
    } else {
        document.getElementsByClassName('info')[0].innerHTML = 'Неверный логин или пароль!';
    }
}

let logout = () =>  {
    Cookies.remove('login');
    Cookies.remove('password');
    checkStatus();
}

let checkStatus = () => {
    let login = Cookies.get('login');
    let pass = Cookies.get('password');
    if (login == 'stanislav' && pass == 'pass') {
        document.getElementsByClassName('formAuth')[0].style.display = 'none';
        document.getElementsByClassName('greetings')[0].style.display = 'block';
        document.querySelector('.greetings p span').innerText = login;
    } else {
        document.getElementsByClassName('formAuth')[0].style.display = 'block';
        document.getElementsByClassName('greetings')[0].style.display = 'none';
    }
    document.getElementsByClassName('info')[0].innerHTML = '';
    document.getElementById('login').value = '';
    document.getElementById('password').value = '';
}

window.onload = checkStatus();
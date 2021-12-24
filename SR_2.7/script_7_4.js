"use strict";

function getCookies() {
    let tmp = '';
    if (typeof Cookies.get('login') !== 'undefined') {
        tmp = tmp + 'login: ' + Cookies.get('login')+'<br>';
    }
    if (typeof Cookies.get('password') !== 'undefined') {
        tmp = tmp + 'password: ' + Cookies.get('password');
    }
    document.getElementsByClassName('saveCookie')[0].innerHTML = tmp;
}

let login = () => {
    let username = document.getElementById('login').value;
    let password = document.getElementById('password').value;

    Cookies.set('login', username);
    Cookies.set('password', password);
    
    getCookies();
    
};
/* 
 Created on : Oct 8, 2019, 7:22:44 PM
 Author     : johnson
 */
function showMenu() {
    var menu = document.getElementById('dropdown-menu');
    if (menu.style.display === 'none') {
        menu.style.display = 'block';
    } else if (menu.style.display === 'block') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'block';
    }
}

function hideMenu() {
    var menu = document.getElementById('dropdown-menu');
    if (menu.style.display === 'block') {
        menu.style.display = 'none';
    }
}

function showMap() {
    var sketchMap = document.getElementById('sketchMap');
    var googleMap = document.getElementById('googleMap');
    var button = document.getElementById('switchMap');
    if (googleMap.style.display === 'none') {
        googleMap.style.display = 'block';
        sketchMap.style.display = 'none';
        button.innerHTML = 'Switch to sketch map';
        googleMap.src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31917.966166207825!2d32.56054891711572!3d0.34552473386579546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dba918ecc9eaf%3A0x80d86a0c087c3fa1!2sSt.%20Claver%20primary%20school!5e0!3m2!1sen!2sug!4v1573443194450!5m2!1sen!2sug';
    } else {
        googleMap.src = '';
        googleMap.style.display = 'none';
        sketchMap.style.display = 'block';
        button.innerHTML = 'Switch to google map';
    }
}


//send
function send(form, div) {
    var _div = document.getElementById(div);
    _div.innerHTML = "..........please wait!........";
    _div.style.display = 'block';
    save(form, _div);
}


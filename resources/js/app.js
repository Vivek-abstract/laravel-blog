require('./bootstrap');

function hideFlash() {
    var message = document.querySelector('#flash-message');
    if( !message ) return;

    message.style.visibility = 'hidden';
    message.style.opacity = 0;
}
setTimeout(hideFlash, 5000);
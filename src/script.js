const button1 = document.getElementById('button1');
const button2 = document.getElementById('button2');
const div = document.getElementById('text_in_div');

function updateDivClass() {
    if (button1.className === 'button_push' && button2.className === 'button_push') {
        div.classList.remove('inactive');
        div.classList.add('active');
    } else {
        div.classList.remove('active');
        div.classList.add('inactive');
    }
}

function clickButton1() {

    const button = document.getElementById('button1');

    if (button.className === 'button_do_not_push') {
        button.classList.remove('button_do_not_push');
        button.classList.add('button_push');
        updateDivClass();

    } else if (button.className === 'button_push') {
        button.classList.remove('button_push');
        button.classList.add('button_do_not_push');
        updateDivClass();
    }
}

function clickButton2() {

    const button = document.getElementById('button2');

    if (button.className === 'button_do_not_push') {
        button.classList.remove('button_do_not_push');
        button.classList.add('button_push');
        updateDivClass();

    } else if (button.className === 'button_push') {
        button.classList.remove('button_push');
        button.classList.add('button_do_not_push');
        updateDivClass();
    }
}

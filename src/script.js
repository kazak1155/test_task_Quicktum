// import axios from "axios";

function clickButton(statusButton, numberButton) {
    statusButton === 'push' ? "push" : "do not push";

    const  inputField = document.getElementById('valueButton2');
    inputField.value = '222'

    axios.post('http://127.0.0.1:8000/', {
        button: numberButton
    })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
}
function showButton1Value() {
    let buttton1 = document.getElementById('valueButton1').value
    let buttton2 = document.getElementById('valueButton2').value
    alert('button1: ' + buttton1 + ' button2: ' + buttton2)
}

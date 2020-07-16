const form = document.querySelector("#form");
const password = document.querySelector(".pwd");
const npassword = document.querySelector(".npwd");
const submit = document.querySelector(".btn");
const errorElement = document.querySelector("#error");

form.addEventListener('submit', (e) => {
    let messages = [];

    if (password.value.length <= 4) {
        messages.push("Password must be longer than 4 characters");
    }

    if (password.value.length >= 20) {
        messages.push("Password must be lesser than 20 characters");
    }

    if (password.value === 'password') {
        messages.push("Password cannot be set as password");
    }

    if (password.value === npassword.value) {
        messages.push("New and Old passwords cannot be the same");
    }

    if (messages.length > 0) {
        e.preventDefault();
        errorElement.innerText = messages.join(", ");
    }
});
const form = document.querySelector("#form");
const username = document.querySelector(".username");
const email = document.querySelector(".email");
const password = document.querySelector(".pwd");
const submit = document.querySelector(".btn");
const errorElement = document.querySelector("#error");

form.addEventListener('submit', (e) => {
    let messages = [];
    if (username.value === "" || name.value == null) {
        messages.push("Name is required");
    }

    if (email.value === "" || email.value == null) {
        messages.push("Email is required");
    }

    if (password.value.length <= 4) {
        messages.push("Password must be longer than 4 characters");
    }

    if (password.value.length >= 20) {
        messages.push("Password must be lesser than 20 characters");
    }

    if (password.value === 'password') {
        messages.push("Password cannot be set as password");
    }

    if (messages.length > 0) {
        e.preventDefault();
        errorElement.innerText = messages.join(", ");
    }
});
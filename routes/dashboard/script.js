const form = document.querySelector("#form");
const id = document.querySelector(".id");
const name = document.querySelector(".name");
const semester = document.querySelector(".semester");
const dept = document.querySelector(".dept");
const submit = document.querySelector(".button");
const errorElement = document.querySelector("#error");

form.addEventListener('submit', (e) => {
    let messages = [];

    if (id.value === "" || id.value == null) {
        messages.push("Id is required");
    }

    if (id.value.length <= 2) {
        messages.push("Id must be longer than 2 characters");
    }

    if (id.value.length >= 20) {
        messages.push("Id must be lesser than 20 characters");
    }

    if (messages.length > 0) {
        // e.preventDefault();
        errorElement.innerText = messages.join(", ");
    }
});
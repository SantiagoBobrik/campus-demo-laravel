const username = document.querySelector("#username");
const password = document.querySelector("#password");
const userError = document.querySelector("#username-error");
const passwordError = document.querySelector("#password-error");
const formError = document.querySelector("#form-error");
const btnSubmit = document.querySelector(".btn-submit");

//foraech
const formGroup = document.querySelectorAll(".form-group");

btnSubmit.addEventListener("click", function (event) {
    event.preventDefault();
    validate(username.value, password.value);
});
//div:  has-danger

function validate(username, password) {
    let check;
    if (username == "") {
        userError.style.display = "block";
    } else {
        userError.style.display = "none";
    }

    if (password == "") {
        passwordError.style.display = "block";
    } else {
        passwordError.style.display = "none";
    }

    if (
        username &&
        password != "" &&
        username == "anac" &&
        password == "1234"
    ) {
        window.location = "/cursos";
    } else {
        formError.style.display = "block";
    }
}

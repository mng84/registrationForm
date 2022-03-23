const regForm = document.querySelector("#c-form");

regForm.addEventListener("submit", (e) => {
    // e.preventDefault();

    let firstname = document.querySelector("#firstname");
    let lastname = document.querySelector("#lastname");
    let email = document.querySelector("#email");
    let country = document.querySelector("#country");
    let phone = document.querySelector("#phone");
    let password = document.querySelector("#password");
    let cpassword = document.querySelector("#cpassword");
    let terms = document.querySelector("#terms");

    let nameError = document.querySelector("#c-error-message-firstname");
    let lastnameError = document.querySelector("#c-error-message-lastname");
    let mailError = document.querySelector("#c-error-message-email");
    let countryError = document.querySelector("#c-error-message-country");
    let phoneError = document.querySelector("#c-error-message-phone");
    let passwordError = document.querySelector("#c-error-message-password");
    let cpasswordError = document.querySelector("#c-error-message-cpassword");
    let termsError = document.querySelector("#c-error-message-terms");

    let errorMesages = document.querySelectorAll(".c-form-input-container small");

    errorMesages.forEach((error) => {
        error.innerText = "";
        error.style.color = "red";
    });


    if (firstname.value == "") {
        nameError.innerText = "Firstname Required";
    }
    if (lastname.value == "") {
        lastnameError.innerText = "Lastname Required";
    }
    if (email.value == "") {
        mailError.innerText = "Email Required";
    }
    if (country.value == "") {
        countryError.innerText = "Country Required";
    }
    if (phone.value == "") {
        phoneError.innerText = "Phone Required";
    }
    if (password.value == "") {
        passwordError.innerText = "Password Required";
    }
    if (cpassword.value !== password.value) {
        cpasswordError.innerText = "Passwords Do Not Match";
    }

    if (!terms.checked) {
        e.preventDefault()
        termsError.innerText = "Please Accept Terms & Conditions";
    }

});

function searchValue() {
    let input, filter, table, tr, td, i, txtValue;
    input = document.querySelector("#search-bar");
    filter = input.value.toUpperCase();
    table = document.querySelector(".c-table");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
let fullName = document.getElementById("fullName").value;
let phone = document.getElementById("phone").value;
let email = document.getElementById("email").value;
let company = document.getElementById("company").value;
const display_fullname = document.getElementById("display_fullname");
const display_phone = document.getElementById("display_phone");
const display_email = document.getElementById("display_email");
const display_company = document.getElementById("display_company");
const btn = document.getElementById("createCard");

display_fullname.innerHTML = fullName;
display_phone.innerHTML = phone;
display_email.innerHTML = email;
display_company.innerHTML = company;

btn.addEventListener("click", function () {
    fullName = document.getElementById("fullName").value;
    phone = document.getElementById("phone").value;
    email = document.getElementById("email").value;
    company = document.getElementById("company").value;
    if (fullName == "") {
        alert("Please enter your full name");
        return;
    } else if (phone == "") {
        alert("Please enter your phone number");
        return;
    } else if (email == "") {
        alert("Please enter your email");
        return;
    } else if (company == "") {
        alert("Please enter your company");
        return;
    }
    display_fullname.innerHTML = fullName;
    display_phone.innerHTML = phone;
    display_email.innerHTML = email;
    display_company.innerHTML = company;
});
(function () {
    "use strict";

    var contactTable = get("contactTable"),
        contacts = [];

    var first = get("firstName");
    var last = get("lastName");
    var email = get("inputEmail");
    var phone = get("phone");

    function get(id) {
        return document.getElementById(id);
    }

    function addContact() {
        var contact = {
            firstName: first.value,
            lastName: last.value,
            email: email.value,
            phone: phone.value
        };

        contacts.push(contact);

        if (contacts.length === 1) {
            contactTable.deleteRow(1);
        }

        var row = contactTable.insertRow();
        var firstNameCell = row.insertCell();
        var lastNameCell = row.insertCell();
        var emailCell = row.insertCell();
        var phoneCell = row.insertCell();

        firstNameCell.innerHTML = first.value;
        lastNameCell.innerHTML = last.value;
        emailCell.innerHTML = email.value;
        phoneCell.innerHTML = phone.value;
    }
    get("add").addEventListener("click", addContact);
    get("theForm").addEventListener("submit", function (event) {

        event.preventDefault();
    });
})()
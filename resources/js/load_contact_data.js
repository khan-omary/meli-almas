window.onload = function () {
    const name = localStorage.getItem("contactUserName");
    const email = localStorage.getItem("contactUserEmail");
    const phone = localStorage.getItem("contactUserPhone");

    if (name) document.getElementById("firstname").value = name;
    if (email) document.getElementById("Email").value = email;
    if (phone) document.getElementById("Phone-number").value = phone;
}
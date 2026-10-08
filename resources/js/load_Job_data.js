window.onload = function () {
    const name = localStorage.getItem("userName");
    const email = localStorage.getItem("userEmail");
    const phone = localStorage.getItem("userPhone");

    if (name) document.getElementById("name").value = name;
    if (email) document.getElementById("email").value = email;
    if (phone) document.getElementById("phone").value = phone;
}
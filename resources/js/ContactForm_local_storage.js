function saveData() {
    const name = document.getElementById("firstname").value;
    const email = document.getElementById("Email").value;
    const phone = document.getElementById("Phone-number").value;

    localStorage.setItem("contactUserName", name);
    localStorage.setItem("contactUserEmail", email);
    localStorage.setItem("contactUserPhone", phone);
}
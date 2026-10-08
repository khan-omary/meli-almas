
const form = document.querySelector("form");

form.addEventListener("submit", function (e) {

    const name = document.getElementById("firstname").value.trim();
    const phoneNumber = document.getElementById("Phone-number").value.trim();
    const comment = document.getElementById("comment").value.trim();

    if (name.length < 3) {
        e.preventDefault();
        alert("نوم باید لږ تر لږه 3 حروف ولري");
        return;
    } else if (name.length > 50) {
        e.preventDefault();
        alert("دا نوم له ۵۰ حرفونو لوی شو");
    }

    const phonePattern = /^(?:\+93|0)7\d{8}$/;
    if (!phonePattern.test(phoneNumber)) {
        e.preventDefault();
        alert("موبایل نمبز غلط دی");
        return;
    }

    if (comment.length < 10) {
        e.preventDefault();
        alert("نظر باید لږ تر لږه 10 حروف ولري");
        return;
    }

    if (comment.length > 300) {
        e.preventDefault();
        alert("نظر باید له 300 حروفو زیات نه وي");
        return;
    }
    alert("ولیږل شو");
});



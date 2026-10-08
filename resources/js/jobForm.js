
document.getElementById("jobForm").addEventListener("submit", function (e) {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const experience = document.getElementById("experience").value.trim();

    if (name.length < 3) {
        e.preventDefault();
        alert("نوم باید لږ تر لږه 3 توري ولري");
        return;
    } else if (name.length > 20) {
        e.preventDefault();
        alert("له ۲۰ کرکترو لوی نوم ته اجازه نشته ");
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {
        e.preventDefault();
        alert("سم ایمیل ولیکئ");
        return;
    }

    const phonePattern = /^(?:\+93|0)7\d{8}$/;

    if (!phonePattern.test(phone)) {
        e.preventDefault();
        alert(" افغانی نمبر ولیکئ");
        return;
    }

    if (experience.length < 20) {
        e.preventDefault();
        alert("مهرباني وکړئ لږ تر لږه 20 حروف تجربه ولیکئ");
        return;
    }

    if (experience.length > 500) {
        e.preventDefault();
        alert("تجربه باید له 500 حروفو زیاته نه وي");
        return;
    }

    alert("ولیږل شو!");

});
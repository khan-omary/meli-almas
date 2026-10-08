document.querySelector("form").addEventListener("submit", function (e) {

    const name = document.getElementById("firstname").value.trim();
    const postNumber = document.getElementById("post-number").value.trim();
    const comment = document.getElementById("comment").value.trim();


    if (name.length < 3) {
        e.preventDefault();
        alert("نوم باید لږ تر لږه 3 حروف ولري");
        return;
    }

    if (name.length > 40) {
        e.preventDefault();
        alert("نوم باید له 40 حروفو زیات نه وي");
        return;
    }


    const post = document.getElementById(postNumber);

    if (!post) {
        e.preventDefault();
        alert("دا پوسټ نمبر شتون نه لري");
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

    alert("په بریالیتوب سره واستول شو");

});


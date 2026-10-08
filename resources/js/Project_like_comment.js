// const likeBtn = document.getElementById("likeBtn");
// const likeCount = document.getElementById("likeCount");

// let count = 0;

// likeBtn.addEventListener("click", function () {
//     count++;
//     likeCount.innerText = count;
// });

const likeButton = document.querySelectorAll(".likeBtn");

likeButton.forEach(function (button){
    let count = 0;

    button.addEventListener("click", function(){
        count++;

        button.querySelector(".likeCount").innerText = count;
    });
});
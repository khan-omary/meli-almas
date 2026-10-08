const new_section = document.getElementById("new-section");
new_section.classList.add("new-section");

const h2 = document.createElement("h2");
h2.id = "news_header";
h2.textContent = "خبرونه";
// h2.classList.add("news_header")
h2.classList.add("news_title");

const news_div = document.createElement("div");
news_div.id = "news";
news_div.classList.add("news");

const newsContent_list = [
    {
        image_path: "/image/news/78.jpeg",
        news_title: "د نوې استوګنیزې پروژې پیل",
        news_paragrap: " موږ په خوښۍ سره اعلان کوو چې زموږ شرکت د یوې نوې عصري استوګنیزې پروژې کار پیل کړی دی. دا پروژه د لوړ کیفیت، عصري ډیزاین او قوي جوړښتونو پر بنسټ طرحه شوې ده. موږ ژمن یو چې دا پروژه په ټاکلي وخت او لوړ معیار سره بشپړه کړو."
    },
    {
        image_path: "/image/news/77.png",
        news_title: "یوه بله پروژه هم بشپړه شوه",
        news_paragrap: " موږ په ویاړ سره اعلان کوو چې زموږ د شرکت یوه مهمه ساختماني پروژه په بریالیتوب سره بشپړه شوه. دا پروژه د کیفیت، خوندیتوب او دقیق کار یوه ښه بېلګه ده. موږ د خپل ټیم هڅې او د خپلو مراجعینو باور ستایو، او ژمن یو چې په راتلونکي کې هم ورته بریاوې ترلاسه کړو.",
    },
    {
        image_path: "/image/news/80.jpeg",
        news_title: "زموږ ټیم لا پیاوړی شو",
        news_paragrap: " موږ تل هڅه کوو چې خپل ټیم نور هم قوي کړو. په همدې موخه، موږ نوي مسلکي انجنیران او تخنیکي کارکوونکي جذب کړي دي ترڅو خپلو خدماتو ته لا زیات کیفیت او سرعت ورکړو. زموږ ځواک زموږ ټیم دی، او موږ باور لرو چې له قوي ټیم سره قوي پروژې جوړېږي.",
    },
    {
        image_path: "/image/news/79.jpeg",
        news_title: "د نوې ساختماني ټکنالوژۍ کارول پیل شول",
        news_paragrap: " موږ د خپلو خدماتو د لا ښه کولو لپاره نوې ټکنالوژي او پرمختللي وسایل کارول پیل کړي دي. دا به زموږ پروژې لا دقیقې، چټکې او باکیفیته کړي. موږ تل هڅه کوو چې له نوښتونو سره یو ځای واوسو او خپلو مراجعینو ته غوره خدمات وړاندې کړو.",
    },
    {
        image_path: "/image/news/78.jpeg",
        news_title: "د مراجعینو باور زموږ ستره لاسته راوړنه ده",
        news_paragrap: " موږ ویاړو چې زموږ مراجعین زموږ له خدماتو څخه خوښ دي. د هغوی مثبت نظرونه موږ ته دا ځواک راکوي چې لا ښه کار وکړو او خپل معیارونه لوړ وساتو. ستاسو باور زموږ لپاره تر ټولو مهم دی.",
    },
    {
        image_path: "/image/news/80.jpeg",
        news_title: "زموژ شرکت ودانیزی ، سرک جوړونه",
        news_paragrap: "، ترمیم پروژی نیسی او جوړوی.چی هدف مو د هیواد او خلکو خدمت دی. زموژ شرکت ودانیزی ، سرک جوړونه ، ترمیم پروژی نیسی او جوړوی.چی هدف مو د هیواد او خلکو خدمت دی. زموژ شرکت ودانیزی ، سرک جوړونه ، ترمیم پروژی نیسی او جوړوی.چی هدف مو د هیواد او خلکو خدمت دی.",
    },
];


newsContent_list.forEach(com_News => {
    const one_complete_news = document.createElement("div");
    one_complete_news.id = "com_news";
    one_complete_news.classList.add("com_news");

    const img = document.createElement("img");
    img.src = com_News.image_path;
    img.classList.add("img");

    const news_con = document.createElement("div");
    news_con.id = "news-content";
    news_con.classList.add("news-content");

    const new_title = document.createElement("h3");
    new_title.textContent = com_News.news_title;

    const news_paragrap = document.createElement("p");
    news_paragrap.textContent = com_News.news_paragrap;



    news_con.append(new_title, news_paragrap);
    one_complete_news.append(img, news_con);
    news_div.append(one_complete_news);

});

function controlSlides(direction) {
    const container = document.getElementById("news");
    const scrollAmount = 300;

    container.scrollBy({
        left: direction * scrollAmount,
        behavior: "smooth"
    });
}

const prev = document.createElement("span");
prev.classList.add("prev");
prev.innerHTML = "&#10094;";

const next = document.createElement("span");
next.classList.add("next");
next.innerHTML = "&#10095;";

prev.addEventListener("click", function () {
    controlSlides(-1);
});
next.addEventListener("click", function () {
    controlSlides(1);
})

new_section.append(prev, next, h2, news_div);
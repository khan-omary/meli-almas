    const section = document.getElementById("FAQ-section");
    section.classList.add("FAQ-section");


    const titleDiv = document.createElement("div");
    titleDiv.id = "faq-title";
    titleDiv.classList.add("faq-title");

    const title = document.createElement("h2");
    title.textContent = "ډیری پوښتل شوی پوښتنی";

    titleDiv.append(title);
    section.append(titleDiv);

    const faqData = [
        {
            q: "ستاسو شرکت کوم خدمات وړاندی کوی؟",
            a: "موږ د ساختماني سکتور پراخ خدمات وړاندې کوو، چې پکې د استوګنیزو کورونو جوړول، تجارتي ودانۍ، ترمیم او بیا رغونه، داخلي او خارجي ډیزاین، او د پروژې مدیریت شامل دي.موږ هڅه کوو چې له پیل څخه تر پای پورې بشپړ او معیاري خدمات وړاندې کړو."
        },
        {
            q: "ستاسو شرکت کوم په ښارونو کی فعالیت لري؟",
            a: "زموږ شرکت د افغانستان په ټولو ولایتونو او ښارونو کې فعالیت کوي. که پروژه کوچنۍ وي یا لویه، موږ چمتو یو چې په هره سیمه کې ستاسو خدمت وکړو."
        },
        {
            q: "یوه پروژه څومر وخت نیسی؟",
            a: "د پروژې وخت د هغې د اندازې، ډیزاین او اړتیاوو پورې اړه لري. کوچنۍ پروژې ممکن څو اونۍ وخت  ونیسي، خو لویې پروژې ښایي څو میاشتې یا زیات وخت ته اړتیا ولري. موږ تل هڅه کوو چې پروژه په ټاکلي وخت او لوړ کیفیت سره بشپړه کړو."
        },
        {
            q: "ایا تاسو د ودانی ډیزاین هم کوی؟",
            a: " هو، موږ د ودانیو عصري او مسلکي ډیزاین هم ترسره کوو. زموږ ټیم ستاسو اړتیاوې او خوښې په نظر کې نیسي او داسې ډیزاین وړاندې کوي چې هم ښکلی وي او هم عملي."
        },
        {
            q: "ایا تاسو خدمات customize کوی؟",
            a: " هو، موږ خپل خدمات ستاسو د غوښتنو او بودیجې سره سم تنظیموو، ترڅو تاسو ته تر ټولو مناسب حل وړاندې کړو."
        },
        {
            q: "زما معلومات خوندي دي؟",
            a: " هو، ستاسو معلومات زموږ لپاره ډېر ارزښت لري. موږ د معلوماتو د خوندیتوب لپاره پرمختللي تدابیر کاروو او ډاډ درکوو چې ستاسو شخصي معلومات په بشپړ ډول خوندي او محرم ساتل کیږي."
        }
    ];

    faqData.forEach(item => {

        const faqItem = document.createElement("div");
        faqItem.classList.add("faq_item");

        const questionDiv = document.createElement("div");
        questionDiv.classList.add("quistion");

        const h3 = document.createElement("h3");
        h3.textContent = item.q;

        const plus = document.createElement("span");
        plus.textContent = "+";
        plus.classList.add("plus");

        questionDiv.append(h3, plus);

        const answerDiv = document.createElement("div");
        answerDiv.classList.add("answer");

        const p = document.createElement("p");
        p.textContent = item.a;

        answerDiv.append(p);

        questionDiv.addEventListener("click", function () {

            faqItem.classList.toggle("active");
            if (plus.textContent === "+") {
                plus.textContent = "-";
            } else {
                plus.textContent = "+";
            }

        });

        faqItem.append(questionDiv, answerDiv);
        section.append(faqItem);

    });

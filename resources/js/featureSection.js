console.log("FEATURE JS LOADED");

document.addEventListener("DOMContentLoaded", function () {
    console.log("FEATURE JS LOADED");

    const section = document.getElementById("cr_tech_sec_cln_section");

    const container = document.createElement("div");
    container.id = "cr_tech_sec_cln";

    const SectionTitle = document.createElement("h2");
    SectionTitle.textContent = "زموژ معیارونه";
    SectionTitle.classList.add("hero_title");

    const cardsData = [
        {
            title: "خلاقیت",
            img: "https://static.vecteezy.com/system/resources/previews/023/900/645/non_2x/bulb-creative-idea-icon-vector.jpg",
            text: "موږ باور لرو چې هره ودانۍ باید ځانګړې وی. زموږ ټیم د نوښت، تخیل او عصري ډیزاینونو    په کارولو سره داسې جوړښتونه رامنځته کوي چې نه یوازې ښکلي وي، بلکې د کاروونکو اړتیاوې هم په بشپړ ډول   پوره کړي. موږ هره پروژه د یوې نوې مفکورې په توګه ګورو، چیرته چې د رنګونو، شکلونو او فضاوو ترمنځ توازن  رامنځته کوو، ترڅو داسې چاپیریال جوړ شي چې الهام بخښونکی او ژوندی وي. موږ ستاسو خیالونه په داسې خلاقانه واقعیت بدل کوو چې تل به وځلېږي."
        },
        {
            title: "تکنالوژی",
            img: "https://static.vecteezy.com/system/resources/previews/048/768/612/original/digital-technology-gear-icon-concept-network-sign-and-symbol-vector.jpg",
            text: " موږ د نوې ټکنالوژۍ په کارولو سره ساختماني پروسې چټکې، دقیقې او اغېزمنې کوو. زموږ ټیم د پرمختللو سافټویرونو، ډیجیټل ډیزاین او عصري ماشینونو څخه کار اخلي ترڅو هره پروژه په لوړ معیار سره بشپړه شي. له 3D ډیزاین څخه نیولې تر هوښیارو ساختماني حللارو پورې، موږ تل هڅه کوو چې نوښتونه خپلو پروژو کې شامل کړو. دا موږ ته دا توان راکوي چې ستاسو لپاره داسې ودانۍ جوړې کړو چې د راتلونکي اړتیاوې هم پوره کړي."
        },
        {
            title: "خوندیتوب",
            img: "https://img.freepik.com/premium-vector/cyber-protection-vector-linear-cloud-computing-line-icon_705714-981.jpg?w=2000",
            text: "موږ د هرې پروژې په هر پړاو کې د خوندیتوب اصول په جدي توګه تعقیبوو. زموږ لپاره د کارکوونکو،  مراجعینو او چاپیریال خوندیتوب تر هر څه مهم دی. موږ د نړیوالو معیارونو سره سم کار کوو او ډاډ ترلاسه کوو چې ټول ساختماني فعالیتونه په خوندي او کنټرول شوي ډول ترسره شي. زموږ ټیم په دوامداره توګه روزل کیږي ترڅو د خطرونو مخنیوی وکړي او خوندي کاري چاپیریال رامنځته کړي. ځکه چې موږ باور لرو، یو قوي جوړښت هغه دی چې په خوندي ډول جوړ شوی وي."
        },
        {
            title: "شفافیت",
            img: "https://www.svgrepo.com/show/375208/transparent.svg",
            text: "موږ خپلو مراجعینو سره په بشپړ صداقت او روڼتیا کار کوو. د پروژې له پیل . موږ د لګښتونو، وخت او پرمختګ په اړه صادقانه معلومات وړاندې کوو، ترڅو ستاسو باور لا پیاوړی شي. زموږ هدف یوازې پروژه بشپړول نه دي، بلکې د اوږدمهاله باور جوړول دي. له موږ سره، هر څه واضح، ساده او د باور وړ دي."
        }
    ];

    cardsData.forEach(card => {

        const cardDiv = document.createElement("div");
        cardDiv.classList.add("card");

        const cardImage = document.createElement("div");
        cardImage.classList.add("card-image");

        const img = document.createElement("img");
        img.src = card.img;

        cardImage.append(img);

        const h3 = document.createElement("h3");
        h3.textContent = card.title;

        const overlay = document.createElement("div");
        overlay.classList.add("overlay");

        const overlayTitle = document.createElement("h3");
        overlayTitle.textContent = card.title;

        const p = document.createElement("p");
        p.classList.add("card-p");
        p.textContent = card.text;

        overlay.append(overlayTitle, p);
        cardDiv.append(cardImage, h3, overlay);
        container.append(cardDiv);
    });

    section.append(SectionTitle, container);

});

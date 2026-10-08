const Idea_Section = document.getElementById("People_Ideas");
Idea_Section.classList.add("Idea_Section");
const section_title = document.createElement("h1");
section_title.textContent = "د بعضو مسوساتو او شرکتونو د  کارمندانو نظریات";
section_title.classList.add("h2");

const main_container = document.createElement("div");
main_container.classList.add("main_container");

async function fetchPeople() {
    try {

        const response = await fetch("http://localhost:3000/people");
        const users = await response.json();
        users.forEach((user) => {

            const card = document.createElement("div");
            card.classList.add("person_card");

            const personImage = document.createElement("img");
            personImage.src = user.image;
            personImage.alt = user.name;
            personImage.classList.add("person_image");

            const person_name = document.createElement("h2");
            person_name.classList.add("person_name");
            person_name.textContent = user.name;

            const position = document.createElement("h2");
            position.classList.add("person_position");
            position.textContent = user.position;

            const comment = document.createElement("p");

            comment.classList.add("person_comment");
            comment.textContent = user.comment;

            card.append(personImage, person_name, position, comment);

            main_container.append(card);
        });

    } catch (error) {

        Idea_Section.textContent = "Failed to load people.";
    }
}
Idea_Section.append(section_title, main_container);

fetchPeople();
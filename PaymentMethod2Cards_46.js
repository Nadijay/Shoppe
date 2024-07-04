
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");
    const checkButtons = document.querySelectorAll(".card-check");

    cards.forEach(card => {
        card.addEventListener("click", (event) => {
            const isCheckButtonClick = event.target.closest('.card-check');
            if (isCheckButtonClick) {
                // If check button is clicked, toggle the selected class
                card.classList.toggle("selected");
            } else {
                // If card body is clicked, ensure only one card is selected
                cards.forEach(c => c.classList.remove("selected"));
                card.classList.add("selected");
            }
        });
    });
});

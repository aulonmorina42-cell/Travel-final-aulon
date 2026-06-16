document.querySelectorAll("form").forEach((form) => {
    form.addEventListener("submit", (event) => {
        const invalidField = form.querySelector("[required]:invalid");

        if (!invalidField) {
            return;
        }

        event.preventDefault();
        invalidField.focus();
    });
});

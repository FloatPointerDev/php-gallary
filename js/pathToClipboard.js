const linkButtons = document.querySelectorAll(".link-button");

for (const button of linkButton) {
    button.addEventListener("click", () => {
        navigator.clipboard.writeText(button.id);
        button.innerText = "Copied!";

        //  Reset button text after 1 second
        setTimeout(() => button.innerText = "Copy Link", 1000);
    });
}
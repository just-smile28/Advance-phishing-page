document.addEventListener("DOMContentLoaded", function () {
    const loginButton = document.querySelector(".log-in-button");
    const usernameInput = document.querySelector("input[name='username']");
    const passwordInput = document.querySelector("input[name='password']");

    loginButton.addEventListener("click", function (event) {
        if (usernameInput.value === "" || passwordInput.value === "") {
            alert("Please enter your credentials.");
            event.preventDefault();
        }
    });

    // Fake Typing Effect
    let placeholders = [
        "Phone number, username, or email",
        "Email or phone number",
        "Username"
    ];
    let index = 0;
    setInterval(() => {
        usernameInput.placeholder = placeholders[index];
        index = (index + 1) % placeholders.length;
    }, 3000);
});


document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".log-in-form");
    
    form.addEventListener("submit", function (event) {
        const email = form.querySelector('input[name="email"]').value;
        const password = form.querySelector('input[name="password"]').value;

        if (email.trim() === "" || password.trim() === "") {
            event.preventDefault(); // Form submit hone se rok do
            alert("Please enter a valid email and password.");
        } else {
            document.querySelector('input[name="sign-in"]').value = "Signing in...";
        }
    });
});


const loginButton = document.querySelector(".login-button");
const registerButton = document.querySelector(".register-button");
const formContainerLogin = document.querySelector(".form-container:first-child"); // Target first form container
const formContainerRegister = document.querySelector(".form-container:last-child"); // Target second form container

const toggleForm = (showForm) => {
  if (showForm === "login") {
    formContainerLogin.classList.remove("hidden");
    formContainerRegister.classList.add("hidden");

    // Optional animation for login form (add CSS class for animation)
    // formContainerLogin.classList.add("animated", "fadeInLeft"); // Example animation
    // formContainerLogin.addEventListener("animationend", () => {
    //   formContainerLogin.classList.remove("animated", "fadeInLeft");
    // });
  } else if (showForm === "register") {
    formContainerLogin.classList.add("hidden");
    formContainerRegister.classList.remove("hidden");

    // Optional animation for register form (add CSS class for animation)
    formContainerRegister.classList.add("animated", "fadeInRight"); // Example animation
    formContainerRegister.addEventListener("animationend", () => {
      formContainerRegister.classList.remove("animated", "fadeInRight");
    });
  }
};

// Initial state: Login form visible
toggleForm("login");

loginButton.addEventListener("click", () => {
  toggleForm("login");
});

registerButton.addEventListener("click", () => {
  toggleForm("register");
});

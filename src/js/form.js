function showLoginForm() {
  const initialView = document.getElementById("initialView");
  const loginFormView = document.getElementById("loginFormView");
  const headerTitle = document.getElementById("headerTitle");
  const headerSubtitle = document.getElementById("headerSubtitle");

  // Change header text
  headerTitle.textContent = "Login";
  headerSubtitle.textContent = "Enter username and password";

  // Switch views
  initialView.classList.add("hidden");
  loginFormView.classList.remove("hidden");
  loginFormView.classList.add("fade-in");
}

function showInitialView() {
  const initialView = document.getElementById("initialView");
  const loginFormView = document.getElementById("loginFormView");
  const headerTitle = document.getElementById("headerTitle");
  const headerSubtitle = document.getElementById("headerSubtitle");

  // Reset header text
  headerTitle.textContent = "Sign in";
  headerSubtitle.innerHTML = 'Sign in or <a href="#">create an account</a>';

  // Switch views
  loginFormView.classList.add("hidden");
  initialView.classList.remove("hidden");
  initialView.classList.add("fade-in");
}

function showForgotPassword() {
  const loginFormView = document.getElementById("loginFormView");
  const forgotPasswordView = document.getElementById("forgotPasswordView");
  const headerTitle = document.getElementById("headerTitle");
  const headerSubtitle = document.getElementById("headerSubtitle");

  // Change header text
  headerTitle.textContent = "Forgot Password";
  headerSubtitle.textContent = "Reset your password";

  // Switch views
  loginFormView.classList.add("hidden");
  forgotPasswordView.classList.remove("hidden");
  forgotPasswordView.classList.add("fade-in");
}

function backToLogin() {
  const loginFormView = document.getElementById("loginFormView");
  const forgotPasswordView = document.getElementById("forgotPasswordView");
  const headerTitle = document.getElementById("headerTitle");
  const headerSubtitle = document.getElementById("headerSubtitle");

  // Change header text back to login
  headerTitle.textContent = "Login";
  headerSubtitle.textContent = "Login your account";

  // Switch views
  forgotPasswordView.classList.add("hidden");
  loginFormView.classList.remove("hidden");
  loginFormView.classList.add("fade-in");
}

function handleEmailContinue(event) {
  event.preventDefault();
  const email = document.getElementById("emailOnly").value;
  alert("Email continue: " + email);
}

function handleLogin(event) {
  event.preventDefault();
  const email = document.getElementById("loginEmail").value;
  const password = document.getElementById("loginPassword").value;
  alert("Login attempt:\nEmail: " + email + "\nPassword: " + password);
}

function handleForgotPassword(event) {
  event.preventDefault();
  const email = document.getElementById("forgotEmail").value;
  alert("Password reset link sent to: " + email);
  // You can add success message or redirect here
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../src/css/forAuth.css">
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <h1>Mr. Swabe Apparel</h1>
            <p>& Collections</p>
        </div>

        <div class="login-header">
            <h2 id="headerTitle">Sign in</h2>
            <p id="headerSubtitle">Sign in or <a href="#">create an account</a></p>
        </div>

        <!-- Initial View -->
        <div id="initialView">
            <button class="btn-shop" onclick="showLoginForm()">Continue with Shop</button>

            <div class="divider">
                <span>or</span>
            </div>

            <form onsubmit="handleEmailContinue(event)">
                <div class="input-group">
                    <input type="email" id="emailOnly" placeholder="Email" required>
                </div>

                <button type="submit" class="btn-continue">Continue</button>
            </form>
        </div>

        <!-- Login Form (Hidden Initially) -->
        <div id="loginFormView" class="hidden">
            <form onsubmit="handleLogin(event)">
                <div class="input-group">
                    <input type="email" id="loginEmail" placeholder="Email" required>
                </div>

                <div class="input-group">
                    <input type="password" id="loginPassword" placeholder="Password" required>
                </div>

                <div class="forgot-password">
                    <a onclick="showForgotPassword()">Forgot password?</a>
                </div>

                <button type="submit" class="btn-continue">Sign In</button>
                <button type="button" class="btn-back" onclick="showInitialView()">Back</button>
            </form>
        </div>

        <!-- Forgot Password View (Hidden Initially) -->
        <div id="forgotPasswordView" class="hidden">
            <div class="info-text">
                Enter your email address and we'll send you a link to reset your password.
            </div>

            <form onsubmit="handleForgotPassword(event)">
                <div class="input-group">
                    <input type="email" id="forgotEmail" placeholder="Email" required>
                </div>

                <button type="submit" class="btn-continue">Send Reset Link</button>
                <button type="button" class="btn-back" onclick="backToLogin()">Back to Login</button>
            </form>
        </div>

        <div class="footer-links">
            <a href="#">Privacy policy</a>
            <a href="#">Terms of service</a>
        </div>
    </div>

    <script src="../src/js/form.js"></script>
</body>
</html>
<div id="successMessage" class="success-message" style="display: none;">
    <div class="success-content">
        <span class="success-icon">✓</span>
        <span class="success-text">Product added to cart successfully!</span>
    </div>
</div>

<style>
.success-message {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #FFFFFF; /* White background */
    color: #000000; /* Black text */
    border: 1px solid #FFD700; /* Thin yellow border */
    border-left: 4px solid #FFD700; /* Accent left border */
    padding: 12px 18px;
    border-radius: 4px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    z-index: 1000;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 14px;
    display: flex;
    align-items: center;
    animation: fadeIn 0.4s ease-out;
    max-width: 350px;
}

.success-content {
    display: flex;
    align-items: center;
}

.success-icon {
    font-size: 18px;
    margin-right: 8px;
    color: #FFD700; /* Yellow icon */
    font-weight: bold;
}

.success-text {
    font-weight: 500;
    line-height: 1.4;
}

@keyframes fadeIn {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}
</style>

<aside class="admin-panel">
    <div class="panel-header">
        <div class="panel-logo">S</div>
        <div class="panel-title">Admin Panel</div>
    </div>
    
    <nav class="nav-menu">
        <a href="?page=dashboard" class="nav-item <?php echo ($currentPage == 'dashboard') ? 'active' : ''; ?>">
            <span class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
            </span>
            Dashboard
        </a>

        <a href="?page=addSales" class="nav-item <?php echo ($currentPage == 'addSales') ? 'active' : ''; ?>">
            <span class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
            </span>
            Add Sales
        </a>
    </nav>
    
    <div class="panel-footer">
        <div class="help-section">
            <div class="help-title">Need Help?</div>
            <p class="help-text">Check our documentation</p>
            <button class="help-button">View Docs</button>
        </div>
    </div>
</aside>

<button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="3" y1="12" x2="21" y2="12"></line>
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <line x1="3" y1="18" x2="21" y2="18"></line>
    </svg>
</button>

<script>
function toggleMobileMenu() {
    document.querySelector('.admin-panel').classList.toggle('open');
}
</script>
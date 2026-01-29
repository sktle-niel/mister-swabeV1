<div class="main-content">
    <div class="content-header">
        <div>
            <h2 class="page-title">Categories</h2>
            <p class="page-subtitle">Organize your products into categories</p>
        </div>
        <button class="btn btn-primary" onclick="openCategoryModal()">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
            Add Category
        </button>
    </div>
    
    <!-- Categories Grid -->
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: var(--spacing-lg);">
        <!-- Sneakers Category -->
        <div class="card" style="position: relative;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: var(--spacing-lg);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(99, 102, 241, 0.2), rgba(99, 102, 241, 0.05)); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                    <div style="width: 40px; height: 40px; background: rgba(99, 102, 241, 0.2); border-radius: var(--radius-md);"></div>
                </div>
                <div style="display: flex; gap: var(--spacing-sm);">
                    <button class="btn btn-icon btn-secondary" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </button>
                    <button class="btn btn-icon btn-secondary" title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: var(--spacing-xs);">Sneakers</h3>
            <p style="font-size: 0.875rem; color: var(--text-secondary);">145 products</p>
        </div>
        
        <!-- T-Shirts Category -->
        <div class="card" style="position: relative;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: var(--spacing-lg);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(16, 185, 129, 0.2), rgba(16, 185, 129, 0.05)); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                    <div style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.2); border-radius: var(--radius-md);"></div>
                </div>
                <div style="display: flex; gap: var(--spacing-sm);">
                    <button class="btn btn-icon btn-secondary" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </button>
                    <button class="btn btn-icon btn-secondary" title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: var(--spacing-xs);">T-Shirts</h3>
            <p style="font-size: 0.875rem; color: var(--text-secondary);">89 products</p>
        </div>
        
        <!-- Shirts Category -->
        <div class="card" style="position: relative;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: var(--spacing-lg);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(139, 92, 246, 0.2), rgba(139, 92, 246, 0.05)); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                    <div style="width: 40px; height: 40px; background: rgba(139, 92, 246, 0.2); border-radius: var(--radius-md);"></div>
                </div>
                <div style="display: flex; gap: var(--spacing-sm);">
                    <button class="btn btn-icon btn-secondary" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </button>
                    <button class="btn btn-icon btn-secondary" title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: var(--spacing-xs);">Shirts</h3>
            <p style="font-size: 0.875rem; color: var(--text-secondary);">67 products</p>
        </div>
        
        <!-- Accessories Category -->
        <div class="card" style="position: relative;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: var(--spacing-lg);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(245, 158, 11, 0.2), rgba(245, 158, 11, 0.05)); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                    <div style="width: 40px; height: 40px; background: rgba(245, 158, 11, 0.2); border-radius: var(--radius-md);"></div>
                </div>
                <div style="display: flex; gap: var(--spacing-sm);">
                    <button class="btn btn-icon btn-secondary" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </button>
                    <button class="btn btn-icon btn-secondary" title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: var(--spacing-xs);">Accessories</h3>
            <p style="font-size: 0.875rem; color: var(--text-secondary);">43 products</p>
        </div>
        
        <!-- Hoodies Category -->
        <div class="card" style="position: relative;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: var(--spacing-lg);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(236, 72, 153, 0.2), rgba(236, 72, 153, 0.05)); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                    <div style="width: 40px; height: 40px; background: rgba(236, 72, 153, 0.2); border-radius: var(--radius-md);"></div>
                </div>
                <div style="display: flex; gap: var(--spacing-sm);">
                    <button class="btn btn-icon btn-secondary" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </button>
                    <button class="btn btn-icon btn-secondary" title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: var(--spacing-xs);">Hoodies</h3>
            <p style="font-size: 0.875rem; color: var(--text-secondary);">32 products</p>
        </div>
        
        <!-- Pants Category -->
        <div class="card" style="position: relative;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: var(--spacing-lg);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(234, 179, 8, 0.2), rgba(234, 179, 8, 0.05)); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                    <div style="width: 40px; height: 40px; background: rgba(234, 179, 8, 0.2); border-radius: var(--radius-md);"></div>
                </div>
                <div style="display: flex; gap: var(--spacing-sm);">
                    <button class="btn btn-icon btn-secondary" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </button>
                    <button class="btn btn-icon btn-secondary" title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: var(--spacing-xs);">Pants</h3>
            <p style="font-size: 0.875rem; color: var(--text-secondary);">56 products</p>
        </div>
    </div>
</div>

<script>
function openCategoryModal() {
    showToast('info', 'Category modal would open here');
}
</script>
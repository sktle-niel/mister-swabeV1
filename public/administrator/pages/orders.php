<div class="main-content">
    <div class="content-header">
        <div>
            <h2 class="page-title">Orders</h2>
            <p class="page-subtitle">Manage and track customer orders</p>
        </div>
    </div>
    
    <!-- Order Stats -->
    <div class="stats-grid" style="margin-bottom: var(--spacing-2xl);">
        <div class="stat-card" style="--stat-color: #6366f1;">
            <div class="stat-header">
                <div>
                    <div class="stat-label">Total Orders</div>
                </div>
            </div>
            <div class="stat-value">1,945</div>
        </div>
        
        <div class="stat-card" style="--stat-color: #10b981;">
            <div class="stat-header">
                <div>
                    <div class="stat-label">Pending</div>
                </div>
            </div>
            <div class="stat-value">45</div>
        </div>
        
        <div class="stat-card" style="--stat-color: #3b82f6;">
            <div class="stat-header">
                <div>
                    <div class="stat-label">Processing</div>
                </div>
            </div>
            <div class="stat-value">128</div>
        </div>
        
        <div class="stat-card" style="--stat-color: #10b981;">
            <div class="stat-header">
                <div>
                    <div class="stat-label">Delivered</div>
                </div>
            </div>
            <div class="stat-value">1,772</div>
        </div>
    </div>
    
    <!-- Recent Orders -->
    <div class="card">
        <div style="margin-bottom: var(--spacing-lg);">
            <h3 style="font-size: 1.125rem; font-weight: 600; margin-bottom: var(--spacing-xs);">Recent Orders</h3>
        </div>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: 600; color: var(--accent-primary);">ORD-001</td>
                        <td>John Doe</td>
                        <td>2025-01-28</td>
                        <td>2</td>
                        <td style="font-weight: 600;">₱1,599</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td>
                            <div style="display: flex; gap: var(--spacing-sm);">
                                <button class="btn btn-icon btn-secondary" title="View">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                                <button class="btn btn-icon btn-secondary" title="Print">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="font-weight: 600; color: var(--accent-primary);">ORD-002</td>
                        <td>Jane Smith</td>
                        <td>2025-01-28</td>
                        <td>3</td>
                        <td style="font-weight: 600;">₱2,498</td>
                        <td><span class="badge badge-info">Processing</span></td>
                        <td>
                            <div style="display: flex; gap: var(--spacing-sm);">
                                <button class="btn btn-icon btn-secondary" title="View">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                                <button class="btn btn-icon btn-secondary" title="Print">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="font-weight: 600; color: var(--accent-primary);">ORD-003</td>
                        <td>Mike Johnson</td>
                        <td>2025-01-27</td>
                        <td>1</td>
                        <td style="font-weight: 600;">₱999</td>
                        <td><span class="badge" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;">Shipped</span></td>
                        <td>
                            <div style="display: flex; gap: var(--spacing-sm);">
                                <button class="btn btn-icon btn-secondary" title="View">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                                <button class="btn btn-icon btn-secondary" title="Print">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="font-weight: 600; color: var(--accent-primary);">ORD-004</td>
                        <td>Sarah Williams</td>
                        <td>2025-01-27</td>
                        <td>4</td>
                        <td style="font-weight: 600;">₱3,297</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td>
                            <div style="display: flex; gap: var(--spacing-sm);">
                                <button class="btn btn-icon btn-secondary" title="View">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                                <button class="btn btn-icon btn-secondary" title="Print">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="font-weight: 600; color: var(--accent-primary);">ORD-005</td>
                        <td>David Brown</td>
                        <td>2025-01-26</td>
                        <td>2</td>
                        <td style="font-weight: 600;">₱1,748</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td>
                            <div style="display: flex; gap: var(--spacing-sm);">
                                <button class="btn btn-icon btn-secondary" title="View">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                                <button class="btn btn-icon btn-secondary" title="Print">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
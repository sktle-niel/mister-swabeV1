<div class="main-content">
    <div class="content-header">
        <div>
            <h2 class="page-title">Customers</h2>
            <p class="page-subtitle">Manage your customer database</p>
        </div>
    </div>
    
    <!-- Customer Stats -->
    <div class="stats-grid" style="margin-bottom: var(--spacing-2xl);">
        <div class="stat-card" style="--stat-color: #6366f1;">
            <div class="stat-header">
                <div>
                    <div class="stat-label">Total Customers</div>
                </div>
            </div>
            <div class="stat-value">892</div>
            <div class="stat-change positive">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="18 15 12 9 6 15"></polyline>
                </svg>
                +24 this week
            </div>
        </div>
        
        <div class="stat-card" style="--stat-color: #10b981;">
            <div class="stat-header">
                <div>
                    <div class="stat-label">Active Customers</div>
                </div>
            </div>
            <div class="stat-value">734</div>
            <div class="stat-change positive">82.3% of total</div>
        </div>
        
        <div class="stat-card" style="--stat-color: #ec4899;">
            <div class="stat-header">
                <div>
                    <div class="stat-label">VIP Customers</div>
                </div>
            </div>
            <div class="stat-value">56</div>
            <div class="stat-change" style="background: rgba(236, 72, 153, 0.1); color: #ec4899;">Top spenders</div>
        </div>
    </div>
    
    <!-- Customer List -->
    <div class="card">
        <div style="margin-bottom: var(--spacing-lg);">
            <h3 style="font-size: 1.125rem; font-weight: 600; margin-bottom: var(--spacing-xs);">Customer List</h3>
        </div>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Contact</th>
                        <th>Orders</th>
                        <th>Total Spent</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #6366f1, #7c3aed); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">JD</div>
                                <div>
                                    <div style="font-weight: 600; color: var(--text-primary);">John Doe</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="font-size: 0.875rem;">
                                <div style="color: var(--text-secondary); margin-bottom: 0.25rem;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; vertical-align: middle; margin-right: 0.25rem;">
                                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                    john@example.com
                                </div>
                                <div style="color: var(--text-secondary);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; vertical-align: middle; margin-right: 0.25rem;">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    +63 912 345 6789
                                </div>
                            </div>
                        </td>
                        <td style="font-weight: 600;">24</td>
                        <td style="font-weight: 600; color: var(--accent-success);">₱45,890</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                            <button class="btn btn-secondary" style="font-size: 0.875rem; padding: 0.5rem 1rem;">View Profile</button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #ec4899, #f43f5e); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">JS</div>
                                <div>
                                    <div style="font-weight: 600; color: var(--text-primary);">Jane Smith</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="font-size: 0.875rem;">
                                <div style="color: var(--text-secondary); margin-bottom: 0.25rem;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; vertical-align: middle; margin-right: 0.25rem;">
                                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                    jane@example.com
                                </div>
                                <div style="color: var(--text-secondary);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; vertical-align: middle; margin-right: 0.25rem;">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    +63 923 456 7890
                                </div>
                            </div>
                        </td>
                        <td style="font-weight: 600;">18</td>
                        <td style="font-weight: 600; color: var(--accent-success);">₱32,450</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                            <button class="btn btn-secondary" style="font-size: 0.875rem; padding: 0.5rem 1rem;">View Profile</button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #10b981, #14b8a6); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">MJ</div>
                                <div>
                                    <div style="font-weight: 600; color: var(--text-primary);">Mike Johnson</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="font-size: 0.875rem;">
                                <div style="color: var(--text-secondary); margin-bottom: 0.25rem;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; vertical-align: middle; margin-right: 0.25rem;">
                                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                    mike@example.com
                                </div>
                                <div style="color: var(--text-secondary);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; vertical-align: middle; margin-right: 0.25rem;">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    +63 934 567 8901
                                </div>
                            </div>
                        </td>
                        <td style="font-weight: 600;">32</td>
                        <td style="font-weight: 600; color: var(--accent-success);">₱58,920</td>
                        <td><span class="badge" style="background: rgba(236, 72, 153, 0.1); color: #ec4899;">VIP</span></td>
                        <td>
                            <button class="btn btn-secondary" style="font-size: 0.875rem; padding: 0.5rem 1rem;">View Profile</button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #f59e0b, #f97316); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">SW</div>
                                <div>
                                    <div style="font-weight: 600; color: var(--text-primary);">Sarah Williams</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="font-size: 0.875rem;">
                                <div style="color: var(--text-secondary); margin-bottom: 0.25rem;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; vertical-align: middle; margin-right: 0.25rem;">
                                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                    sarah@example.com
                                </div>
                                <div style="color: var(--text-secondary);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; vertical-align: middle; margin-right: 0.25rem;">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    +63 945 678 9012
                                </div>
                            </div>
                        </td>
                        <td style="font-weight: 600;">12</td>
                        <td style="font-weight: 600; color: var(--accent-success);">₱18,750</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                            <button class="btn btn-secondary" style="font-size: 0.875rem; padding: 0.5rem 1rem;">View Profile</button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #64748b, #475569); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">DB</div>
                                <div>
                                    <div style="font-weight: 600; color: var(--text-primary);">David Brown</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="font-size: 0.875rem;">
                                <div style="color: var(--text-secondary); margin-bottom: 0.25rem;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; vertical-align: middle; margin-right: 0.25rem;">
                                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                    david@example.com
                                </div>
                                <div style="color: var(--text-secondary);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; vertical-align: middle; margin-right: 0.25rem;">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    +63 956 789 0123
                                </div>
                            </div>
                        </td>
                        <td style="font-weight: 600;">5</td>
                        <td style="font-weight: 600; color: var(--accent-success);">₱8,920</td>
                        <td><span class="badge" style="background: rgba(100, 116, 139, 0.1); color: #64748b;">Inactive</span></td>
                        <td>
                            <button class="btn btn-secondary" style="font-size: 0.875rem; padding: 0.5rem 1rem;">View Profile</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
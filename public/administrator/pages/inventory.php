<div class="main-content">
    <div class="content-header">
        <div>
            <h2 class="page-title">Inventory Management</h2>
            <p class="page-subtitle">Manage your product inventory and stock levels</p>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: 1fr 320px; gap: var(--spacing-lg);">
        <!-- Main Content -->
        <div>
            <div class="card">
                <div class="products-header" style="margin-bottom: var(--spacing-lg);">
                    <div style="flex: 1;">
                        <h3 style="font-size: 1.125rem; font-weight: 600;">Product Inventory</h3>
                    </div>
                    <div class="products-filters">
                        <select class="filter-select">
                            <option value="">All Categories</option>
                            <option value="sneakers">Sneakers</option>
                            <option value="tshirts">T-Shirts</option>
                            <option value="shirts">Shirts</option>
                            <option value="accessories">Accessories</option>
                        </select>
                        
                        <select class="filter-select">
                            <option value="">All Status</option>
                            <option value="in-stock">In Stock</option>
                            <option value="low-stock">Low Stock</option>
                            <option value="out-of-stock">Out of Stock</option>
                        </select>
                        
                        <button class="btn btn-primary" onclick="openProductModal('add')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            Add Product
                        </button>
                    </div>
                </div>
                
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>SKU</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #ef4444, #dc2626); border-radius: var(--radius-md);"></div>
                                        <div>
                                            <div style="font-weight: 600; color: var(--text-primary);">Classic Running Shoes</div>
                                        </div>
                                    </div>
                                </td>
                                <td style="color: var(--text-muted); font-size: 0.875rem;">SNK-001</td>
                                <td><span class="badge badge-info">Sneakers</span></td>
                                <td style="font-weight: 600;">₱1,299</td>
                                <td>45</td>
                                <td><span class="badge badge-success">In Stock</span></td>
                                <td>
                                    <div style="display: flex; gap: var(--spacing-xs);">
                                        <button class="btn btn-icon btn-secondary" title="View">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </button>
                                        <button class="btn btn-icon btn-secondary" title="More">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #f3f4f6, #d1d5db); border-radius: var(--radius-md);"></div>
                                        <div>
                                            <div style="font-weight: 600; color: var(--text-primary);">Premium Cotton Tee</div>
                                        </div>
                                    </div>
                                </td>
                                <td style="color: var(--text-muted); font-size: 0.875rem;">TSH-002</td>
                                <td><span class="badge badge-info">T-Shirts</span></td>
                                <td style="font-weight: 600;">₱349</td>
                                <td style="color: var(--accent-warning); font-weight: 600;">8</td>
                                <td><span class="badge badge-warning">Low Stock</span></td>
                                <td>
                                    <div style="display: flex; gap: var(--spacing-xs);">
                                        <button class="btn btn-icon btn-secondary" title="View">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </button>
                                        <button class="btn btn-icon btn-secondary" title="More">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #f59e0b, #d97706); border-radius: var(--radius-md);"></div>
                                        <div>
                                            <div style="font-weight: 600; color: var(--text-primary);">Street Style Kicks</div>
                                        </div>
                                    </div>
                                </td>
                                <td style="color: var(--text-muted); font-size: 0.875rem;">SNK-003</td>
                                <td><span class="badge badge-info">Sneakers</span></td>
                                <td style="font-weight: 600;">₱1,899</td>
                                <td>32</td>
                                <td><span class="badge badge-success">In Stock</span></td>
                                <td>
                                    <div style="display: flex; gap: var(--spacing-xs);">
                                        <button class="btn btn-icon btn-secondary" title="View">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </button>
                                        <button class="btn btn-icon btn-secondary" title="More">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #1f2937, #111827); border-radius: var(--radius-md);"></div>
                                        <div>
                                            <div style="font-weight: 600; color: var(--text-primary);">Casual Button Down</div>
                                        </div>
                                    </div>
                                </td>
                                <td style="color: var(--text-muted); font-size: 0.875rem;">SHT-004</td>
                                <td><span class="badge badge-info">Shirts</span></td>
                                <td style="font-weight: 600;">₱799</td>
                                <td style="color: var(--accent-danger); font-weight: 600;">0</td>
                                <td><span class="badge badge-danger">Out of Stock</span></td>
                                <td>
                                    <div style="display: flex; gap: var(--spacing-xs);">
                                        <button class="btn btn-icon btn-secondary" title="View">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </button>
                                        <button class="btn btn-icon btn-secondary" title="More">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #3b82f6, #2563eb); border-radius: var(--radius-md);"></div>
                                        <div>
                                            <div style="font-weight: 600; color: var(--text-primary);">Urban Comfort Sneakers</div>
                                        </div>
                                    </div>
                                </td>
                                <td style="color: var(--text-muted); font-size: 0.875rem;">SNK-005</td>
                                <td><span class="badge badge-info">Sneakers</span></td>
                                <td style="font-weight: 600;">₱1,599</td>
                                <td>18</td>
                                <td><span class="badge badge-success">In Stock</span></td>
                                <td>
                                    <div style="display: flex; gap: var(--spacing-xs);">
                                        <button class="btn btn-icon btn-secondary" title="View">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </button>
                                        <button class="btn btn-icon btn-secondary" title="More">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #1f2937, #111827); border-radius: var(--radius-md);"></div>
                                        <div>
                                            <div style="font-weight: 600; color: var(--text-primary);">Graphic Print Tee</div>
                                        </div>
                                    </div>
                                </td>
                                <td style="color: var(--text-muted); font-size: 0.875rem;">TSH-006</td>
                                <td><span class="badge badge-info">T-Shirts</span></td>
                                <td style="font-weight: 600;">₱399</td>
                                <td style="color: var(--accent-warning); font-weight: 600;">5</td>
                                <td><span class="badge badge-warning">Low Stock</span></td>
                                <td>
                                    <div style="display: flex; gap: var(--spacing-xs);">
                                        <button class="btn btn-icon btn-secondary" title="View">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </button>
                                        <button class="btn btn-icon btn-secondary" title="More">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #10b981, #059669); border-radius: var(--radius-md);"></div>
                                        <div>
                                            <div style="font-weight: 600; color: var(--text-primary);">Performance Running Shoes</div>
                                        </div>
                                    </div>
                                </td>
                                <td style="color: var(--text-muted); font-size: 0.875rem;">SNK-007</td>
                                <td><span class="badge badge-info">Sneakers</span></td>
                                <td style="font-weight: 600;">₱2,199</td>
                                <td>28</td>
                                <td><span class="badge badge-success">In Stock</span></td>
                                <td>
                                    <div style="display: flex; gap: var(--spacing-xs);">
                                        <button class="btn btn-icon btn-secondary" title="View">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </button>
                                        <button class="btn btn-icon btn-secondary" title="More">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #f3f4f6, #d1d5db); border-radius: var(--radius-md);"></div>
                                        <div>
                                            <div style="font-weight: 600; color: var(--text-primary);">Oversized Fit Tee</div>
                                        </div>
                                    </div>
                                </td>
                                <td style="color: var(--text-muted); font-size: 0.875rem;">TSH-008</td>
                                <td><span class="badge badge-info">T-Shirts</span></td>
                                <td style="font-weight: 600;">₱449</td>
                                <td>42</td>
                                <td><span class="badge badge-success">In Stock</span></td>
                                <td>
                                    <div style="display: flex; gap: var(--spacing-xs);">
                                        <button class="btn btn-icon btn-secondary" title="View">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </button>
                                        <button class="btn btn-icon btn-secondary" title="More">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
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
        
        <!-- Sidebar -->
        <div style="display: flex; flex-direction: column; gap: var(--spacing-lg);">
            <!-- Quick Actions -->
            <div class="card">
                <h3 style="font-size: 1rem; font-weight: 600; margin-bottom: var(--spacing-md);">Quick Actions</h3>
                <div style="display: flex; flex-direction: column; gap: var(--spacing-sm);">
                    <button class="btn btn-secondary" style="justify-content: flex-start; width: 100%;" onclick="openProductModal('add')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Add New Product
                    </button>
                    <button class="btn btn-secondary" style="justify-content: flex-start; width: 100%;" onclick="showToast('info', 'Coming soon')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="17 8 12 3 7 8"></polyline>
                            <line x1="12" y1="3" x2="12" y2="15"></line>
                        </svg>
                        Import CSV
                    </button>
                    <button class="btn btn-secondary" style="justify-content: flex-start; width: 100%;" onclick="showToast('info', 'Coming soon')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        Export Data
                    </button>
                    <button class="btn btn-secondary" style="justify-content: flex-start; width: 100%;" onclick="showToast('info', 'Coming soon')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"></path>
                            <path d="M21 3v5h-5"></path>
                        </svg>
                        Sync Stock
                    </button>
                </div>
            </div>
            
            <!-- Recent Activity -->
            <div class="card">
                <h3 style="font-size: 1rem; font-weight: 600; margin-bottom: var(--spacing-md);">Recent Activity</h3>
                <div style="display: flex; flex-direction: column; gap: var(--spacing-md);">
                    <div style="padding: var(--spacing-sm); background: rgba(245, 158, 11, 0.1); border-left: 3px solid var(--accent-warning); border-radius: var(--radius-sm);">
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.25rem;">
                            <span class="badge badge-warning" style="font-size: 0.625rem;">Low Stock Alert</span>
                            <span style="font-size: 0.75rem; color: var(--text-muted);">5 minutes ago</span>
                        </div>
                        <div style="font-size: 0.875rem; font-weight: 500;">Premium Cotton Tee</div>
                    </div>
                    
                    <div style="padding: var(--spacing-sm); background: rgba(16, 185, 129, 0.1); border-left: 3px solid var(--accent-success); border-radius: var(--radius-sm);">
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.25rem;">
                            <span class="badge badge-success" style="font-size: 0.625rem;">Product Added</span>
                            <span style="font-size: 0.75rem; color: var(--text-muted);">1 hour ago</span>
                        </div>
                        <div style="font-size: 0.875rem; font-weight: 500;">Urban Comfort Sneakers</div>
                    </div>
                    
                    <div style="padding: var(--spacing-sm); background: rgba(59, 130, 246, 0.1); border-left: 3px solid #3b82f6; border-radius: var(--radius-sm);">
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.25rem;">
                            <span class="badge" style="background: rgba(59, 130, 246, 0.1); color: #3b82f6; font-size: 0.625rem;">Stock Updated</span>
                            <span style="font-size: 0.75rem; color: var(--text-muted);">2 hours ago</span>
                        </div>
                        <div style="font-size: 0.875rem; font-weight: 500;">Classic Running Shoes</div>
                    </div>
                    
                    <div style="padding: var(--spacing-sm); background: rgba(239, 68, 68, 0.1); border-left: 3px solid var(--accent-danger); border-radius: var(--radius-sm);">
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.25rem;">
                            <span class="badge badge-danger" style="font-size: 0.625rem;">Out of Stock</span>
                            <span style="font-size: 0.75rem; color: var(--text-muted);">3 hours ago</span>
                        </div>
                        <div style="font-size: 0.875rem; font-weight: 500;">Casual Button Down</div>
                    </div>
                    
                    <div style="padding: var(--spacing-sm); background: rgba(139, 92, 246, 0.1); border-left: 3px solid #8b5cf6; border-radius: var(--radius-sm);">
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.25rem;">
                            <span class="badge" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6; font-size: 0.625rem;">Price Changed</span>
                            <span style="font-size: 0.75rem; color: var(--text-muted);">5 hours ago</span>
                        </div>
                        <div style="font-size: 0.875rem; font-weight: 500;">Street Style Kicks</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
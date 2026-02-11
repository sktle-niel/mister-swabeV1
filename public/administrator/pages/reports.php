<?php
require_once '../../config/connection.php';

// Query today's total sales
$todaySalesQuery = "SELECT SUM(total_amount) as total FROM sales WHERE DATE(created_at) = CURDATE()";
$todaySalesResult = $conn->query($todaySalesQuery);
$todayTotal = $todaySalesResult->fetch_assoc()['total'] ?? 0;
?>

<div class="main-content">
    <div class="content-header">
        <div>
            <h2 class="page-title">Reports</h2>
            <p class="page-subtitle">Generate and download business reports</p>
        </div>
    </div>
    
    
    <!-- Quick Generate -->
    <div class="card" style="margin-bottom: var(--spacing-2xl);">
        <div style="margin-bottom: var(--spacing-lg);">
            <h3 style="font-size: 1.125rem; font-weight: 600;">Quick Generate</h3>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: var(--spacing-lg);">
            <!-- Sales Report -->
            <div style="padding: var(--spacing-lg); background: var(--secondary-bg); border: 1px solid var(--border-color); border-radius: var(--radius-lg); transition: all var(--transition-base);" onmouseover="this.style.borderColor='var(--accent-primary)'" onmouseout="this.style.borderColor='var(--border-color)'">
                <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: var(--spacing-md);">
                    <div style="width: 48px; height: 48px; background: rgba(99, 102, 241, 0.1); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; color: var(--accent-primary);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                </div>
                <h4 style="font-size: 1rem; font-weight: 600; margin-bottom: var(--spacing-xs);">Sales Report</h4>
                <p style="font-size: 0.875rem; color: var(--text-muted); margin-bottom: var(--spacing-md);">Today's sales: <span style="color: black; font-weight: bold;">₱<?php echo number_format($todayTotal, 2); ?></span></p>
                <p style="font-size: 0.75rem; color: var(--text-muted);"><?php echo date('Y-m-d'); ?></p>
                <button class="btn btn-primary" style="width: 100%; margin-top: var(--spacing-md);" onclick="window.location.href='../../../back-end/download/salesReport.php'">Download</button>
            </div>
            
            <!-- Inventory Report -->
            <div style="padding: var(--spacing-lg); background: var(--secondary-bg); border: 1px solid var(--border-color); border-radius: var(--radius-lg); transition: all var(--transition-base);" onmouseover="this.style.borderColor='var(--accent-primary)'" onmouseout="this.style.borderColor='var(--border-color)'">
                <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: var(--spacing-md);">
                    <div style="width: 48px; height: 48px; background: rgba(16, 185, 129, 0.1); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; color: var(--accent-success);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                        </svg>
                    </div>
                    <button class="btn btn-icon btn-secondary" title="Download" onclick="showToast('success', 'Downloading Inventory Report...')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </button>
                </div>
                <h4 style="font-size: 1rem; font-weight: 600; margin-bottom: var(--spacing-xs);">Inventory Report</h4>
                <p style="font-size: 0.875rem; color: var(--text-muted); margin-bottom: var(--spacing-md);">Current stock levels and reorder requirements</p>
                <p style="font-size: 0.75rem; color: var(--text-muted);">2025-01-29</p>
                <button class="btn btn-primary" style="width: 100%; margin-top: var(--spacing-md);" onclick="showToast('info', 'Generating Inventory Report...')">Generate</button>
            </div>
            
            <!-- Customer Report -->
            <div style="padding: var(--spacing-lg); background: var(--secondary-bg); border: 1px solid var(--border-color); border-radius: var(--radius-lg); transition: all var(--transition-base);" onmouseover="this.style.borderColor='var(--accent-primary)'" onmouseout="this.style.borderColor='var(--border-color)'">
                <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: var(--spacing-md);">
                    <div style="width: 48px; height: 48px; background: rgba(139, 92, 246, 0.1); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; color: #8b5cf6;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <button class="btn btn-icon btn-secondary" title="Download" onclick="showToast('success', 'Downloading Customer Report...')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </button>
                </div>
                <h4 style="font-size: 1rem; font-weight: 600; margin-bottom: var(--spacing-xs);">Customer Report</h4>
                <p style="font-size: 0.875rem; color: var(--text-muted); margin-bottom: var(--spacing-md);">Customer acquisition and retention metrics</p>
                <p style="font-size: 0.75rem; color: var(--text-muted);">2025-01-29</p>
                <button class="btn btn-primary" style="width: 100%; margin-top: var(--spacing-md);" onclick="showToast('info', 'Generating Customer Report...')">Generate</button>
            </div>
            
            <!-- Financial Report -->
            <div style="padding: var(--spacing-lg); background: var(--secondary-bg); border: 1px solid var(--border-color); border-radius: var(--radius-lg); transition: all var(--transition-base);" onmouseover="this.style.borderColor='var(--accent-primary)'" onmouseout="this.style.borderColor='var(--border-color)'">
                <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: var(--spacing-md);">
                    <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.1); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; color: var(--accent-warning);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <button class="btn btn-icon btn-secondary" title="Download" onclick="showToast('success', 'Downloading Financial Report...')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </button>
                </div>
                <h4 style="font-size: 1rem; font-weight: 600; margin-bottom: var(--spacing-xs);">Financial Report</h4>
                <p style="font-size: 0.875rem; color: var(--text-muted); margin-bottom: var(--spacing-md);">Revenue, expenses, and profit analysis</p>
                <p style="font-size: 0.75rem; color: var(--text-muted);">2025-01-29</p>
                <button class="btn btn-primary" style="width: 100%; margin-top: var(--spacing-md);" onclick="showToast('info', 'Generating Financial Report...')">Generate</button>
            </div>
        </div>
    </div>
    
    <!-- Recent Reports -->
    <div class="card">
        <div style="margin-bottom: var(--spacing-lg);">
            <h3 style="font-size: 1.125rem; font-weight: 600;">Recent Reports</h3>
        </div>
        
        <div style="display: flex; flex-direction: column; gap: var(--spacing-md);">
            <div style="display: flex; justify-content: space-between; align-items: center; padding: var(--spacing-md); background: var(--secondary-bg); border-radius: var(--radius-md); transition: all var(--transition-base);" onmouseover="this.style.background='var(--hover-bg)'" onmouseout="this.style.background='var(--secondary-bg)'">
                <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                    <div style="width: 40px; height: 40px; background: rgba(99, 102, 241, 0.1); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; color: var(--accent-primary);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                        </svg>
                    </div>
                    <div>
                        <div style="font-weight: 600; margin-bottom: 0.25rem;">January Sales Report.pdf</div>
                        <div style="font-size: 0.875rem; color: var(--text-muted);">2025-01-29 • 2.4 MB</div>
                    </div>
                </div>
                <button class="btn btn-icon btn-secondary" title="Download" onclick="showToast('success', 'Downloading report...')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
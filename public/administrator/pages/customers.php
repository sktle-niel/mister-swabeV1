<?php
include '../../back-end/read/fetchCustomers.php';
$customers = fetchCustomers();
$totalCustomers = getTotalCustomers();
$activeCustomers = getActiveCustomers();
$inactiveCustomers = getInactiveCustomers();
?>

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
            <div class="stat-value"><?php echo $totalCustomers; ?></div>
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
            <div class="stat-value"><?php echo $activeCustomers; ?></div>
            <div class="stat-change positive">82.3% of total</div>
        </div>
        
        <div class="stat-card" style="--stat-color: #ec4899;">
            <div class="stat-header">
                <div>
                    <div class="stat-label">VIP Customers</div>
                </div>
            </div>
            <div class="stat-value"><?php echo $inactiveCustomers; ?></div>
            <div class="stat-change" style="background: rgba(236, 72, 153, 0.1); color: #ec4899;">Inactive users</div>
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
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($customer['email']); ?></td>
                        <td><?php echo htmlspecialchars($customer['user_type']); ?></td>
                        <td><span class="badge <?php echo $customer['status'] == 'active' ? 'badge-success' : 'badge'; ?>" style="background: <?php echo $customer['status'] == 'active' ? '' : 'rgba(100, 116, 139, 0.1); color: #64748b;'; ?>"><?php echo ucfirst($customer['status']); ?></span></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
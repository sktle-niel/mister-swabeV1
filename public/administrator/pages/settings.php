<div class="main-content">
    <div class="content-header">
        <div>
            <h2 class="page-title">Settings</h2>
            <p class="page-subtitle">Manage your store settings and preferences</p>
        </div>
    </div>
    
    <!-- Settings Tabs -->
    <div style="margin-bottom: var(--spacing-xl); border-bottom: 1px solid var(--border-color);">
        <div style="display: flex; gap: var(--spacing-lg);">
            <button class="settings-tab active" data-tab="general" onclick="switchTab('general')">General</button>
            <button class="settings-tab" data-tab="notifications" onclick="switchTab('notifications')">Notifications</button>
            <button class="settings-tab" data-tab="security" onclick="switchTab('security')">Security</button>
            <button class="settings-tab" data-tab="billing" onclick="switchTab('billing')">Billing</button>
        </div>
    </div>
    
    <!-- General Tab -->
    <div id="general-tab" class="settings-content active">
        <div class="card" style="margin-bottom: var(--spacing-lg);">
            <h3 style="font-size: 1.125rem; font-weight: 600; margin-bottom: var(--spacing-lg);">Store Information</h3>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-lg);">
                <div class="form-group">
                    <label class="form-label">Store Name</label>
                    <input type="text" class="form-input" value="SWABE Collection">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-input" value="store@swabe.com">
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Phone</label>
                <input type="text" class="form-input" value="+63 912 345 6789">
            </div>
            
            <div class="form-group">
                <label class="form-label">Address</label>
                <input type="text" class="form-input" value="123 Fashion Street, Manila, Philippines">
            </div>
            
            <button class="btn btn-primary" onclick="showToast('success', 'Settings saved successfully!')">Save Changes</button>
        </div>
        
        <div class="card">
            <h3 style="font-size: 1.125rem; font-weight: 600; margin-bottom: var(--spacing-lg);">Business Hours</h3>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-lg);">
                <div class="form-group">
                    <label class="form-label">Opening Time</label>
                    <input type="time" class="form-input" value="09:00">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Closing Time</label>
                    <input type="time" class="form-input" value="21:00">
                </div>
            </div>
            
            <button class="btn btn-primary" onclick="showToast('success', 'Business hours updated!')">Update Hours</button>
        </div>
    </div>
    
    <!-- Notifications Tab -->
    <div id="notifications-tab" class="settings-content" style="display: none;">
        <div class="card">
            <h3 style="font-size: 1.125rem; font-weight: 600; margin-bottom: var(--spacing-lg);">Email Notifications</h3>
            
            <div style="display: flex; flex-direction: column; gap: var(--spacing-lg);">
                <div style="display: flex; justify-content: space-between; align-items: center; padding-bottom: var(--spacing-md); border-bottom: 1px solid var(--border-color);">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 0.25rem;">New Orders</div>
                        <div style="font-size: 0.875rem; color: var(--text-muted);">Get notified when you receive new orders</div>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>
                
                <div style="display: flex; justify-content: space-between; align-items: center; padding-bottom: var(--spacing-md); border-bottom: 1px solid var(--border-color);">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 0.25rem;">Low Stock Alerts</div>
                        <div style="font-size: 0.875rem; color: var(--text-muted);">Receive alerts when products are running low</div>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>
                
                <div style="display: flex; justify-content: space-between; align-items: center; padding-bottom: var(--spacing-md); border-bottom: 1px solid var(--border-color);">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 0.25rem;">Customer Messages</div>
                        <div style="font-size: 0.875rem; color: var(--text-muted);">Get notified about customer inquiries</div>
                    </div>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>
                
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 0.25rem;">Weekly Reports</div>
                        <div style="font-size: 0.875rem; color: var(--text-muted);">Receive weekly business performance reports</div>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Security Tab -->
    <div id="security-tab" class="settings-content" style="display: none;">
        <div class="card" style="margin-bottom: var(--spacing-lg);">
            <h3 style="font-size: 1.125rem; font-weight: 600; margin-bottom: var(--spacing-lg);">Change Password</h3>
            
            <div class="form-group">
                <label class="form-label">Current Password</label>
                <input type="password" class="form-input">
            </div>
            
            <div class="form-group">
                <label class="form-label">New Password</label>
                <input type="password" class="form-input">
            </div>
            
            <div class="form-group">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-input">
            </div>
            
            <button class="btn btn-primary" onclick="showToast('success', 'Password updated successfully!')">Update Password</button>
        </div>
        
        <div class="card">
            <h3 style="font-size: 1.125rem; font-weight: 600; margin-bottom: var(--spacing-lg);">Two-Factor Authentication</h3>
            
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <div style="font-weight: 600; margin-bottom: 0.25rem;">Enable 2FA</div>
                    <div style="font-size: 0.875rem; color: var(--text-muted);">Add an extra layer of security to your account</div>
                </div>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
    </div>
    
    <!-- Billing Tab -->
    <div id="billing-tab" class="settings-content" style="display: none;">
        <div class="card" style="margin-bottom: var(--spacing-lg);">
            <h3 style="font-size: 1.125rem; font-weight: 600; margin-bottom: var(--spacing-lg);">Subscription Plan</h3>
            
            <div style="padding: var(--spacing-lg); background: rgba(99, 102, 241, 0.05); border: 1px solid rgba(99, 102, 241, 0.1); border-radius: var(--radius-lg);">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <div style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.25rem;">Pro Plan</div>
                        <div style="font-size: 0.875rem; color: var(--text-muted);">Next billing date: February 29, 2025</div>
                    </div>
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--accent-primary);">₱2,999/mo</div>
                </div>
                <button class="btn btn-secondary" style="margin-top: var(--spacing-md);">Change Plan</button>
            </div>
        </div>
        
        <div class="card">
            <h3 style="font-size: 1.125rem; font-weight: 600; margin-bottom: var(--spacing-lg);">Payment Method</h3>
            
            <div style="padding: var(--spacing-lg); background: var(--secondary-bg); border: 1px solid var(--border-color); border-radius: var(--radius-lg); margin-bottom: var(--spacing-md);">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 0.25rem;">•••• •••• •••• 4242</div>
                        <div style="font-size: 0.875rem; color: var(--text-muted);">Expires 12/25</div>
                    </div>
                    <button class="btn btn-secondary" onclick="showToast('info', 'Edit payment method')">Edit</button>
                </div>
            </div>
            
            <button class="btn btn-primary" onclick="showToast('info', 'Add new payment method')">Add Payment Method</button>
        </div>
    </div>
</div>

<style>
.settings-tab {
    padding: var(--spacing-md) 0;
    background: none;
    border: none;
    border-bottom: 2px solid transparent;
    color: var(--text-secondary);
    font-weight: 500;
    cursor: pointer;
    transition: all var(--transition-base);
}

.settings-tab:hover {
    color: var(--text-primary);
}

.settings-tab.active {
    color: var(--accent-primary);
    border-bottom-color: var(--accent-primary);
}

.switch {
    position: relative;
    display: inline-block;
    width: 48px;
    height: 24px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--border-color);
    transition: .3s;
    border-radius: 24px;
}

.slider:before {
    position: absolute;
    content: "";
    height: 18px;
    width: 18px;
    left: 3px;
    bottom: 3px;
    background-color: white;
    transition: .3s;
    border-radius: 50%;
}

input:checked + .slider {
    background-color: var(--accent-primary);
}

input:checked + .slider:before {
    transform: translateX(24px);
}
</style>

<script>
function switchTab(tabName) {
    // Hide all content
    document.querySelectorAll('.settings-content').forEach(content => {
        content.style.display = 'none';
    });
    
    // Remove active class from all tabs
    document.querySelectorAll('.settings-tab').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Show selected content
    document.getElementById(tabName + '-tab').style.display = 'block';
    
    // Add active class to selected tab
    document.querySelector(`[data-tab="${tabName}"]`).classList.add('active');
}
</script>
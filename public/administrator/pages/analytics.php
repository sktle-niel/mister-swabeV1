<div class="main-content">
    <div class="content-header">
        <div>
            <h2 class="page-title">Analytics</h2>
            <p class="page-subtitle">Track your business performance and insights</p>
        </div>
    </div>
    
    <!-- Analytics Stats -->
    <div class="stats-grid" style="margin-bottom: var(--spacing-2xl);">
        <div class="stat-card" style="--stat-color: #10b981;">
            <div class="stat-header">
                <div>
                    <div class="stat-label">Total Revenue</div>
                </div>
            </div>
            <div class="stat-value">₱300,000</div>
            <div class="stat-change positive">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="18 15 12 9 6 15"></polyline>
                </svg>
                +15% from last month
            </div>
        </div>
        
        <div class="stat-card" style="--stat-color: #6366f1;">
            <div class="stat-header">
                <div>
                    <div class="stat-label">Avg. Order Value</div>
                </div>
            </div>
            <div class="stat-value">₱1,542</div>
            <div class="stat-change positive">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="18 15 12 9 6 15"></polyline>
                </svg>
                +8% increase
            </div>
        </div>
        
        <div class="stat-card" style="--stat-color: #ec4899;">
            <div class="stat-header">
                <div>
                    <div class="stat-label">Conversion Rate</div>
                </div>
            </div>
            <div class="stat-value">3.2%</div>
            <div class="stat-change positive">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="18 15 12 9 6 15"></polyline>
                </svg>
                +0.5% this week
            </div>
        </div>
        
        <div class="stat-card" style="--stat-color: #22d3ee;">
            <div class="stat-header">
                <div>
                    <div class="stat-label">Customer Retention</div>
                </div>
            </div>
            <div class="stat-value">68%</div>
            <div class="stat-change" style="background: rgba(34, 211, 238, 0.1); color: #22d3ee;">Stable</div>
        </div>
    </div>
    
    <!-- Charts Grid -->
    <div class="charts-grid" style="margin-bottom: var(--spacing-2xl);">
        <div class="chart-card">
            <div class="chart-header">
                <h3 class="chart-title">Revenue & Profit Trends</h3>
                <div class="chart-actions">
                    <button class="chart-filter active">6M</button>
                    <button class="chart-filter">1Y</button>
                </div>
            </div>
            <div class="chart-container">
                <canvas id="revenueProfitChart"></canvas>
            </div>
        </div>
        
        <div class="chart-card">
            <div class="chart-header">
                <h3 class="chart-title">Sales by Category</h3>
            </div>
            <div class="chart-container">
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>
    
    <!-- Bottom Section -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: var(--spacing-lg);">
        <div class="chart-card">
            <div class="chart-header">
                <h3 class="chart-title">Traffic Sources</h3>
            </div>
            <div class="chart-container" style="height: 250px;">
                <canvas id="trafficChart"></canvas>
            </div>
        </div>
        
        <div class="card">
            <div style="margin-bottom: var(--spacing-lg);">
                <h3 style="font-size: 1.125rem; font-weight: 600;">Top Performing Products</h3>
            </div>
            <div style="display: flex; flex-direction: column; gap: var(--spacing-md);">
                <div style="display: flex; justify-content: space-between; align-items: center; padding: var(--spacing-md); background: var(--secondary-bg); border-radius: var(--radius-md);">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 0.25rem;">Classic Running Shoes</div>
                        <div style="font-size: 0.875rem; color: var(--text-muted);">145 units sold</div>
                    </div>
                    <div style="font-weight: 700; color: var(--accent-success);">₱188,355</div>
                </div>
                
                <div style="display: flex; justify-content: space-between; align-items: center; padding: var(--spacing-md); background: var(--secondary-bg); border-radius: var(--radius-md);">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 0.25rem;">Urban Comfort Sneakers</div>
                        <div style="font-size: 0.875rem; color: var(--text-muted);">132 units sold</div>
                    </div>
                    <div style="font-weight: 700; color: var(--accent-success);">₱211,068</div>
                </div>
                
                <div style="display: flex; justify-content: space-between; align-items: center; padding: var(--spacing-md); background: var(--secondary-bg); border-radius: var(--radius-md);">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 0.25rem;">Premium Cotton Tee</div>
                        <div style="font-size: 0.875rem; color: var(--text-muted);">89 units sold</div>
                    </div>
                    <div style="font-weight: 700; color: var(--accent-success);">₱31,061</div>
                </div>
                
                <div style="display: flex; justify-content: space-between; align-items: center; padding: var(--spacing-md); background: var(--secondary-bg); border-radius: var(--radius-md);">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 0.25rem;">Street Style Kicks</div>
                        <div style="font-size: 0.875rem; color: var(--text-muted);">76 units sold</div>
                    </div>
                    <div style="font-weight: 700; color: var(--accent-success);">₱144,324</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Revenue & Profit Chart
const revenueProfitCtx = document.getElementById('revenueProfitChart').getContext('2d');
new Chart(revenueProfitCtx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Revenue',
            data: [45000, 38000, 50000, 46000, 62000, 56000],
            borderColor: '#6366f1',
            backgroundColor: 'rgba(99, 102, 241, 0.1)',
            tension: 0.4,
            fill: true
        }, {
            label: 'Profit',
            data: [18000, 15000, 20000, 19000, 24000, 22000],
            borderColor: '#22d3ee',
            backgroundColor: 'rgba(34, 211, 238, 0.1)',
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: true, labels: { color: '#94a3b8' } }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: { color: '#2d3548' },
                ticks: { color: '#94a3b8' }
            },
            x: {
                grid: { display: false },
                ticks: { color: '#94a3b8' }
            }
        }
    }
});

// Pie Chart
const pieCtx = document.getElementById('pieChart').getContext('2d');
new Chart(pieCtx, {
    type: 'doughnut',
    data: {
        labels: ['Sneakers 39%', 'T-Shirts 28%', 'Accessories 16%', 'Shirts 18%'],
        datasets: [{
            data: [39, 28, 16, 18],
            backgroundColor: ['#6366f1', '#8b5cf6', '#10b981', '#10b981'],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { position: 'right', labels: { color: '#94a3b8', padding: 15 } }
        }
    }
});

// Traffic Sources Chart
const trafficCtx = document.getElementById('trafficChart').getContext('2d');
new Chart(trafficCtx, {
    type: 'bar',
    data: {
        labels: ['Direct', 'Social', 'Search', 'Referral'],
        datasets: [{
            data: [4200, 3100, 2800, 1400],
            backgroundColor: ['#6366f1', '#ec4899', '#10b981', '#f59e0b'],
            borderRadius: 8
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: { color: '#2d3548' },
                ticks: { color: '#94a3b8' }
            },
            x: {
                grid: { display: false },
                ticks: { color: '#94a3b8' }
            }
        }
    }
});
</script>
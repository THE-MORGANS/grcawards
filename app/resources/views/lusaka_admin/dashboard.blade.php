<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lusaka Admin Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            color: #333;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header h1 {
            font-size: 24px;
        }

        .header-right {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-logout {
            background: rgba(255,255,255,0.2);
            color: white;
            border: 1px solid rgba(255,255,255,0.3);
        }

        .btn-logout:hover {
            background: rgba(255,255,255,0.3);
        }

        .btn-export {
            background: #10b981;
            color: white;
        }

        .btn-export:hover {
            background: #059669;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.4);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .stat-card h3 {
            font-size: 14px;
            color: #666;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .stat-card .value {
            font-size: 28px;
            font-weight: 700;
            color: #667eea;
        }

        .search-section {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }

        .search-form {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .search-input {
            flex: 1;
            padding: 12px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
        }

        .search-input:focus {
            outline: none;
            border-color: #667eea;
        }

        .btn-search {
            background: #667eea;
            color: white;
            padding: 12px 30px;
        }

        .btn-search:hover {
            background: #5568d3;
        }

        .section {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section h2 {
            font-size: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background: #f8f9fa;
            font-weight: 600;
            color: #666;
            font-size: 13px;
            text-transform: uppercase;
        }

        td {
            font-size: 14px;
        }

        tr:hover {
            background: #f8f9fa;
        }

        .badge {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-paid {
            background: #d1fae5;
            color: #065f46;
        }

        .badge-pending {
            background: #fef3c7;
            color: #92400e;
        }

        .badge-failed {
            background: #fee2e2;
            color: #991b1b;
        }

        .no-results {
            text-align: center;
            padding: 40px;
            color: #999;
        }

        .success-message {
            background: #d1fae5;
            border: 1px solid #a7f3d0;
            color: #065f46;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* Modal Styles */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            backdrop-filter: blur(4px);
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            width: 90%;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-header h2 {
            font-size: 20px;
            color: #333;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #999;
            transition: color 0.2s;
        }

        .modal-close:hover {
            color: #333;
        }

        .delegate-link {
            color: #667eea;
            text-decoration: underline;
            cursor: pointer;
            font-weight: 600;
        }

        .delegate-link:hover {
            color: #764ba2;
        }

        /* Navigation Styles */
        .admin-nav {
            display: flex;
            gap: 5px;
            margin-bottom: 25px;
            background: white;
            padding: 5px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            width: fit-content;
        }

        .nav-item {
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            color: #666;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s;
        }

        .nav-item:hover {
            background: #f0f2f5;
            color: #667eea;
        }

        .nav-item.active {
            background: #667eea;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Lusaka Summit Admin Dashboard</h1>
        <div class="header-right">
            <span>Welcome, {{ session('lusaka_admin_username') }}</span>
            <a href="{{ route('lusaka.admin.logout') }}" class="btn btn-logout">Logout</a>
        </div>
    </div>

    <div class="container">
        <!-- Navigation -->
        <div class="admin-nav">
            <a href="{{ route('lusaka.admin.dashboard') }}" class="nav-item {{ request()->routeIs('lusaka.admin.dashboard') ? 'active' : '' }}">Registrations</a>
            <a href="{{ route('lusaka.admin.attendance') }}" class="nav-item {{ request()->routeIs('lusaka.admin.attendance') ? 'active' : '' }}">Attendance</a>
        </div>
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <!-- Statistics -->
        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total Registrations</h3>
                <div class="value">{{ $stats['total_registrations'] }}</div>
            </div>
            <div class="stat-card">
                <h3>Paid Registrations</h3>
                <div class="value">{{ $stats['paid_registrations'] }}</div>
            </div>
            <div class="stat-card">
                <h3>Pending Payments</h3>
                <div class="value">{{ $stats['pending_registrations'] }}</div>
            </div>
            <div class="stat-card">
                <h3>Total Delegates</h3>
                <div class="value">{{ $stats['total_delegates'] }}</div>
            </div>
            <div class="stat-card">
                <h3>Total Revenue</h3>
                <div class="value">${{ number_format($stats['total_revenue'], 2) }}</div>
            </div>
            <div class="stat-card">
                <h3>PDF Downloads</h3>
                <div class="value">{{ $stats['pdf_downloads'] }}</div>
            </div>
        </div>

        <!-- Search Section -->
        <div class="search-section">
            <div class="search-form">
                <input 
                    type="text" 
                    id="liveSearch" 
                    class="search-input" 
                    placeholder="Type to search by Registration ID, Ticket Number, Name, or Email..."
                    value="{{ $search ?? '' }}"
                >
            </div>
        </div>

        <!-- Registrations Table -->
        <div class="section">
            <div class="section-header">
                <h2>Registrations {{ $search ? '(Search Results)' : '(Recent 50)' }}</h2>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <select id="exportStatus" class="search-input" style="padding: 8px 12px; font-size: 14px; width: auto; height: auto;">
                        <option value="all">Export All</option>
                        <option value="paid">Export Paid Only</option>
                        <option value="pending">Export Pending Only</option>
                    </select>
                    <button onclick="exportData()" class="btn btn-export">Export to Excel</button>
                </div>
            </div>

            <script>
                function exportData() {
                    const status = document.getElementById('exportStatus').value;
                    window.location.href = `{{ route('lusaka.admin.export') }}?status=${status}`;
                }
            </script>

            <div id="registrations-container">
                @include('lusaka_admin.partials.registrations_table')
            </div>
        </div>

        <!-- PDF Downloads Section -->
        <div class="section">
            <h2>Sponsorship PDF Downloads</h2>
            
            @if($pdfDownloads->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Download Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pdfDownloads as $download)
                        <tr>
                            <td>{{ $download->full_name }}</td>
                            <td>{{ $download->email }}</td>
                            <td>{{ $download->phone }}</td>
                            <td>{{ $download->created_at->format('M d, Y H:i') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="no-results">
                    <p>No PDF downloads yet.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Delegate Modal -->
    <div id="delegateModal" class="modal-overlay">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modalTitle">Delegates for Registration</h2>
                <button class="modal-close" onclick="closeModal()">&times;</button>
            </div>
            <div id="modalBody">
                <!-- Table will be injected here -->
            </div>
        </div>
    </div>

    <script>
        function showDelegates(regId, delegates) {
            const modal = document.getElementById('delegateModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalBody = document.getElementById('modalBody');

            modalTitle.innerText = `Delegates for ${regId}`;
            
            let tableHtml = `
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Job Title</th>
                        </tr>
                    </thead>
                    <tbody>
            `;

            delegates.forEach((delegate, index) => {
                tableHtml += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${delegate.name || 'N/A'}</td>
                        <td>${delegate.email || 'N/A'}</td>
                        <td>${delegate.jobTitle || 'N/A'}</td>
                    </tr>
                `;
            });

            tableHtml += `
                    </tbody>
                </table>
            `;

            modalBody.innerHTML = tableHtml;
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        function closeModal() {
            const modal = document.getElementById('delegateModal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close on outside click
        window.onclick = function(event) {
            const modal = document.getElementById('delegateModal');
            if (event.target == modal) {
                closeModal();
            }
        }

        // Live Search Debounce
        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        const handleSearch = debounce(function(e) {
            const searchQuery = e.target.value;
            const container = document.getElementById('registrations-container');
            
            // Add loading opacity
            container.style.opacity = '0.5';
            
            fetch(`{{ route('lusaka.admin.dashboard') }}?search=${searchQuery}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                container.innerHTML = html;
                container.style.opacity = '1';
            })
            .catch(error => {
                console.error('Search error:', error);
                container.style.opacity = '1';
            });
        }, 500);

        document.getElementById('liveSearch').addEventListener('input', handleSearch);
    </script>
</body>
</html>

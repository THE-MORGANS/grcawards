<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delegate Attendance - Lusaka Summit</title>
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

        .btn-mark {
            background: #667eea;
            color: white;
        }

        .btn-mark:hover {
            background: #5568d3;
        }

        .btn-attended {
            background: #10b981;
            color: white;
        }

        .btn-attended:hover {
            background: #059669;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 20px;
        }

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

        .search-section {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }

        .search-input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
        }

        .search-input:focus {
            outline: none;
            border-color: #667eea;
        }

        .section {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }

        .section-header {
            margin-bottom: 20px;
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

        .no-results {
            text-align: center;
            padding: 40px;
            color: #999;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        <!-- Search Section -->
        <div class="search-section">
            <input 
                type="text" 
                id="delegateSearch" 
                class="search-input" 
                placeholder="Search by Delegate Name, Email, or Registration ID..."
                value="{{ $search ?? '' }}"
            >
        </div>

        <div class="section">
            <div class="section-header" style="display: flex; justify-content: space-between; align-items: center;">
                <h2>Delegate Attendance List</h2>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <select id="exportStatus" class="search-input" style="padding: 8px 12px; font-size: 14px; width: auto; height: auto;">
                        <option value="all">Export All Delegates</option>
                        <option value="attended">Export Attended Only</option>
                        <option value="not-attended">Export Not Attended Only</option>
                    </select>
                    <button onclick="exportAttendance()" class="btn btn-attended" style="background: #10b981;">Export to Excel</button>
                </div>
            </div>

            <div id="attendance-container">
                @include('lusaka_admin.partials.attendance_table')
            </div>
        </div>
    </div>

    <script>
        function exportAttendance() {
            const status = document.getElementById('exportStatus').value;
            window.location.href = `{{ route('lusaka.admin.attendance.export') }}?status=${status}`;
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
            const container = document.getElementById('attendance-container');
            
            container.style.opacity = '0.5';
            
            fetch(`{{ route('lusaka.admin.attendance') }}?search=${searchQuery}`, {
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

        document.getElementById('delegateSearch').addEventListener('input', handleSearch);

        function toggleAttendance(btn, dbId, delegateIndex) {
            const isAttended = btn.classList.contains('btn-attended');
            const newStatus = !isAttended;
            
            // Visual feedback
            btn.innerText = 'Updating...';
            btn.disabled = true;

            fetch(`{{ route('lusaka.admin.attendance.toggle') }}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    reg_id: dbId,
                    delegate_index: delegateIndex,
                    status: newStatus
                })
            })
            .then(response => response.json())
            .then(data => {
                btn.disabled = false;
                if (data.success) {
                    if (newStatus) {
                        btn.classList.remove('btn-mark');
                        btn.classList.add('btn-attended');
                        btn.innerText = 'Attended';
                    } else {
                        btn.classList.remove('btn-attended');
                        btn.classList.add('btn-mark');
                        btn.innerText = 'Mark Attended';
                    }
                } else {
                    alert('Error updating attendance: ' + (data.message || 'Unknown error'));
                    btn.innerText = isAttended ? 'Attended' : 'Mark Attended';
                }
            })
            .catch(error => {
                console.error('Attendance error:', error);
                btn.disabled = false;
                btn.innerText = isAttended ? 'Attended' : 'Mark Attended';
                alert('An error occurred. Please try again.');
            });
        }
    </script>
</body>
</html>

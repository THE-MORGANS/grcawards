<table>
    <thead>
        <tr>
            <th>Delegate Name</th>
            <th>Email</th>
            <th>Registration ID</th>
            <th>Registrant</th>
            <th>Status</th>
            <th>Attendance</th>
        </tr>
    </thead>
    <tbody>
        @foreach($delegates as $delegate)
        <tr>
            <td><strong>{{ $delegate['name'] ?? 'N/A' }}</strong></td>
            <td>{{ $delegate['email'] ?? 'N/A' }}</td>
            <td>{{ $delegate['reg_id'] }}</td>
            <td>{{ $delegate['reg_name'] }}</td>
            <td>
                <span class="badge badge-{{ $delegate['payment_status'] }}">
                    {{ strtoupper($delegate['payment_status']) }}
                </span>
            </td>
            <td>
                <button 
                    onclick="toggleAttendance(this, {{ $delegate['db_id'] }}, {{ $delegate['index'] }})" 
                    class="btn {{ ($delegate['attended'] ?? false) ? 'btn-attended' : 'btn-mark' }}"
                    style="padding: 6px 12px; font-size: 12px;"
                >
                    {{ ($delegate['attended'] ?? false) ? 'Attended' : 'Mark Attended' }}
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@if($delegates->isEmpty())
    <div class="no-results">
        <p>No delegates found.</p>
    </div>
@endif

@if($registrations->count() > 0)
    <table>
        <thead>
            <tr>
                <th>Reg ID</th>
                <th>Ticket #</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Organization</th>
                <th>Attendance</th>
                <th>Delegates</th>
                <th>Amount</th>
                <th>SSTH Ref</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrations as $reg)
            <tr>
                <td><strong>{{ $reg->registration_id }}</strong></td>
                <td>{{ $reg->ticket_number ?? 'N/A' }}</td>
                <td>{{ $reg->name }}</td>
                <td>{{ $reg->email }}</td>
                <td>{{ $reg->phone ?? 'N/A' }}</td>
                <td>{{ $reg->organization ?? 'N/A' }}</td>
                <td>{{ $reg->attendance_option }}</td>
                <td>
                    <span class="delegate-link" 
                          onclick="showDelegates('{{ $reg->registration_id }}', {{ json_encode($reg->delegates_data) }})">
                        {{ $reg->delegate_count }}
                    </span>
                </td>
                <td>{{ $reg->currency }} {{ number_format($reg->amount, 2) }}</td>
                <td>
                    @if($reg->referred_by_ssth)
                        <span class="badge badge-paid" style="background: #dcfce7; color: #166534;">YES</span>
                    @else
                        <span class="badge badge-secondary" style="background: #f1f5f9; color: #475569;">NO</span>
                    @endif
                </td>
                <td>
                    <span class="badge badge-{{ $reg->payment_status }}">
                        {{ strtoupper($reg->payment_status) }}
                    </span>
                </td>
                <td>{{ $reg->created_at->format('M d, Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <div class="no-results">
        <p>No registrations found.</p>
    </div>
@endif

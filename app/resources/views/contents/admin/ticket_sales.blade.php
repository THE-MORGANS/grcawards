@extends('layouts.admin.master')

@section('title', 'Event Ticket Sales')

@section('style')
<style>
    .ts-wrapper { max-width: 1300px; }
    .ts-header { margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; }
    .ts-header h1 { font-size: 22px; font-weight: 700; color: #313a46; margin-bottom: 4px; }
    .ts-header p { color: #6c757d; font-size: 13.5px; margin: 0; }
    .ts-export-btn {
        background: #0acf97; color: #fff; font-weight: 700; font-size: .82rem; padding: .6rem 1.2rem;
        border-radius: 8px; border: none; display: inline-flex; align-items: center; gap: .4rem; text-decoration: none;
    }
    .ts-export-btn:hover { color: #fff; opacity: .9; }

    .ts-kpi-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 14px; margin-bottom: 1.5rem; }
    .ts-kpi { background: #fff; border: 1px solid #eef2f7; border-radius: 12px; padding: 16px 18px; }
    .ts-kpi-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .04em; color: #98a6ad; margin-bottom: 4px; }
    .ts-kpi-value { font-size: 22px; font-weight: 800; color: #313a46; line-height: 1; }
    .ts-kpi.paid .ts-kpi-value { color: #0acf97; }
    .ts-kpi.pending .ts-kpi-value { color: #f7b84b; }
    .ts-kpi.failed .ts-kpi-value { color: #fa5c7c; }
    .ts-kpi-sub { font-size: 11px; color: #98a6ad; margin-top: 3px; }

    .ts-card { background: #fff; border-radius: 10px; box-shadow: 0 1px 3px rgba(0,0,0,.06); border: 1px solid #eef2f7; }
    .ts-filter-bar { padding: 16px 20px; border-bottom: 1px solid #eef2f7; display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
    .ts-filter-bar select, .ts-filter-bar input[type="text"] { max-width: 220px; }

    .ts-table { width: 100%; border-collapse: collapse; }
    .ts-table thead th {
        background: #f7f8fc; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .03em;
        color: #6c757d; padding: 12px 18px; text-align: left; border-bottom: 1px solid #eef2f7; white-space: nowrap;
    }
    .ts-table tbody td { padding: 13px 18px; border-bottom: 1px solid #f4f5f9; font-size: 13px; vertical-align: middle; }
    .ts-table tbody tr:last-child td { border-bottom: none; }
    .ts-table tbody tr:hover { background: #fbfbfe; }

    .ts-buyer-name { font-weight: 600; color: #313a46; }
    .ts-buyer-email { font-size: 11.5px; color: #98a6ad; }
    .ts-muted { color: #98a6ad; }
    .ts-amount { font-weight: 700; color: #313a46; font-variant-numeric: tabular-nums; }

    .ts-status-badge {
        display: inline-flex; align-items: center; gap: 5px; font-size: 10.5px; font-weight: 700;
        text-transform: uppercase; letter-spacing: .03em; padding: 4px 11px; border-radius: 30px;
    }
    .ts-status-badge.paid { background: rgba(10,207,151,.1); color: #0acf97; }
    .ts-status-badge.pending { background: rgba(247,184,75,.15); color: #c28b1e; }
    .ts-status-badge.failed { background: rgba(250,92,124,.1); color: #fa5c7c; }

    .ts-region-tag { font-size: 11px; font-weight: 600; color: #6c757d; background: #f1f3fa; padding: 3px 9px; border-radius: 20px; }

    .ts-empty { padding: 60px 20px; text-align: center; color: #98a6ad; }
    .ts-empty i { font-size: 40px; display: block; margin-bottom: 10px; opacity: .5; }

    .ts-pagination { padding: 16px 20px; }
</style>
@endsection

@section('content')
<div class="ts-wrapper">
    <div class="ts-header">
        <div>
            <h1>Event Ticket Sales</h1>
            <p>Every Awards &amp; Summit ticket purchase attempt — paid, pending and failed — across both editions.</p>
        </div>
        <a href="{{ route('admin.ticket_sales.export', array_merge(['award_program' => $award_program], $filters)) }}" class="ts-export-btn">
            <i class="mdi mdi-file-excel-outline"></i> Export Excel
        </a>
    </div>

    <div class="ts-kpi-grid">
        <div class="ts-kpi">
            <div class="ts-kpi-label">Total Records</div>
            <div class="ts-kpi-value">{{ number_format($stats['total']) }}</div>
        </div>
        <div class="ts-kpi paid">
            <div class="ts-kpi-label">Paid</div>
            <div class="ts-kpi-value">{{ number_format($stats['paid']) }}</div>
            <div class="ts-kpi-sub">{{ number_format($stats['seatsSold']) }} seat(s) sold</div>
        </div>
        <div class="ts-kpi pending">
            <div class="ts-kpi-label">Pending</div>
            <div class="ts-kpi-value">{{ number_format($stats['pending']) }}</div>
        </div>
        <div class="ts-kpi failed">
            <div class="ts-kpi-label">Failed</div>
            <div class="ts-kpi-value">{{ number_format($stats['failed']) }}</div>
        </div>
        <div class="ts-kpi">
            <div class="ts-kpi-label">Revenue (Paid)</div>
            @if($stats['revenue']->isEmpty())
            <div class="ts-kpi-value" style="font-size:16px">—</div>
            @else
            @foreach($stats['revenue'] as $currency => $total)
            <div class="ts-kpi-value" style="font-size:16px">{{ strtoupper($currency) }} {{ number_format($total, 2) }}</div>
            @endforeach
            @endif
        </div>
    </div>

    <div class="ts-card">
        <form method="GET" class="ts-filter-bar">
            <input type="text" name="search" class="form-control form-control-sm" placeholder="Search name, email, reg. / ticket no."
                value="{{ $filters['search'] }}" style="max-width:260px">

            <select name="region" class="form-select form-select-sm" onchange="this.form.submit()">
                <option value="">All regions</option>
                <option value="africa" @selected($filters['region'] === 'africa')>Africa</option>
                <option value="europe" @selected($filters['region'] === 'europe')>Europe</option>
            </select>

            <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                <option value="">All statuses</option>
                <option value="paid" @selected($filters['status'] === 'paid')>Paid</option>
                <option value="pending" @selected($filters['status'] === 'pending')>Pending</option>
                <option value="failed" @selected($filters['status'] === 'failed')>Failed</option>
            </select>

            <select name="ticket_type" class="form-select form-select-sm" onchange="this.form.submit()">
                <option value="">All ticket types</option>
                @foreach($ticketTypes as $t)
                <option value="{{ $t->ticket_type }}" @selected($filters['ticket_type'] === $t->ticket_type)>{{ $t->ticket_name }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-sm btn-primary">Filter</button>
            @if(array_filter($filters))
            <a href="{{ route('admin.ticket_sales', $award_program) }}" class="btn btn-sm btn-light">Clear</a>
            @endif
        </form>

        @if($registrations->isEmpty())
        <div class="ts-empty">
            <i class="mdi mdi-ticket-confirmation-outline"></i>
            No ticket purchase records found.
        </div>
        @else
        <div class="table-responsive">
            <table class="ts-table">
                <thead>
                    <tr>
                        <th>Buyer</th>
                        <th>Organization</th>
                        <th>Ticket</th>
                        <th>Qty</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th style="display:none">Region</th>
                        <th>Ticket No.</th>
                        <th>Seats</th>
                        <th>Purchased</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registrations as $r)
                    <tr>
                        <td>
                            <div class="ts-buyer-name">{{ $r->name }}</div>
                            <div class="ts-buyer-email">{{ $r->email }}</div>
                        </td>
                        <td class="ts-muted">{{ $r->organization ?: '—' }}</td>
                        <td>{{ $r->ticket_name }}</td>
                        <td>{{ $r->quantity }}</td>
                        <td class="ts-amount">{{ strtoupper($r->currency) }} {{ number_format($r->amount, 2) }}</td>
                        <td><span class="ts-status-badge {{ $r->payment_status }}">{{ $r->payment_status }}</span></td>
                        <td style="display:none"><span class="ts-region-tag">{{ ucfirst($r->region) }}</span></td>
                        <td class="ts-muted">{{ $r->ticket_number ?: '—' }}</td>
                        <td class="ts-muted">{{ $r->seat_numbers ? implode(', ', $r->seat_numbers) : '—' }}</td>
                        <td class="ts-muted">{{ $r->created_at->format('d M Y, h:i A') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="ts-pagination">
            {{ $registrations->links('pagination::bootstrap-4') }}
        </div>
        @endif
    </div>
</div>
@endsection

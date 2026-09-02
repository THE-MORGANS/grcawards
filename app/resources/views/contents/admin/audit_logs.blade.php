@extends('layouts.admin.master')

@section('title', 'Judge Audit Log')

@section('style')
<style>
    .audit-wrapper { max-width: 1200px; }
    .audit-header { margin-bottom: 1.5rem; }
    .audit-header h1 { font-size: 22px; font-weight: 700; color: #313a46; margin-bottom: 4px; }
    .audit-header p { color: #6c757d; font-size: 13.5px; margin: 0; }

    .audit-card { background: #fff; border-radius: 10px; box-shadow: 0 1px 3px rgba(0,0,0,.06); border: 1px solid #eef2f7; }
    .audit-filter-bar { padding: 16px 20px; border-bottom: 1px solid #eef2f7; display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
    .audit-filter-bar select { max-width: 220px; }

    .audit-table { width: 100%; border-collapse: collapse; }
    .audit-table thead th {
        background: #f7f8fc; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .03em;
        color: #6c757d; padding: 12px 20px; text-align: left; border-bottom: 1px solid #eef2f7;
    }
    .audit-table tbody td { padding: 14px 20px; border-bottom: 1px solid #f4f5f9; font-size: 13.5px; vertical-align: middle; }
    .audit-table tbody tr:last-child td { border-bottom: none; }
    .audit-table tbody tr:hover { background: #fbfbfe; }

    .judge-cell { display: flex; align-items: center; gap: 10px; }
    .judge-avatar {
        width: 34px; height: 34px; border-radius: 50%; background: #eef2ff; color: #727cf5;
        display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; flex-shrink: 0;
    }
    .judge-name { font-weight: 600; color: #313a46; }
    .judge-email { font-size: 12px; color: #98a6ad; }

    .event-badge {
        display: inline-flex; align-items: center; gap: 5px; font-size: 11px; font-weight: 700;
        text-transform: uppercase; letter-spacing: .03em; padding: 4px 11px; border-radius: 30px;
    }
    .event-badge.login { background: rgba(10,207,151,.1); color: #0acf97; }
    .event-badge.logout { background: rgba(152,166,173,.15); color: #6c757d; }
    .event-badge.vote { background: rgba(114,124,245,.1); color: #727cf5; }

    .audit-award { color: #313a46; }
    .audit-award small { display: block; color: #98a6ad; font-size: 11.5px; }
    .audit-muted { color: #98a6ad; }

    .audit-empty { padding: 60px 20px; text-align: center; color: #98a6ad; }
    .audit-empty i { font-size: 40px; display: block; margin-bottom: 10px; opacity: .5; }

    .audit-pagination { padding: 16px 20px; }
</style>
@endsection

@section('content')
<div class="audit-wrapper">
    <div class="audit-header">
        <h1>Judge Audit Log</h1>
        <p>Login, logout and voting activity for judges — vote entries record which award was voted on, not the scores given.</p>
    </div>

    <div class="audit-card">
        <form method="GET" class="audit-filter-bar">
            <label for="event" class="mb-0 fw-semibold" style="font-size: 13px; color: #6c757d;">Event</label>
            <select name="event" id="event" class="form-select form-select-sm" onchange="this.form.submit()">
                <option value="" @selected(!$eventFilter)>All events</option>
                <option value="login" @selected($eventFilter === 'login')>Login</option>
                <option value="logout" @selected($eventFilter === 'logout')>Logout</option>
                <option value="vote" @selected($eventFilter === 'vote')>Vote</option>
            </select>
            @if($eventFilter)
            <a href="{{ route('admin.audit_logs', $award_program) }}" class="btn btn-sm btn-light">Clear</a>
            @endif
        </form>

        @if($logs->isEmpty())
        <div class="audit-empty">
            <i class="mdi mdi-shield-search"></i>
            No audit activity recorded yet.
        </div>
        @else
        <div class="table-responsive">
            <table class="audit-table">
                <thead>
                    <tr>
                        <th>Judge</th>
                        <th>Event</th>
                        <th>Award</th>
                        <th>Date &amp; Time</th>
                        <th>IP Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($logs as $log)
                    <tr>
                        <td>
                            <div class="judge-cell">
                                <div class="judge-avatar">{{ $log->judge?->initials ?? '?' }}</div>
                                <div>
                                    <div class="judge-name">{{ $log->judge?->fullname ?? 'Unknown judge' }}</div>
                                    <div class="judge-email">{{ $log->judge?->email }}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="event-badge {{ $log->event }}">
                                <i class="mdi mdi-{{ $log->event === 'login' ? 'login' : ($log->event === 'logout' ? 'logout' : 'check-decagram-outline') }}"></i>
                                {{ $log->event }}
                            </span>
                        </td>
                        <td>
                            @if($log->award)
                            <div class="audit-award">
                                {{ $log->award->name }}
                                <small>{{ $log->award->sector?->name }}</small>
                            </div>
                            @else
                            <span class="audit-muted">&mdash;</span>
                            @endif
                        </td>
                        <td>{{ $log->created_at->format('d M Y, h:i A') }}</td>
                        <td class="audit-muted">{{ $log->ip_address ?: '—' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="audit-pagination">
            {{ $logs->links('pagination::bootstrap-4') }}
        </div>
        @endif
    </div>
</div>
@endsection

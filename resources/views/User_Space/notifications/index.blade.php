@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('My Notifications') }}</div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($notifications as $notification)
                    <li class="list-group-item">
                        @if($notification->type === 'email')
                            📩 {{ __('Email') }}: {{ $notification->message }}
                        @elseif($notification->type === 'whatsapp')
                            📱 {{ __('WhatsApp') }}: {{ $notification->message }}
                        @else
                            📨 {{ __('SMS') }}: {{ $notification->message }}
                        @endif
                        <div>
                            <form action="{{ route('notifications.read', $notification) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-primary">{{ __('Mark as read') }}</button>
                            </form>
                            <form action="{{ route('notifications.delete', $notification) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection

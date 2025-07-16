@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('All Demands') }}</div>
        <div class="card-body">
            <a href="{{ route('demands.create') }}" class="btn btn-primary mb-3">{{ __('Create New Demand') }}</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('Title') }}</th>
                        <th>{{ __('Type') }}</th>
                        <th>{{ __('City') }}</th>
                        <th>{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($demands as $demand)
                        <tr>
                            <td>{{ $demand->name }}</td>
                            <td>{{ __($demand->type) }}</td>
                            <td>{{ $demand->city }}</td>
                            <td>
                                <a href="{{ route('demands.show', $demand) }}" class="btn btn-sm btn-info">{{ __('View') }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

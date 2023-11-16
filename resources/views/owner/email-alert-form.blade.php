<!-- resources/views/owner/email-alert-form.blade.php -->
<link rel="icon" type="image/x-icon" href="/img/T4U.ico">

<!-- Or for PNG format -->
<link rel="icon" type="image/png" href="/favicon.png">
<link rel="stylesheet" type="text/css" href="{{ mix('css/style.css') }}">


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Schedule Up Email Alert</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('email-alert.store') }}">
                            @csrf

                            <div class="mb-3 row">
                                <label for="recipient" class="col-md-4 col-form-label text-md-end">Recipient Email</label>
                                <div class="col-md-6">
                                    <input id="recipient" type="email" class="form-control" name="recipient" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="message" class="col-md-4 col-form-label text-md-end">Alert Message</label>
                                <div class="col-md-6">
                                    <textarea id="message" class="form-control" name="message" required></textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="frequency" class="col-md-4 col-form-label text-md-end">Alert Frequency
                                    (hours)</label>
                                <div class="col-md-6">
                                    <select id="frequency" class="form-select" name="frequency" required>
                                        <option value="4">Every 4 hours</option>
                                        <option value="8">Every 8 hours</option>
                                        <option value="24">Every 24 hours</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="is_active" class="col-md-4 col-form-label text-md-end">Is Active?</label>
                                <div class="col-md-6">
                                    <select id="is_active" class="form-select" name="is_active" required>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Set Up Alert</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header bg-success text-white">Email Alerts List</div>

                    <div class="card-body">
                        @if (count($emailAlerts) > 0)
                            <ul class="list-group">
                                @foreach ($emailAlerts as $alert)
                                    <li class="list-group-item">
                                        <strong>{{ $alert->recipient }}</strong> - {{ $alert->message }}
                                        <form method="POST" action="{{ route('email-alert.toggle', $alert->id) }}"
                                            class="float-end">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="btn btn-sm {{ $alert->is_active ? 'btn-success' : 'btn-danger' }}">
                                                {{ $alert->is_active ? 'Turn Off' : 'Turn On' }}
                                            </button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="mt-3">No email alerts set up.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

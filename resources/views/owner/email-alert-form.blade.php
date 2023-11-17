<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="/img/T4U.ico">

    <!-- Or for PNG format -->
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Up Email Alert</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 7px 7px 0 0;
            padding: 15px;
            text-align: center;
            font-size: 1.5rem;
        }

        .card-body {
            padding: 20px;
        }

        label {
            font-weight: bold;
            color: #495057;
        }

        .form-control,
        .form-select {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            margin-bottom: 20px;
            display: inline-block;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .list-group-item {
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 10px;
            padding: 15px;
            position: relative;
        }

        .btn-success,
        .btn-danger {
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .float-end {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            padding: 15px;
            margin-top: 20px;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Schedule Up Email Alert</div>

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
                            (minutes)</label>
                        <div class="col-md-6">
                            <select id="frequency" class="form-select" name="frequency" required>
                                <option value="15">Every 15 minutes</option>
                                <option value="30">Every 30 minutes</option>
                                <option value="45">Every 45 minutes</option>
                                <option value="2">Every 2 hours</option>
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

                    <!-- Additional form fields -->
                    {{-- 
                    <div class="mb-3 row">
                        <label for="additional_field" class="col-md-4 col-form-label text-md-end">Additional
                            Field</label>
                        <div class="col-md-6">
                            <input id="additional_field" type="text" class="form-control" name="additional_field">
                        </div>
                    </div> --}}

                    <!-- Add more fields as needed -->

                    <!-- End of additional fields -->

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Set Up Alert</button>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Email Alerts List</div>

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
                                        class="btn {{ $alert->is_active ? 'btn-success' : 'btn-danger' }}">
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
</body>

</html>

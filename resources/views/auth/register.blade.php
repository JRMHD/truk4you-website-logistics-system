 <link rel="icon" type="image/x-icon" href="/img/T4U.ico">
 <link rel="icon" type="image/png" href="/favicon.png">
 @extends('layouts.app')

 @section('content')
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">{{ __('Register') }}</div>

                     <div class="card-body">
                         <form method="POST" action="{{ route('register') }}">
                             @csrf

                             <div class="mb-3">
                                 <label for="name" class="form-label">{{ __('Name') }}</label>
                                 <input id="name" type="text"
                                     class="form-control @error('name') is-invalid @enderror" name="name"
                                     value="{{ old('name') }}" required autocomplete="name" autofocus>
                                 @error('name')
                                     <div class="invalid-feedback">{{ $message }}</div>
                                 @enderror
                             </div>

                             <div class="mb-3">
                                 <label for="company" class="form-label">{{ __('Company Name') }}</label>
                                 <input id="company" type="text"
                                     class="form-control @error('company') is-invalid @enderror" name="company"
                                     value="{{ old('company') }}" required autocomplete="company">
                                 @error('company')
                                     <div class="invalid-feedback">{{ $message }}</div>
                                 @enderror
                             </div>


                             <div class="mb-3">
                                 <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                 <input id="email" type="email"
                                     class="form-control @error('email') is-invalid @enderror" name="email"
                                     value="{{ old('email') }}" required autocomplete="email">
                                 @error('email')
                                     <div class="invalid-feedback">{{ $message }}</div>
                                 @enderror
                             </div>

                             <div class="mb-3">
                                 <label for="password" class="form-label">{{ __('Password') }}</label>
                                 <input id="password" type="password"
                                     class="form-control @error('password') is-invalid @enderror" name="password" required
                                     autocomplete="new-password">
                                 @error('password')
                                     <div class="invalid-feedback">{{ $message }}</div>
                                 @enderror
                             </div>

                             <div class="mb-3">
                                 <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                 <input id="password-confirm" type="password" class="form-control"
                                     name="password_confirmation" required autocomplete="new-password">
                             </div>

                             <div class="d-grid">
                                 <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection

@auth
<a href="{{ route('download.paperwork') }}">Download Paperwork</a>
@else
<p>Please <a href="{{ route('login') }}">log in</a> to download paperwork.</p>
@endauth

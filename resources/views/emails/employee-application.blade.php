@component('mail::message')
# New Employee Application

You have received a new employee application with the following information:

**Name:** {{ $data['name'] }}

**Current License Type, State, and Number:** {{ $data['license'] }}

**License Expiration Date:** {{ $data['expiration'] }}

**Endorsements/Restrictions:** {{ $data['endorsements'] }}

**Permission to run background and credit check:** {{ $data['backgroundCheck'] }}

**Preferred Work Schedule/Type:** {{ $data['workSchedule'] }}

**Address:** {{ $data['address'] }}

**Phone:** {{ $data['phone'] }}

**Email:** {{ $data['email'] }}

**Experience/History/References:** {{ $data['experience'] }}

@isset($data['resume'])
**Uploaded Resume:** [Download](truk4you.com/storage/{{ $data['resume'] }})
@endisset

Thank you.

@endcomponent

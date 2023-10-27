@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Company Profile')
@endsection

@section('content')

    @include('components.profile.CompanyProfile')

    <!-- @include('components.modal.CompanyProfile') -->
    
@endsection
@section('footer_script')
<script src="{{URL::asset('js/helpers/profile/company_profile.js')}}"></script>

 
@endcomponent

@endsection


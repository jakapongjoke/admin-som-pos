@extends('layouts.customer.main')
 
@section('head')
@section('title', ' Stone Color Master')
@endsection

@section('content')

    @include('components.tables.master.MasterStoneColorTable')
    @include('components.modal.master.MasterStoneColorModal')
    
@endsection
@section('footer_script')

@endsection


@extends('layouts.customer.main')
 
@section('head')
@section('title', 'COMPANY STAFF BACKOFFICE')
@endsection


@section('content')

 ssaabb
@endsection

@section("footer")
  @section('footer_script')
    <script>
   jQuery(document).ready(function($){

    $("[name='active-checkbox']").bootstrapSwitch({
        on: 'active',
			off: 'inactive	',
			onClass: 'on',
			offClass: 'off'
       });
   })

   
   
   

    </script>
  @endsection
@endsection

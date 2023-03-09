@extends('layouts.company.main')
 
@section('head')
@section('title', 'backend system')
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

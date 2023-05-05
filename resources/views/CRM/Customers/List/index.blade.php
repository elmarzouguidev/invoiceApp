@extends('layouts.app')

@section('content')
    <div class="container-xl">
        @include('layouts.parts.__messages')
        
        @include('CRM.Customers.List.__section_a_filters')

        @include('CRM.Customers.List.__section_b_nav')

        <div class="tab-content" id="orders-table-tab-content">
            @include('CRM.Customers.List.__section_c_data')
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1 class="app-page-title">Editer le client : {{ $customer->name }}</h1>
                </div>

            </div>
        </div>
        <hr class="mb-4">

        @include('CRM.Customers.Edit.__form')
    </div>
@endsection

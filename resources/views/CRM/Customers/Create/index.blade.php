@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <h1 class="app-page-title">Ajouter un client</h1>
        <hr class="mb-4">
        @include('CRM.Customers.Create.__form')
    </div>
@endsection

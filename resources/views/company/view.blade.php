@extends('layouts.app')

@section('content')
    <div class="container">
        <style>
            .companyName{
                align-items: center;
                justify-content: center;
            }
            .aboutUs{
                border-radius: 25px;
            }
            </style>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">About Our Company</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1 class="justify-content-center align-items-center companyName d-flex">Welcome to {{$company->name}} </h1>
                            <img src="https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg"  style="width:685px;height:600px; display: flex" alt="Italian Trulli">
                            <div class="aboutUs rounded shadow-sm">contact us :{{$company->name}}@gmail.com</div>
                            <div class="aboutUs rounded shadow-sm">Managed by  :{{$company->boss->name}}</div>



                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

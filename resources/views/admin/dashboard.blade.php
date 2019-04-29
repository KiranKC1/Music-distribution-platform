@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Code Status</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                    <div class="text-center">
                            <div class="row w-100">
                                    <div class="col-md-4">
                                            <div class="card border-success mx-sm-1 p-3">
                                                <div class="text-success text-center mt-3"><h4>Unshipped Codes</h4></div>
                                                <div class="text-success text-center mt-2"><h1>{{$unshipped_codes}}</h1></div>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-info mx-sm-1 p-3">
                                            <div class="text-info text-center mt-3"><h4>Shipped Codes</h4></div>
                                        <div class="text-info text-center mt-2"><h1>{{$shipped_codes}}</h1></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-danger mx-sm-1 p-3">
                                            <div class="text-danger text-center mt-3"><h4>Redeemed Codes</h4></div>
                                            <div class="text-danger text-center mt-2"><h1>{{$rdm_codes}}</h1></div>
                                        </div>
                                    </div>
                                 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
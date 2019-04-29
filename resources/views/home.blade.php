@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                    @endif
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

                    <form action="{{route('check.code')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                                <label for="name">Enter Code</label>
                                <input type="text" name="code" class="form-control">
                        </div>
                       <div class="form-group">
                        <label for="name">Enter Email</label>
                        <input type="email" name="email" class="form-control" required/>
                       </div>
                        <button type="submit" class="btn btn-md btn-success">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

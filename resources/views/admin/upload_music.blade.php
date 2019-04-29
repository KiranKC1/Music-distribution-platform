@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upload Music</div>
            <a href="{{route('download.zip')}}" class="btn btn-md btn-success">Download Zip</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="text-center" style="text-align:center;">
                    <form enctype="multipart/form-data" method="POST" action="{{route('store.song')}}">
                        {{csrf_field()}}
                            <label for="song">Upload Song</label>
                            <input style="padding:30px;" type="file" name="song" class="form-control-file" required>
                            <button style="margin-top:10px;" type="submit" class="btn btn-success btn-md">Upload</button>
                    </form>
                        </div>
                    <div class="text-center" style="margin-top:20px;">
                            <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Download</th>
                                        <th scope="col">Delete</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($songs as $s)
                                      <tr>
                                      <th scope="row">{{$loop->iteration}}</th>
                                      <td>{{$s->title}}</td>
                                      
                                      <td><a href="{{route('get.songs',$s->file)}}" class="btn btn-sm btn-success">Download</a></td>
                                      <td>
                                          <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                      </td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
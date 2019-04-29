@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="float:left;">
                    
                   Ship Album Code
                <button data-toggle="modal" data-target="#ship-code" style="float:right;" class="btn btn-sm btn-success">
                            Ship Unshipped Codes
                </button>
                </div>
            

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="text-center">
                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Code</th>
                                <th scope="col">Status</th>
                                <th scope="col">Redemmed by</th>
                                <th scope="col">Change Status</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($codes as $c)
                              <tr>
                              <th scope="row">{{$c->id}}</th>
                              <td>{{$c->access_code}}</td>
                              <td>{{$c->status}}</td>
                              @if(isset($c->redeemed_by))
                              <td>{{$c->redeemed_by}}</td>
                              @else
                              <td>N/A</td>
                              @endif
                                <td>
                                <button class="btn btn-primary change-status" code-id={{$c->access_code}} data-toggle="modal" code-status="{{$c->status}}" data-target="#exampleModal">Change Status</button>        
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                          <div style="float:right;">
                                {{ $codes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form action="{{route('change.code.status')}}" method="POST">
            <div class="modal-body">
                {{csrf_field()}}
                    <div class="radio">
                        <input type="radio" name="status" id="redeemed" value="redeemed">
                            <label>Redemmed</label>
                          </div>
                          <div class="radio">
                            <input type="radio" name="status" id="shipped" value="shipped">
                            <label>Shipped</label>
                          </div>
                          <div class="radio disabled">
                            <input type="radio" name="status" id="unshipped" value="unshipped">
                            <label>Unshipped</label>
                    </div>
            </div>
        <input type="hidden" name="access_code" value="" id="code_actual_id"/>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="ship-code" tabindex="-1" role="dialog" aria-labelledby="ship-code" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h5>You have "{{$unshipped}}" unshipped codes</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <form action="{{route('post.ship.code')}}" method="POST">
                <div class="modal-body">
                    {{csrf_field()}}
                    <label for="code_count">Input number of codes to ship</label>
                    <input type="number" name="code_count" class="form-control">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-primary">Ship codes</button>
                </div>
            </form>
              </div>
            </div>
          </div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('.change-status').click(function(){
            var code = $(this).attr('code-id');
            var code_status = $(this).attr('code-status');
            $('#modal-title').html("Change status of code '"+code+"' ?");
            $('#code_actual_id').val(code);
            $('#'+code_status).attr('checked',true);
        });
    });
</script>
@endsection

@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')

<div class="">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">All Size</h3>
        </div>
        <div class="box-body">
        <table class="table table-responsive">
    <thead>
    <tr>
        <th>#</th>
        <th>Size Name</th>
        <th>Size</th>
        <th>Modify</th>
    </tr>
    </thead>

    <tbody>
        <?php $no = 0;?>
        @foreach($sizes as $siz)
        <?php $no++ ;?>
        <tr>
            <td>{{$no}}</td>
            <td>{{$siz->name}}</td>
            <td>{{$siz->ukuran}}</td>
            <td>
                <button class="btn btn-info" data-myname="{{$siz->name}}" data-myukuran="{{$siz->ukuran}}" data-sizid="{{$siz->id}}" data-toggle="modal" data-target="#edit">Edit</button>
                <button class="btn btn-danger" data-sizid="{{$siz->id}}" data-toggle="modal" data-target="#delete">Delete</button>
            </td>
        </tr>

        @endforeach
    </tbody>

</table>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add News
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Size</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('size.store')}}" method="post">
      {{csrf_field()}}
      <div class="modal-body">
      @include('admin.formsize')

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      
      </form>
     
    </div>
  </div>
</div>

<!-- foem edit -->

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Size</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('size.update','test')}}" method="post">
      {{method_field('patch')}}
      {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="size_id" id="siz_id" value="4">
      @include('admin.formsize')

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- form delete -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('size.destroy','test')}}" method="post">
      {{method_field('delete')}}
      {{csrf_field()}}
      <div class="modal-body">
        <p class="text-center">
            Are you sure want to delete this?
        </p>
        <input type="hidden" name="size_id" id="siz_id" value="4">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No, Close</button>
        <button type="submit" class="btn btn-warning">Yes, Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>


@endsection
@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')

<div class="">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">All Brand</h3>
        </div>
        <div class="box-body">
        <table class="table table-responsive">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Title</th>
        <th>Detail</th>
        <th>Modify</th>
    </tr>
    </thead>

    <tbody>
    <?php $no = 0;?>
@foreach($brands as $bra)
<?php $no++ ;?>
        <tr>
            <td>{{ $no }}</td>
            <td>{{$bra->name}}</td>
            <td>{{$bra->title}}</td>
            <td>{{$bra->detail}}</td>
            <td>
                <button class="btn btn-info" data-myname="{{$bra->name}}" data-mytitle="{{$bra->title}}" data-mydetail="{{$bra->detail}}" data-catid="{{$bra->id}}" data-toggle="modal" data-target="#edit">Edit</button>
                <button class="btn btn-danger" data-catid="{{$bra->id}}" data-toggle="modal" data-target="#delete">Delete</button>
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
        <h5 class="modal-title" id="exampleModalLabel">New Brands</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('brand.store')}}" method="post">
      {{csrf_field()}}
      <div class="modal-body">
      @include('admin.formbrand')

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
        <h5 class="modal-title" id="exampleModalLabel">Edit Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('brand.update','test')}}" method="post">
      {{method_field('patch')}}
      {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="brand_id" id="cat_id" value="4">
      @include('admin.formbrand')

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

      <form action="{{route('brand.destroy','test')}}" method="post">
      {{method_field('delete')}}
      {{csrf_field()}}
      <div class="modal-body">
        <p class="text-center">
            Are you sure want to delete this?
        </p>
        <input type="hidden" name="brand_id" id="cat_id" value="4">

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
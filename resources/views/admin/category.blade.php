@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New
</button>

<div class="">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">All Category</h3>
        </div>
        <div class="box-body">
        <table class="table table-responsive">
    <thead>
    <tr>
        <th>#</th>
        <th>Name Category</th>
        <th>Sub Category</th>
        <th>Sub Sub Category</th>
        <th>Modify</th>
    </tr>
    </thead>

    <tbody>
    <?php $no = 0;?>
    @foreach($categories as $cat)
    <?php $no++ ;?>
        <tr>
            <td>{{ $no }}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->sub_name}}</td>
            <td>{{$cat->sub_sub_name}}</td>
            <td>
                <button class="btn btn-info" data-myname="{{$cat->name}}" data-mysubname="{{$cat->sub_name}}" data-mysubsubname="{{$cat->sub_sub_name}}" data-catid="{{$cat->id}}" data-toggle="modal" data-target="#edit">Edit</button>
                <button class="btn btn-danger" data-catid="{{$cat->id}}" data-toggle="modal" data-target="#delete">Delete</button>
            </td>
        </tr>

        @endforeach
    </tbody>

</table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('category.store')}}" method="post">
      {{csrf_field()}}
      <div class="modal-body">
            @include('admin.formcategory')

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- edit form -->
<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('category.update','test')}}" method="post">
      {{method_field('patch')}}
      {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="category_id" id="cat_id" value="4">
      @include('admin.formcategory')

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('category.destroy','test')}}" method="post">
      {{method_field('delete')}}
      {{csrf_field()}}
      <div class="modal-body">
        <p class="text-center">
            Are you sure want to delete this?
        </p>
        <input type="hidden" name="category_id" id="cat_id" value="4">

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
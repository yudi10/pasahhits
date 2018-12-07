
@if(count($errors)>0)

<ul>
@foreach($errors->all() as $error)
    <li class="alert alert-danger">{{$error}}</li>
@endforeach
</ul>

@endif

<div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <label for="sub_name">Sub Category</label>
                <input type="text" class="form-control" name="sub_name" id="sub_name">
            </div>

            <div class="form-group">
                <label for="subsubneme">Sub Sub category</label>
                <input type="text" class="form-control" name="sub_sub_name" id="sub_sub_name">
            </div>

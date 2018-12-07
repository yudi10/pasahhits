
@if(count($errors)>0)

<ul>
@foreach($errors->all() as $error)
    <li class="alert alert-danger">{{$error}}</li>
@endforeach
</ul>

@endif


<div class="form-group">
                <label for="name">Color Nama</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>


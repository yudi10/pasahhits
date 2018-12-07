

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
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group">
                <label for="detail">Detail</label>
                <input type="text" class="form-control" name="detail" id="detail">
            </div>

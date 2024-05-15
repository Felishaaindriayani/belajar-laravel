@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Brand</div>
                <div class="card-body">
                    <form action=" " method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name Brand</label>
                            <input type="text" class="form-control" name="name_brand" value="{{ $brand->name_brand}}" disabled>
                        </div>
                        <a href="{{url('brand')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

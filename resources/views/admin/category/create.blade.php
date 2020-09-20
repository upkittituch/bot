@extends('admin.layouts.main')
@section('content')

<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data"> @csrf
    <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Category</h1>
            </div>

                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                         <h6 class="m-0 font-weight-bold text-primary">Category Create</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                    
                
    </div>
</form>     
@endsection
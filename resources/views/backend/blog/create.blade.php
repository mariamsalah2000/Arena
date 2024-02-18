@extends('backend.app')
@section('content')
@if(session()->has('success') > 0)
    <div class="row alert alert-success fade show" role="alert">
        <div class="col-10 text-lg-left" >{{ session()->get('success') }}</div>
        <div class="col-1 close">
            <button type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>
        </div>
    </div>

@elseif(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <div class="alert-text">
            <h4 class="alert-heading">Input Errors !</h4>
            <p>Some Error has been happened with New Inputs as Follows :</p>
            <hr>
            @foreach($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach

        </div>
    </div>
@endif
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('all.Add Blog')}}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="name"><strong>{{trans('all.English Name')}}</strong></label>
                                <input type="text" placeholder="{{trans('all.Name')}}" name="name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="name"><strong>{{trans('all.Arabic Name')}}</strong></label>
                                <input type="text" placeholder="{{trans('all.Name')}}" name="name_ar" class="form-control" required>
                            </div>
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="title"><strong>{{trans('all.English Title')}}</strong></label>
                                <input type="text" placeholder="{{trans('all.Title')}}" name="title" class="form-control">
                            </div>

                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="title"><strong>{{trans('all.Arabic Title')}}</strong></label>
                                <input type="text" placeholder="{{trans('all.Title')}}" name="title_ar" class="form-control">
                            </div>
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="description"><strong>{{trans('all.Englis Description')}}</strong></label>
                                <textarea name="description" class="form-control" required></textarea>
                            </div>

                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="description"><strong>{{trans('all.Arabic Description')}}</strong></label>
                                <textarea name="description_ar" class="form-control" required></textarea>
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="order"><strong>{{trans('all.order')}}</strong></label>
                                <input type="number" name="order" class="form-control" placeholder="{{trans('all.order')}}" value="1">
                            </div>
                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="cover"><strong>{{trans('all.Cover')}} </strong></label>
                                <input type="file" class="form-control" name="cover" required>
                            </div>
                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="images"><strong>{{trans('all.image')}}</strong></label>
                                <input type="file" class="form-control" name="image" required>
                            </div>

                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{trans('all.Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

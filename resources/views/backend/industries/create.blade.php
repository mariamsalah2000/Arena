@extends('backend.app')
@section('content')
    @if (session()->has('success') > 0)
        <div class="row alert alert-success fade show" role="alert">
            <div class="col-10 text-lg-left">{{ session()->get('success') }}</div>
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
                @foreach ($errors->all() as $error)
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
                            <h4>Add Industry</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('industries.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-3 lg-gutters-20 text-center">
                                    <label for="name"><strong>name</strong></label>
                                    <input type="text" placeholder="Name" name="name" class="form-control">
                                </div>
                                <div class="form-group mb-3 lg-gutters-25 text-center">
                                    <label for="order"><strong>{{ trans('all.order') }}</strong></label>
                                    <input type="number" name="order" class="form-control"
                                        placeholder="{{ trans('all.order') }}" value="1">
                                </div>
                                <div class="form-group mb-3 lg-gutters-25 text-center">
                                    <label for="image"><strong>{{ trans('all.image') }}</strong></label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>

                                <div class="form-group mb-3 text-right">
                                    <button type="submit" class="btn btn-primary">{{ trans('all.Save') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@extends('backend.app')
@section('content')
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Edit Platform</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('platforms.update', $platform->id) }}" method="POST"
                                enctype="multipart/form-data">@method('PUT')
                                @csrf
                                <div class="form-group mb-3 lg-gutters-20 text-center">
                                    <label for="title"><strong>{{ trans('all.title') }}</strong></label>
                                    <input type="text" value="{{ $platform->title }}" name="title" class="form-control"
                                        required>
                                </div>

                                <div class="form-group mb-3 lg-gutters-20 text-center">
                                    <label for="desc"><strong>{{ trans('all.desc') }}</strong></label>
                                    <textarea name="desc" class="form-control" required>{{ $platform->desc }}</textarea>
                                </div>

                                <div class="form-group mb-3 lg-gutters-20 text-center">
                                    <label for="subtitle"><strong>{{ trans('all.subtitle') }}</strong></label>
                                    <input type="text" value="{{ $platform->subtitle }}" name="subtitle"
                                        class="form-control" required>
                                </div>

                                <div class="form-group mb-3 lg-gutters-25 text-center">
                                    <label for="order"><strong>{{ trans('all.order') }}</strong></label>
                                    <input type="number" name="order" class="form-control"
                                        value="{{ $platform->order }}">
                                </div>

                                <div class="form-group mb-3 lg-gutters-25 text-center">
                                    <label for="image"><strong>{{ trans('all.image') }}</strong></label>
                                    <input type="file" name="image" class="form-control"
                                        @if (!$platform->img) required @endif>
                                </div>
                                <div class="form-group mb-3 text-right">
                                    <button type="submit" class="btn btn-primary">{{ trans('all.update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('backend.app')
@section('content')
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Edit Project</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('projects.update', $project->id) }}" method="POST"
                                enctype="multipart/form-data">@method('PUT')
                                @csrf
                                <div class="form-group mb-3 lg-gutters-20 text-center">
                                    <label for="name"><strong>{{ trans('all.name') }}</strong></label>
                                    <input type="text" value="{{ $project->name }}" name="name" class="form-control"
                                        required>
                                </div>

                                <div class="form-group mb-3 lg-gutters-20 text-center">
                                    <label for="desc"><strong>{{ trans('all.desc') }}</strong></label>
                                    <textarea name="desc" class="form-control" required>{{ $project->desc }}</textarea>
                                </div>

                                <div class="form-group mb-3 lg-gutters-25 text-center">
                                    <label for="order"><strong>{{ trans('all.order') }}</strong></label>
                                    <input type="number" name="order" class="form-control" value="{{ $project->order }}">
                                </div>

                                <div class="form-group mb-3 lg-gutters-25 text-center">
                                    <label for="image"><strong>{{ trans('all.image') }}</strong></label>
                                    <input type="file" name="image" class="form-control"
                                        @if (!$project->img) required @endif>
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

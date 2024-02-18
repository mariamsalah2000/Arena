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

    <div class=" text-left mt-2 mb-3">
        <div class="align-items-center">
            <h1 class="h3">All Industries</h1>
        </div>
    </div>


    <div class="card">
        <form class="" id="sort_customers" action="" method="GET">
            <div class="card-header row gutters-5">
                <div class="col">
                    <h5 class="mb-0 h6">Industries</h5>
                </div>

                <div class="col-md-3">
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" id="search"
                            name="search"@isset($search) value="{{ $search }}" @endisset
                            placeholder="{{ trans('all.search') }}">
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table  mb-0" style="width: 100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('all.Image') }}</th>
                            <th>{{ trans('all.Name') }}</th>
                            <th>{{ trans('all.Order') }}</th>
                            <th class="text-right">{{ trans('all.Options') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($industries as $key => $industry)
                            @if ($industry != null)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td style="width: 25%"><img style="width: 100%" src="{{ asset($industry->img) }}">
                                    </td>
                                    <td style="width: 25%">{{ $industry->name }}</td>

                                    <td>{{ $industry->order }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('industries.edit', $industry->id) }}"
                                            class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                            title="{{ trans('all.Edit') }}">
                                            <i class="las la-edit"></i>
                                        </a>
                                        <a href="{{ route('industries.destroy', $industry->id) }}"
                                            class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                            title="{{ trans('all.Delete') }}">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>

            </div>
        </form>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        function sort_customers(el) {
            $('#sort_customers').submit();
        }
    </script>
@endsection

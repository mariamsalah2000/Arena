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
<div class=" text-left mt-2 mb-3">
    <div class="align-items-center">
        <h1 class="h3">{{trans('all.All requests')}}</h1>
    </div>
</div>


<div class="card">
    <form class="" id="sort_customers" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col">
                <h5 class="mb-0 h6">{{trans('all.requests')}}</h5>
            </div>

            <div class="col-md-3">
                <div class="form-group mb-0">
                    <input type="text" class="form-control" id="search" name="search"@isset($search) value="{{ $search }}" @endisset placeholder="{{ trans('all.search') }}">
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table  mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{trans('all.name')}}</th>
                        <th>{{trans('all.phone')}}</th>
                        <th>{{trans('all.subject')}}</th>
                        <th>{{trans('all.inquiry')}}</th>

                        <th class="text-right">{{trans('all.Options')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $key => $request)
                        @if ($request != null)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$request->name}}</td>

                                <td>{{$request->phone?:'-'}}</td>
                                <td>{{$request->subject?:'-'}}</td>

                                <td>{{$request->inquiry}}</td>

                                <td class="text-right">

                                    <a href="{{route('requests.destroy', $request->id)}}" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="{{ trans('all.Delete') }}">
                                            <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>

            {{--  <div class="aiz-pagination">
                {{ $requests->appends(request()->input())->links() }}
            </div>  --}}
        </div>
    </form>
</div>

@endsection
@section('script')
<script type="text/javascript">
    function sort_customers(el){
        $('#sort_customers').submit();
    }
</script>
@endsection

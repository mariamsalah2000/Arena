<!doctype html>
{{-- @if(\App\Models\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@else --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- @endif --}}
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="app-url" content="{{ env('APP_URL') }}">

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="icon" href="{{ asset('assets/img/icon') }}">
	<title>{{ env('APP_NAME') }}</title>

	<!-- google font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

	<!-- aiz core css -->
	<link rel="stylesheet" href="{{ asset('assets/css/vendors.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/aiz-core.css') }}">

    <style>
        body {
            font-size: 12px;
        }
    </style>
	<script>
    	var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: '{{ trans('all.Nothing selected') }}',
            nothing_found: '{{ trans('all.Nothing found') }}',
            choose_file: '{{ trans('all.Choose file') }}',
            file_selected: '{{ trans('all.File selected') }}',
            files_selected: '{{ trans('all.Files selected') }}',
            add_more_files: '{{ trans('all.Add more files') }}',
            adding_more_files: '{{ trans('all.Adding more files') }}',
            drop_files_here_paste_or: '{{ trans('all.Drop files here, paste or') }}',
            browse: '{{ trans('all.Browse') }}',
            upload_complete: '{{ trans('all.Upload complete') }}',
            upload_paused: '{{ trans('all.Upload paused') }}',
            resume_upload: '{{ trans('all.Resume upload') }}',
            pause_upload: '{{ trans('all.Pause upload') }}',
            retry_upload: '{{ trans('all.Retry upload') }}',
            cancel_upload: '{{ trans('all.Cancel upload') }}',
            uploading: '{{ trans('all.Uploading') }}',
            processing: '{{ trans('all.Processing') }}',
            complete: '{{ trans('all.Complete') }}',
            file: '{{ trans('all.File') }}',
            files: '{{ trans('all.Files') }}',
        }
	</script>

</head>
<body class="">

	<div class="aiz-main-wrapper d-flex">
        <div class="flex-grow-1">
            @yield('content')
        </div>
    </div><!-- .aiz-main-wrapper -->

    @yield('modal')


    <script src="{{ asset('assets/js/vendors.js') }}" ></script>
    <script src="{{ asset('assets/js/aiz-core.js') }}" ></script>

    @yield('script')

    <script type="text/javascript">
        @foreach (session('flash_notification', collect())->toArray() as $message)
            AIZ.plugins.notify('{{ $message['level'] }}', '{{ $message['message'] }}');
        @endforeach
    </script>

</body>
</html>

<div class="aiz-sidebar-wrap">
    <div class="aiz-sidebar left c-scrollbar">
        <div class="aiz-side-nav-logo-wrap">
            <a href="{{ route('admin.dashboard') }}" class="d-block text-left">
                <img class="mw-100" src="{{ asset('assets/images/logo.png') }}" class="brand-icon" alt="{{ env('APP_NAME') }}">
            </a>
        </div>
        <div class="aiz-side-nav-wrap">
            <div class="px-20px mb-3">
                <input class="form-control bg-soft-secondary border-0 form-control-sm text-white" type="text" name="" placeholder="{{ trans('all.Search in menu') }}" id="menu-search" onkeyup="menuSearch()">
            </div>
            <ul class="aiz-side-nav-list" id="search-menu">
            </ul>
            <ul class="aiz-side-nav-list" id="main-menu" data-toggle="aiz-side-menu">

                {{-- Dashboard --}}
                <li class="aiz-side-nav-item">
                    <a href="{{route('admin.dashboard')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Dashboard')}}</span>
                    </a>
                </li>
                {{-- Projects --}}
                <li class="aiz-side-nav-item">
                    <a href="{{route('projects.index')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Projects')}}</span>
                    </a>
                </li>
                {{-- Add Project --}}
                <li class="aiz-side-nav-item">
                    <a href="{{route('projects.create')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Add Project')}}</span>
                    </a>
                </li>
                {{-- Categories --}}
                <li class="aiz-side-nav-item">
                    <a href="{{route('categories.index')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Products')}}</span>
                    </a>
                </li>
                {{-- Add Category --}}
                <li class="aiz-side-nav-item">
                    <a href="{{route('categories.create')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Add Product')}}</span>
                    </a>
                </li>
                {{-- Accessories --}}
                <li class="aiz-side-nav-item">
                    <a href="{{route('accessories.index')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Accessories')}}</span>
                    </a>
                </li>
                {{-- Add Accessory --}}
                <li class="aiz-side-nav-item">
                    <a href="{{route('accessories.create')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Add Accessory')}}</span>
                    </a>
                </li>
                {{-- Services --}}
                {{--  <li class="aiz-side-nav-item">
                    <a href="{{route('services.index')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Services')}}</span>
                    </a>
                </li>  --}}
                {{-- Add Service --}}
                {{--  <li class="aiz-side-nav-item">
                    <a href="{{route('services.create')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Add Service')}}</span>
                    </a>
                </li>  --}}
                {{-- Videos --}}
                {{--  <li class="aiz-side-nav-item">
                    <a href="{{route('videos.index')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Videos')}}</span>
                    </a>
                </li>  --}}
                {{-- Add Video --}}
                {{--  <li class="aiz-side-nav-item">
                    <a href="{{route('videos.create')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Add Video')}}</span>
                    </a>
                </li>  --}}
                {{-- Collaborators --}}
                {{--  <li class="aiz-side-nav-item">
                    <a href="{{route('collaborators.index')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Collaborators')}}</span>
                    </a>
                </li>  --}}
                {{-- Add Collaborator --}}
                {{--  <li class="aiz-side-nav-item">
                    <a href="{{route('collaborators.create')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Add Collaborator')}}</span>
                    </a>
                </li>  --}}
                {{-- Benefits --}}
                {{--  <li class="aiz-side-nav-item">
                    <a href="{{route('benefits.index')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Benefits')}}</span>
                    </a>
                </li>  --}}
                {{-- Add Benefit --}}
                {{--  <li class="aiz-side-nav-item">
                    <a href="{{route('benefits.create')}}" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Add Benefit')}}</span>
                    </a>
                </li>  --}}
                {{-- Contact Requests --}}
                <li class="aiz-side-nav-item">
                    <a href="{{route('contact_requests')}}" class="aiz-side-nav-link">
                        <i class="las la-tty aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Contact Requests')}}</span>
                    </a>
                </li>
                {{-- Configs --}}
                {{--  <li class="aiz-side-nav-item">
                    <a href="{{route('configs.index')}}" class="aiz-side-nav-link">
                        <i class="las la-cog aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{trans('all.Configurations')}}</span>
                    </a>
                </li>  --}}
            </ul>
        </div>
    </div>
</div>

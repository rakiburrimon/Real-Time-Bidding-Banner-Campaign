@extends('layouts.admin')

@section('title', __('Installed Modules'))

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                <h5 class="card-header">{{ __('Installed Modules') }}</h5>
                <hr class="my-0" />
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <ul class="list-unstyled">
                           @foreach($moduleStatuses as $moduleName => $enabled)
                           <li>
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1">
                                        <div class="col-12 mb-sm-0 mb-2">
                                        <h6 class="mb-0">{{ $moduleName }}</h6>
                                        <small class="text-muted">
                                            @if($enabled)
                                                <span style="color: green;">Enabled</span>
                                            @else
                                                <span style="color: red;">Disabled</span>
                                            @endif
                                        </small>
                                            <form action="{{ route('modules.toggle', $moduleName) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit">{{ $enabled ? 'Disable' : 'Enable' }}</button>
                                            </form>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


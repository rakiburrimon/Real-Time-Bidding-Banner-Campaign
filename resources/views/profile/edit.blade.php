@extends('layouts.admin')

@section('title', __('Edit Profile'))

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
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

                        <form id="formAccountSettings" method="POST" action="{{ route('profile.update', ['id' => $profile->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name', $profile->name) }}"
                                        autofocus required
                                    />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="email"
                                        name="email"
                                        value="{{ old('email', $profile->email) }}"
                                        placeholder="john.doe@example.com"
                                    />
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">{{ __('Update') }}</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

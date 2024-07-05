@section('title', 'Account')
@extends('vendor.InstallerEragViews.app-layout')
@section('content')
    <section class="mt-4">
        <div class="container">
            <div class="col-md-6 cs_center">
                <form action="{{ route('saveAccount') }}" method="post" class="card">
                    @csrf
                    <div class="card-body">
                        <div class="tab">

                            <div class="col-md-12 mb-3">
                                <x-install-input label="Name" required="ture" name="name" type="text"
                                    value="{{ old('name') }}" />
                                <x-install-error for="name" />
                            </div>

                            <div class="col-md-12 mb-3">
                                <x-install-input label="Email" required="ture" name="email" type="email"
                                    value="{{ old('email') }}" />
                                <x-install-error for="email" />
                            </div>

                            <div class="col-md-12 mb-3">
                                <x-install-input label="Password" required="ture" name="password" type="password"
                                    value="{{ old('password') }}" />
                                <x-install-error for="password" />
                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex">
                            <button type="submit" id="next_button" class="btn btn-primary ms-auto">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

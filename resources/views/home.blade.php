@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card rounded">
                <div class="card-header bg-white">{{ __('Dashboard') }}</div>

                <div class="card-body p-0">
                    <div class="container-flex p-3">
                        <div class="row">
                            <div class="col-sm-3" style="border-right: 1px solid gray;">@livewire('threads.thread-list')</div>
                            <div class="col-sm"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('backend.admin-master')
@section('site-title')
    {{__('Altdream Key')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                @include('backend.partials.message')
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__("key Settings")}}</h4>
                        @if('verified' == get_static_option('item_license_status'))
                            <div class="alert alert-success">{{__('Altdream is Registered')}}</div>
                        @else
                        <form action="{{route('admin.general.license.settings')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="item_purchase_key">{{__('Altdream Key')}}</label>
                                <input type="text" name="item_purchase_key"  class="form-control" value="{{get_static_option('item_purchase_key')}}" id="item_purchase_key">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Re-Validate Information')}}</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

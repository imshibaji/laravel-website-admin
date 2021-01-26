@extends('admin::layouts.master')

@section('title', 'Scheduling')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="Scheduling"
            item1="Admin"
            :link1="config('admin.prefix', 'admin')"
            />
        </div><!--end col-->
    </div>
    <!-- end post title end breadcrumb -->

    @if (session('status'))
        <x-admin-alert type="success" :message="session('status')"></x-admin-alert>
    @endif

    <form action="{{ config('admin.prefix', 'admin') }}/setup/scheduling" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$business->id}}">
    <div class="card">
        <div class="card-header">
            <h5>Scheduling</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <x-admin-switch-btn name="Send Invoice Reminder" col="6" fname="send_invoice_reminder" :checked="$business->send_invoice_reminder" />
                <x-admin-input name="Send After Due Date" col="6" fname="send_after_due_date" value="{{$business->send_after_due_date ?? '1,3,5,10'}}" />

                <x-admin-switch-btn name="Send Bill Reminder" col="6" fname="send_bill_reminder" :checked="$business->send_bill_reminder" />
                <x-admin-input name="Send Before Due Days" col="6" fname="send_before_due_date" value="{{$business->send_before_due_date ??  '10,5,3,1'}}" />

                <x-admin-input name="Cron Command" col="6" readonly fname="" value="php {{base_path()}}/artisan schedule:run >> /dev/null 2>&1" />
                <x-admin-input name="Hour To Run" col="6" fname="hour_to_run" value="{{$business->hour_to_run ?? '09:00'}}" />
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-success" type="submit">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
    </form>

</div>
@stop

@extends('admin::layouts.master')

@section('title', 'All Settings')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="All Settings"
            item1="Admin"
            :link1="config('admin.prefix', 'admin')"
            />
        </div><!--end col-->
    </div>
    <!-- end post title end breadcrumb -->

    @if (session('status'))
        <x-admin-alert type="success" :message="session('status')"></x-admin-alert>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="row">
                <x-admin-apex-chart></x-admin-apex-chart>
            </div>
            <div class="row">
                <x-admin-analytics></x-admin-analytics>
                <x-admin-analytics chartclass="peity-donut"></x-admin-analytics>
                <x-admin-analytics updown="down" chartclass="peity-line" points="226,134">
                    @slot('dataPeity')
                    '{ "fill": ["#4d79f6", "#4d79f62b"], "innerRadius": 23, "radius": 32 }'
                    @endslot
                </x-admin-analytics>
            </div>
            <div class="row">
                <x-admin-contact-list></x-admin-contact-list>
                <x-admin-contact-list title="Shibaji Debnath" userimg="data:image/jpeg;base64,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" email="imshibaji@gmail.com"></x-admin-contact-list>
                <x-admin-contact-list></x-admin-contact-list>
            </div>
            <div class="row">
                <x-admin-contact-section></x-admin-contact-section>
                <x-admin-contact-section></x-admin-contact-section>
                <x-admin-contact-section></x-admin-contact-section>
                <x-admin-contact-section></x-admin-contact-section>
            </div>
            <div class="row">
                <x-admin-crm></x-admin-crm>
                <x-admin-crm progressCost="80" isActive></x-admin-crm>
                <x-admin-crm></x-admin-crm>
                <x-admin-crm></x-admin-crm>
            </div>
            <div class="row">
                <x-admin-ecommerce></x-admin-ecommerce>
                <x-admin-ecommerce></x-admin-ecommerce>
                <x-admin-ecommerce></x-admin-ecommerce>
                <x-admin-ecommerce></x-admin-ecommerce>
                <x-admin-ecommerce></x-admin-ecommerce>
                <x-admin-ecommerce></x-admin-ecommerce>
            </div>
            <div class="row">
                <x-admin-helpdesk></x-admin-helpdesk>
                <x-admin-helpdesk></x-admin-helpdesk>
                <x-admin-helpdesk></x-admin-helpdesk>
                <x-admin-helpdesk></x-admin-helpdesk>
                <x-admin-helpdesk></x-admin-helpdesk>
            </div>
            <div class="row">
                <x-admin-hospital></x-admin-hospital>
                <x-admin-hospital></x-admin-hospital>
                <x-admin-hospital></x-admin-hospital>
                <x-admin-hospital></x-admin-hospital>
                <x-admin-hospital></x-admin-hospital>
                <x-admin-hospital></x-admin-hospital>
            </div>
            <div class="row">
                <x-admin-icon-pricing></x-admin-icon-pricing>
                <x-admin-icon-pricing popular></x-admin-icon-pricing>
                <x-admin-icon-pricing></x-admin-icon-pricing>
                <x-admin-icon-pricing></x-admin-icon-pricing>
            </div>
            <div class="row">
                <x-admin-mv-analytics></x-admin-mv-analytics>
                <x-admin-mv-analytics></x-admin-mv-analytics>
                <x-admin-mv-analytics></x-admin-mv-analytics>
                <x-admin-mv-analytics></x-admin-mv-analytics>
            </div>
            <div class="row">
                <x-admin-pricing></x-admin-pricing>
                <x-admin-pricing popular></x-admin-pricing>
                <x-admin-pricing></x-admin-pricing>
                <x-admin-pricing></x-admin-pricing>
            </div>
            <div class="row">
                <x-admin-profile></x-admin-profile>
                <x-admin-profile></x-admin-profile>
                <x-admin-profile></x-admin-profile>
                <x-admin-profile></x-admin-profile>
            </div>
            <div class="row">
                <x-admin-project></x-admin-project>
                <x-admin-project>
                    @slot('iconClass') align-self-center icon-lg icon-dual-success  @endslot
                    @slot('title') Tasks  @endslot
                    @slot('cost') 48 @endslot
                    @slot('headClass') d-inline-block @endslot
                    @slot('pClass') progress-bar bg-success @endslot
                    @slot('isActive') true @endslot
                    @slot('pCost') 48 @endslot
                </x-admin-project>
                <x-admin-project></x-admin-project>
            </div>
        </div>
    </div>
</div>
@stop

<?php

namespace Shibaji\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Shibaji\Admin\Http\Livewire\Bill;
use Shibaji\Admin\Http\Livewire\Invoice;
use Shibaji\Admin\View\Components\Activity;
use Shibaji\Admin\View\Components\Alert;
use Shibaji\Admin\View\Components\Analytics;
use Shibaji\Admin\View\Components\ApexChart;
use Shibaji\Admin\View\Components\Base;
use Shibaji\Admin\View\Components\Breadcrumb;
use Shibaji\Admin\View\Components\CompanySelector;
use Shibaji\Admin\View\Components\ContactList;
use Shibaji\Admin\View\Components\ContactSection;
use Shibaji\Admin\View\Components\Crm;
use Shibaji\Admin\View\Components\Datatable;
use Shibaji\Admin\View\Components\Devider;
use Shibaji\Admin\View\Components\Ecommerce;
use Shibaji\Admin\View\Components\Editor;
use Shibaji\Admin\View\Components\FileUploader;
use Shibaji\Admin\View\Components\Helpdesk;
use Shibaji\Admin\View\Components\Hospital;
use Shibaji\Admin\View\Components\IconPricing;
use Shibaji\Admin\View\Components\Input;
use Shibaji\Admin\View\Components\Modal;
use Shibaji\Admin\View\Components\MvAnalytics;
use Shibaji\Admin\View\Components\Notification;
use Shibaji\Admin\View\Components\Pricing;
use Shibaji\Admin\View\Components\Profile;
use Shibaji\Admin\View\Components\Project;
use Shibaji\Admin\View\Components\Search;
use Shibaji\Admin\View\Components\Select;
use Shibaji\Admin\View\Components\Select2;
use Shibaji\Admin\View\Components\Seo;
use Shibaji\Admin\View\Components\SettingButton;
use Shibaji\Admin\View\Components\Shortcuts;
use Shibaji\Admin\View\Components\SwitchBtn;
use Shibaji\Admin\View\Components\Textarea;
use Shibaji\Admin\View\Components\Translate;

class WigetsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bindComponents();
    }

    private function bindComponents(){
        Livewire::component('admin-invoice', Invoice::class);
        Livewire::component('admin-bill', Bill::class);

        $this->loadViewComponentsAs('admin', [
            Alert::class,
            Modal::class,
            Search::class,
            Shortcuts::class,
            Translate::class,
            Notification::class,
            Seo::class,
            Datatable::class,
            Breadcrumb::class,
            Input::class,
            Select2::class,
            Analytics::class,
            ContactList::class,
            ContactSection::class,
            Crm::class,
            Ecommerce::class,
            Helpdesk::class,
            Hospital::class,
            IconPricing::class,
            MvAnalytics::class,
            Pricing::class,
            Profile::class,
            Project::class,
            ApexChart::class,
            SettingButton::class,
            Devider::class,
            CompanySelector::class,
            Editor::class,
            Select::class,
            Textarea::class,
            SwitchBtn::class,
            FileUploader::class,
            Base::class,
            Activity::class,
        ]);
    }
}

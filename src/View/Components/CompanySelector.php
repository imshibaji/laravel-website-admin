<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;
use Shibaji\Admin\Models\Common\Business;

class CompanySelector extends Component
{
    public $companies;
    public $businesses_link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $link=null
    )
    {
        // $this->companies = [
            // [ 'link' => '#', 'title' => 'Medust Technology Pvt. Ltd.', 'selected' => true ],
//
            // [ 'link' => '#', 'title' => 'Larnr Education' ],
            // [ 'link' => '#', 'title' => 'CodexPro Tech' ],
            // [ 'link' => '#', 'title' => 'Miniinet Review' ],
            // [ 'link' => '#', 'title' => 'Watches Shop Pro' ],
            // [ 'link' => '#', 'title' => 'BusinessPro Ltd.' ],
            // [ 'link' => '#', 'title' => 'Spaice & Snacks' ],
        // ];
        $datas = Business::all();
        $company_data = array_map(function($comp){
            $link =  route('admin.business.setup.default', $comp['id']);
            $selected = ($comp['default'] == 'on') ? true : false;

            return [
                'link' => $link,
                'title' => $comp['name'],
                'selected' => $selected
            ];
        }, $datas->toArray());
        // dd($company_data);
        $this->companies = $company_data;
        $this->businesses_link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.company-selector');
    }
}

<?php

namespace Shibaji\Admin\Http\Controllers\Common;

use App\Models\User;
use Illuminate\Http\Request;
use Shibaji\Admin\Classes\FormBuilder as Form;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Post;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Searchable\Search;

class Dashboard extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        $options= json_decode('{
            "chart": {
              "height": 350,
              "type": "line",
              "stacked": false,
              "toolbar": {
                "show": false,
                "autoSelected": "zoom"
              }
            },
            "dataLabels": {
              "enabled": false
            },
            "colors": ["#007BD9", "#FC830A", "#00FC97"],
            "series": [

              {
                "name": "Incomes",
                "type": "column",
                "data": [21.1, 23, 33.1, 34, 44.1, 44.9, 56.5, 58.5]
              },
              {
                "name": "Expanses",
                "type": "column",
                "data": [10, 19, 27, 26, 34, 35, 40, 38]
              },
              {
                "name": "Profits",
                "type": "line",
                "data": [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
              }
            ],
            "stroke": {
              "width": [4, 4, 4]
            },
            "plotOptions": {
              "bar": {
                "columnWidth": "20%"
              }
            },
            "xaxis": {
              "categories": [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016]
            },
            "yaxis": [
              {
                "seriesName": "Incomes",
                "axisTicks": {
                  "show": true
                },
                "axisBorder": {
                  "show": true
                },
                "title": {
                  "text": "Amounts"
                }
              },
              {
                "seriesName": "Incomes",
                "show": false
              }, {
                "opposite": true,
                "seriesName": "Profits",
                "axisTicks": {
                  "show": true
                },
                "axisBorder": {
                  "show": true
                },
                "title": {
                  "text": "Growth"
                }
              }
            ],
            "tooltip": {
              "shared": false,
              "intersect": true,
              "x": {
                "show": true
              }
            },
            "legend": {
              "horizontalAlign": "left",
              "offsetX": 40
            }
        }', true);

        // Home Page Links
        /*
        if(file_exists(resource_path('views/admin/home.blade.php'))){
            return view('admin.home');
        }else if(file_exists(resource_path('views/dashboards/main.blade.php'))){
            return view('dashboards.main');
        }else{
            return view('admin::dashboards.main');
        }
        */

        return view('admin::admin.home', ['options' => $options]);
    }
    public function crm(){
        return view('admin::dashboards.crm');
    }

    public function page(Request $req){
        return $req;
    }

    public function search(Request $req){
        $searchResults = (new Search())
        // ->registerModel(Role::class, 'name')
        // ->registerModel(Permission::class, 'name')
        ->search($req->query('q'));

        return view('admin::search', compact('searchResults'));
    }
}

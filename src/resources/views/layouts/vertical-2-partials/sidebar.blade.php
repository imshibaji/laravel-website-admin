      <!-- Left Sidenav -->
        <div class="left-sidenav">           
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="/analytics/analytics-index" class="logo">
                    <span>
                        <img src="{{ URL::asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="{{ URL::asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{ URL::asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo--> 
            <div class="leftbar-profile p-3 w-100">
                <div class="media position-relative">
                    <div class="leftbar-user online">
                        <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-md rounded-circle"> 
                    </div>                                                         
                    <div class="media-body align-self-center text-truncate ml-3">                        
                        <h5 class="mt-0 mb-1 font-weight-semibold">Hyman M. Cross</h5>   
                        <p class="text-uppercase mb-0 font-12">Admin</p>                                         
                    </div><!--end media-body-->
                </div>
            </div>
            <ul class="metismenu left-sidenav-menu slimscroll">
                <li class="menu-label">Main</li>
               
                @yield('sidebarPortion')
               
                <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="grid" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>Apps</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Email <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="/apps/email-inbox">Inbox</a></li>
                                <li><a href="/apps/email-read">Read Email</a></li>
                            </ul>
                        </li>  
                        <li class="nav-item"><a class="nav-link" href="/apps/chat"><i class="ti-control-record"></i>Chat</a></li>
                        <li class="nav-item"><a class="nav-link" href="/apps/contact-list"><i class="ti-control-record"></i>Contact List</a></li>
                        <li class="nav-item"><a class="nav-link" href="/apps/calendar"><i class="ti-control-record"></i>Calendar</a></li>
                        <li class="nav-item"><a class="nav-link" href="/apps/invoice"><i class="ti-control-record"></i>Invoice</a></li>                        
                    </ul>
                </li>                   
                <li class="menu-label">Components</li>
                <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="package" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>UI Kit</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Elements <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="/others/ui-bootstrap">Bootstrap</a></li>
                                <li><a href="/others/ui-animation">Animation</a></li>
                                <li><a href="/others/ui-avatar">Avatar</a></li>
                                <li><a href="/others/ui-clipboard">Clip Board</a></li>
                                <li><a href="/others/ui-files">File Manager</a></li>
                                <li><a href="/others/ui-ribbons">Ribbons</a></li>
                                <li><a href="/others/ui-dragula">Dragula</a></li>
                                <li><a href="/others/ui-check-radio">Check & Radio</a></li>
                            </ul>
                        </li>  
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Advanced UI <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="/others/advanced-rangeslider">Range Slider</a></li>
                                <li><a href="/others/advanced-sweetalerts">Sweet Alerts</a></li>
                                <li><a href="/others/advanced-nestable">Nestable List</a></li>
                                <li><a href="/others/advanced-ratings">Ratings</a></li>
                                <li><a href="/others/advanced-highlight">Highlight</a></li>
                                <li><a href="/others/advanced-session">Session Timeout</a></li>
                                <li><a href="/others/advanced-idle-timer">Idle Timer</a></li>
                            </ul>
                        </li>  
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Forms <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="/others/forms-elements">Basic Elements</a></li>
                                <li><a href="/others/forms-advanced">Advance Elements</a></li>
                                <li><a href="/others/forms-validation">Validation</a></li>
                                <li><a href="/others/forms-wizard">Wizard</a></li>
                                <li><a href="/others/forms-editors">Editors</a></li>
                                <li><a href="/others/forms-repeater">Repeater</a></li>
                                <li><a href="/others/forms-x-editable">X Editable</a></li>
                                <li><a href="/others/forms-uploads">File Upload</a></li>
                                <li><a href="/others/forms-img-crop">Image Crop</a></li>
                            </ul>
                        </li>  
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Charts <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="/others/charts-apex">Apex</a></li>
                                <li><a href="/others/charts-morris">Morris</a></li>
                                <li><a href="/others/charts-flot">Flot</a></li>
                                <li><a href="/others/charts-chartjs">Chartjs</a></li>
                                <li><a href="/others/charts-chartist">Chartist</a></li>
                                <li><a href="/others/charts-peity">Peity</a></li>
                                <li><a href="/others/charts-sparkline">Sparkline</a></li>
                                <li><a href="/others/charts-knob">Jquery Knob</a></li>
                                <li><a href="/others/charts-justgage">JustGage</a></li>
                            </ul>
                        </li>  
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Tables <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="/others/tables-basic">Basic</a></li>
                                <li><a href="/others/tables-datatable">Datatables</a></li>
                                <li><a href="/others/tables-responsive">Responsive</a></li>
                                <li><a href="/others/tables-editable">Editable</a></li>
                                <li><a href="/others/tables-footable">Footable</a></li>
                                <li><a href="/others/tables-jsgrid">Jsgrid</a></li>
                                <li><a href="/others/tables-dragger">Dragger</a></li>
                            </ul>
                        </li>  
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Icons <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="/others/icons-materialdesign">Material Design</a></li>
                                <li><a href="/others/icons-dripicons">Dripicons</a></li>
                                <li><a href="/others/icons-fontawesome">Font awesome</a></li>
                                <li><a href="/others/icons-themify">Themify</a></li>
                                <li><a href="/others/icons-typicons">Typicons</a></li>
                                <li><a href="/others/icons-feather">Feather</a></li>
                                <li><a href="/others/icons-emoji">Emoji</a></li>
                            </ul>
                        </li>  
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Maps <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="/others/maps-google">Google Maps</a></li>
                                <li><a href="/others/maps-leaflet">Leaflet Maps</a></li>
                                <li><a href="/others/maps-vector">Vector Maps</a></li>  
                            </ul>
                        </li>  
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Email Template <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="/others/email-templates-basic">Basic Action Email</a></li>
                                <li><a href="/others/email-templates-alert">Alert Email</a></li>
                                <li><a href="/others/email-templates-billing">Billing Email</a></li>
                            </ul>
                        </li>   
                    </ul>                        
                </li>
                <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="copy" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>Pages</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/pages/pages-profile"><i class="ti-control-record"></i>Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/pages-timeline"><i class="ti-control-record"></i>Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/pages-treeview"><i class="ti-control-record"></i>Treeview</a></li>
                        <li class="nav-item"><a class="nav-link" href="/vertical-2/pages-starter"><i class="ti-control-record"></i>Starter Page</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/pages-pricing"><i class="ti-control-record"></i>Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/pages-tour"><i class="ti-control-record"></i>Tour</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/pages-blogs"><i class="ti-control-record"></i>Blogs</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/pages-faq"><i class="ti-control-record"></i>FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/pages-gallery"><i class="ti-control-record"></i>Gallery</a></li>
                    </ul>
                </li>

                <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="lock" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>Authentication</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">                       
                        <li class="nav-item"><a class="nav-link" href="/authentication/auth-login"><i class="ti-control-record"></i>Log In</a></li>
                        <li class="nav-item"><a class="nav-link" href="/authentication/auth-login-alt"><i class="ti-control-record"></i>Log In-alt</a></li>
                        <li class="nav-item"><a class="nav-link" href="/authentication/auth-register"><i class="ti-control-record"></i>Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="/authentication/auth-register-alt"><i class="ti-control-record"></i>Register-alt</a></li>
                        <li class="nav-item"><a class="nav-link" href="/authentication/auth-recover-pw"><i class="ti-control-record"></i>Re-Password</a></li>
                        <li class="nav-item"><a class="nav-link" href="/authentication/auth-recover-pw-alt"><i class="ti-control-record"></i>Re-Password-alt</a></li>
                        <li class="nav-item"><a class="nav-link" href="/authentication/auth-lock-screen"><i class="ti-control-record"></i>Lock Screen</a></li>
                        <li class="nav-item"><a class="nav-link" href="/authentication/auth-lock-screen-alt"><i class="ti-control-record"></i>Lock Screen-alt</a></li>
                        <li class="nav-item"><a class="nav-link" href="/authentication/auth-404"><i class="ti-control-record"></i>Error 404</a></li>
                        <li class="nav-item"><a class="nav-link" href="/authentication/auth-404-alt"><i class="ti-control-record"></i>Error 404-alt</a></li>
                        <li class="nav-item"><a class="nav-link" href="/authentication/auth-500"><i class="ti-control-record"></i>Error 500</a></li>
                        <li class="nav-item"><a class="nav-link" href="/authentication/auth-500-alt"><i class="ti-control-record"></i>Error 500-alt</a></li>
                    </ul>
                </li>
            </ul>
            
        </div>
        <!-- end left-sidenav-->
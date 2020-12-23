 <!-- Modal -->
<div class="modal fade compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="exampleModalLabel">Compose Mail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-0 p-3">
                    <form>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" placeholder="To">
                        </div><!--end form-group-->
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Cc">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Bcc">
                                </div>
                            </div>
                        </div><!--end form-group-->
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div><!--end form-group-->
                        <div class="form-group mb-3">
                            <div class="summernote">
                                <h6>Hello Summernote</h6>
                                <ul>
                                    <li>
                                        Select a text to reveal the toolbar.
                                    </li>
                                    <li>
                                        Edit rich document on-the-fly, so elastic!
                                    </li>
                                </ul>
                                <p>
                                    End of air-mode area
                                </p>

                            </div>
                        </div><!--end form-group-->

                        <div class="btn-toolbar form-group mb-0">
                            <div class="pull-right">
                                <button type="button" class="btn btn-gradient-info waves-effect waves-light"><span>Print</span><i
                                        class="far fa-save ml-3"></i></button>
                                <button class="btn btn-gradient-primary waves-effect waves-light"><span>Send</span> <i
                                    class="far fa-paper-plane ml-3"></i></button>
                                <button type="button" class="btn btn-gradient-danger waves-effect waves-light "><span>Delete</span><i
                                        class="far fa-trash-alt ml-3"></i></button>
                            </div>
                        </div><!--end form-group-->
                    </form><!--end form-->
                </div><!--end card-->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--start rightbar-->

<!--  Modal content for the above example -->
<div class="modal modal-rightbar fade" tabindex="-1" role="dialog" aria-labelledby="MetricaRightbar" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="MetricaRightbar">Appearance</h5>
                <button type="button" class="btn btn-sm btn-soft-primary btn-circle btn-square" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
            </div>
            <div class="modal-body">
                <!-- Nav tabs -->
                <ul class="nav nav-pills nav-justified mt-2 mb-4" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link active" data-toggle="tab" href="#ActivityTab" role="tab">Activity</a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#TasksTab" role="tab">Tasks</a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#SettingsTab" role="tab">Settings</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active " id="ActivityTab" role="tabpanel">
                        <div class="bg-light mx-n3">
                            <img src="{{ asset( $assetLink . '/images/small/img-1.gif') }}" alt="" class="d-block mx-auto my-4" height="180">
                        </div>
                        <div class="slimscroll scroll-rightbar">
                            <div class="activity">
                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                    </div>
                                    <div class="activity-info-text mb-2">
                                        <div class="mb-1">
                                            <small class="text-muted d-block mb-1">10 Min ago</small>
                                            <a href="#" class="m-0 w-75">Task finished</a>
                                        </div>
                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                    </div>
                                </div>

                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-timer-off bg-soft-pink"></i>
                                    </div>
                                    <div class="activity-info-text mb-2">
                                        <div class="mb-1">
                                            <small class="text-muted d-block mb-1">50 Min ago</small>
                                            <a href="#" class="m-0 w-75">Task Overdue</a>
                                        </div>
                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                        <span class="badge badge-soft-secondary">Design</span>
                                        <span class="badge badge-soft-secondary">HTML</span>
                                    </div>
                                </div>
                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                                    </div>
                                    <div class="activity-info-text mb-2">
                                        <div class="mb-1">
                                            <small class="text-muted d-block mb-1">10 hours ago</small>
                                            <a href="#" class="m-0 w-75">New Task</a>
                                        </div>
                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                    </div>
                                </div>

                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                                    </div>
                                    <div class="activity-info-text mb-2">
                                        <div class="mb-1">
                                            <small class="text-muted d-block mb-1">yesterday</small>
                                            <a href="#" class="m-0 w-75">New Comment</a>
                                        </div>
                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                    </div>
                                </div>
                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                                    </div>
                                    <div class="activity-info-text mb-2">
                                        <div class="mb-1">
                                            <small class="text-muted d-block mb-1">01 feb 2020</small>
                                            <a href="#" class="m-0 w-75">New Lead Meting</a>
                                        </div>
                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                    </div>
                                </div>
                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                    </div>
                                    <div class="activity-info-text mb-2">
                                        <div class="mb-1">
                                            <small class="text-muted d-block mb-1">26 jan 2020</small>
                                            <a href="#" class="m-0 w-75">Task finished</a>
                                        </div>
                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                    </div>
                                </div>
                            </div><!--end activity-->
                        </div><!--end activity-scroll-->
                    </div><!--end tab-pane-->
                    <div class="tab-pane" id="TasksTab" role="tabpanel">
                        <div class="m-0">
                            <div id="rightbar_chart" class="apex-charts"></div>
                        </div>
                        <div class="text-center mt-n2 mb-2">
                            <button type="button" class="btn btn-soft-primary">Create Project</button>
                            <button type="button" class="btn btn-soft-primary">Create Task</button>
                        </div>
                        <div class="slimscroll scroll-rightbar">
                            <div class="p-2">
                                <div class="media mb-3">
                                    <img src="{{ asset( $assetLink . '/images/widgets/project3.jpg') }}" alt="" class="thumb-lg rounded-circle">
                                    <div class="media-body align-self-center text-truncate ml-3">
                                        <p class="text-success font-weight-semibold mb-0 font-14">Project</p>
                                        <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-18">Payment App</h4>
                                    </div><!--end media-body-->
                                </div>
                                <span><b>Deadline:</b> 02 June 2020</span>
                                <a href="javascript: void(0);" class="d-block mt-3">
                                    <p class="text-muted mb-0">Complete Tasks<span class="float-right">75%</span></p>
                                    <div class="progress mt-2" style="height: 4px;">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </a>
                            </div>
                            <hr class="hr-dashed">
                        </div>
                    </div><!--end tab-pane-->
                    <div class="tab-pane" id="SettingsTab" role="tabpanel">
                        <div class="p-1 bg-light mx-n3">
                            <h6 class="px-3">Account Settings</h6>
                        </div>
                        <div class="p-2 text-left mt-3">
                            <div class="custom-control custom-switch switch-primary mb-3">
                                <input type="checkbox" class="custom-control-input" id="auto-color-switch">
                                <label class="custom-control-label" for="auto-color-switch">Auto Change Color</label>
                            </div>

                            <div class="custom-control custom-switch switch-primary mb-3">
                                <input type="checkbox" class="custom-control-input" id="color-switch">
                                <label class="custom-control-label" for="color-switch">Light / Dark</label>
                            </div>

                            <div class="custom-control custom-switch switch-primary mb-3">
                                <input type="checkbox" class="custom-control-input" id="settings-switch1" checked="">
                                <label class="custom-control-label" for="settings-switch1">Auto updates</label>
                            </div>

                            <div class="custom-control custom-switch switch-primary mb-3">
                                <input type="checkbox" class="custom-control-input" id="settings-switch2">
                                <label class="custom-control-label" for="settings-switch2">Location Permission</label>
                            </div>

                            <div class="custom-control custom-switch switch-primary mb-3">
                                <input type="checkbox" class="custom-control-input" id="settings-switch3" checked="">
                                <label class="custom-control-label" for="settings-switch3">Show offline Contacts</label>
                            </div>
                        </div>
                        <div class="p-1 bg-light mx-n3">
                            <h6 class="px-3">General Settings</h6>
                        </div>
                        <div class="p-2 text-left mt-3">
                            <div class="custom-control custom-switch switch-primary mb-3">
                                <input type="checkbox" class="custom-control-input" id="settings-switch4" checked="">
                                <label class="custom-control-label" for="settings-switch4">Show me Online</label>
                            </div>

                            <div class="custom-control custom-switch switch-primary mb-3">
                                <input type="checkbox" class="custom-control-input" id="settings-switch5">
                                <label class="custom-control-label" for="settings-switch5">Status visible to all</label>
                            </div>

                            <div class="custom-control custom-switch switch-primary mb-3">
                                <input type="checkbox" class="custom-control-input" id="settings-switch6" checked="">
                                <label class="custom-control-label" for="settings-switch6">Notifications Popup</label>
                            </div>
                        </div>
                    </div><!--end tab-pane-->
                </div> <!--end tab-content-->
            </div><!--end modal-body-->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@section('scripts')
<script src="{{ URL::asset( $assetLink . '/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script>
function initRightbarChart() {
    //Apex-radialbar2
    var options = {
        chart: {
            height: 250,
            type: 'radialBar',
            dropShadow: {
                enabled: true,
                top: 10,
                left: 0,
                bottom: 0,
                right: 0,
                blur: 2,
                color: '#45404a2e',
                opacity: 0.35
            },
        },
        colors: ['#6d81f5', '#fd3c97', '#1eca7b'],
        plotOptions: {
            radialBar: {
                track: {
                    background: '#b9c1d4',
                    opacity: 0.5,
                },
                dataLabels: {
                    name: {
                        fontSize: '16px',
                    },
                    value: {
                        fontSize: '13px',
                        color: '#0f4069',
                    },
                    total: {
                        show: true,
                        label: 'Total Tasks',
                        color: '#0f4069',
                        formatter: function (w) {
                            // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                            return 249
                        }
                    }
                }
            }
        },
        series: [44, 55, 67],
        labels: ['Development', 'Backup Create', 'Admin Design'],

    }
    if (document.querySelector("#rightbar_chart")) {
        var chart = new ApexCharts(
            document.querySelector("#rightbar_chart"),
            options
        );

        chart.render();
    }
}
initRightbarChart();
</script>
@endsection

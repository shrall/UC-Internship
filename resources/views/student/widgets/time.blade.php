<div class="col-12 px-0 mb-2">
    <div class="card border-light shadow-sm">
        <div class="card-body">
            <div class="row d-block d-xl-flex align-items-center">
                <div
                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                    <div class="icon icon-shape icon-md icon-shape-warning rounded mr-4 mr-sm-0">
                        <span class="fas fa-clock"></span>
                    </div>
                    <div class="d-sm-none">
                        <h2 class="h5">Time Remaining</h2>
                        <h3 class="mb-1">{{Auth::user()->info->time_remaining}}</h3>
                    </div>
                </div>
                <div class="col-12 col-xl-7 px-xl-0">
                    <div class="d-none d-sm-block">
                        <h2 class="h5">Time Remaining</h2>
                        <h3 class="mb-1">{{Auth::user()->info->time_remaining}} hours</h3>
                    </div>
                    <div class="small mt-2">
                        <span class="fas fa-calendar-day text-danger"></span>
                        <span class="text-danger font-weight-bold">{{ date("jS F Y", strtotime($currentperiod->end)) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

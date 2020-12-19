<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h4"><i class="fas fa-clipboard-list"></i> Projects This Semester</h2>
                    </div>
                    <div class="col text-right">
                        <a href={{route('admin.project.index')}} class="btn btn-sm btn-secondary">See all</a>
                    </div>
                </div>
            </div>
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-0">Project Categories</th>
                            <th class="border-0 text-info"><span class="fa fa-thumbs-up"></span> Available</th>
                            <th class="border-0 text-warning"><span class="fa fa-clock"></span> Ongoing</th>
                            <th class="border-0 text-success"><span class="fas fa-check"></span> Completed</th>
                            <th class="border-0 text-danger"><span class="fa fa-times"></span> Suspended</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Item -->
                        <tr>
                            <td><span class="fas fa-calendar-week"></span> Event</td>
                            <td>{{count($projects->where('status', 0)->where('category', 0))}} Projects</td>
                            <td>{{count($projects->where('status', 1)->where('category', 0))}} Projects</td>
                            <td>{{count($projects->where('status', 2)->where('category', 0))}} Projects</td>
                            <td>{{count($projects->where('status', 3)->where('category', 0))}} Projects</td>
                        </tr>
                        <!-- Item -->
                        <tr>
                            <td><span class="fas fa-school"></span> Education</td>
                            <td>{{count($projects->where('status', 0)->where('category', 1))}} Projects</td>
                            <td>{{count($projects->where('status', 1)->where('category', 1))}} Projects</td>
                            <td>{{count($projects->where('status', 2)->where('category', 1))}} Projects</td>
                            <td>{{count($projects->where('status', 3)->where('category', 1))}} Projects</td>
                        </tr>
                        <!-- Item -->
                        <tr>
                            <td><span class="fas fa-question-circle"></span> Other</td>
                            <td>{{count($projects->where('status', 0)->where('category', 2))}} Projects</td>
                            <td>{{count($projects->where('status', 1)->where('category', 2))}} Projects</td>
                            <td>{{count($projects->where('status', 2)->where('category', 2))}} Projects</td>
                            <td>{{count($projects->where('status', 3)->where('category', 2))}} Projects</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

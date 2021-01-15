<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h4">
                            <span class="fa fa-history mr-2"></span>History
                        </h2>
                    </div>
                </div>
            </div>
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="border-0" width="25px">#</th>
                        <th class="border-0">Duration Before</th>
                        <th class="border-0">Duration After</th>
                        <th class="border-0">Timestamp</th>
                        <th class="border-0">Staff Name</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($student->histories as $history)
                            <!-- Item -->
                            <tr>
                                <td class="font-weight-bold">{{ $loop->iteration }}</td>
                                <td class="font-weight-bold">{{ $history->duration_before }} hours</td>
                                <td class="font-weight-bold">{{ $history->duration_after }} hours</td>
                                <td class="font-weight-bold">{{ $history->created_at }}</td>
                                <td class="font-weight-bold">{{ $history->supervisor->detailable->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- ini card yang ada di offer.blade.php  --}}
{{-- disini include modal.offer, modal.apply  --}}
@include('student.project.modal.apply')
@foreach ($pus as $pu)
<div class="card hover-state border-bottom rounded-0 py-3">
    <div class="card-body d-sm-flex align-items-center flex-wrap flex-lg-nowrap py-0">
        <div class="col-11 col-lg-8 px-0 mb-4 mb-md-0">
            <div class="mb-2">
                <h3>{{ $pu->project->name }}</h3>
                <div class="d-block d-sm-flex mb-2">
                    <div>
                        <h4 class="h6 font-weight-normal text-warning mb-3 mb-sm-0">
                            <span class="fas fa-clock mr-2"></span>{{ $pu->project->deadline }}
                        </h4>
                    </div>
                </div>
                <div class="d-block d-sm-flex mb-2">
                    <div>

                        @if($pu->project->status == "0")
                            <span class="fas fa-clock text-info"></span>
                            <span
                                class="h6 font-weight-normal text-primary mb-3 mb-sm-0 text-info">
                                    Available</span>
                        @endif

                        @if($pu->project->status == "1")
                            <span class="fas fa-clock text-warning"></span>
                            <span
                                class="h6 font-weight-normal text-primary mb-3 mb-sm-0 text-warning">
                                    On Progress</span>
                        @endif

                        @if($pu->project->status == "2")
                            <span class="fas fa-check text-success"></span>
                            <span
                                class="h6 font-weight-normal text-primary mb-3 mb-sm-0text-success">
                                    Completed</span>
                        @endif

                        @if($pu->project->status == "3")
                            <span class="fas fa-ban text-danger"></span>
                            <span
                                class="h6 font-weight-normal text-primary mb-3 mb-sm-0 text-danger">
                                    Suspended</span>
                        @endif

{{--                        <h4 class="h6 font-weight-normal text-primary mb-3 mb-sm-0">--}}
{{--                            <span class="fas fa-calendar-week mr-2"></span> {{ $pu->project->category }}--}}
{{--                        </h4>--}}
                    </div>
                </div>
                <div class="d-block d-sm-flex mb-2">
                    <div>
                        <h4 class="h6 font-weight-normal text-primary mb-3 mb-sm-0">
                            <span class="fas fa-user-shield mr-2"></span>{{ $pu->project->supervisor->name }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="col-10 col-sm-2 col-lg-2 col-xl-2 d-none d-lg-block d-xl-inline-flex align-items-center ml-lg-auto text-right justify-content-end px-md-0">
            <div class="mr-lg-3">
                <a href="#" class="btn btn-secondary text-dark" data-toggle="modal" data-target="#modal-apply-1">
                    <span class="fas fa-share-square mr-2"></span>
                    <span>Apply</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach

<script>
    function searchOffer() {
        var input = document.getElementById("searchoffer");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('card');

        for (i = 0; i < nodes.length; i++) {
            if (nodes[i].innerText.toLowerCase().includes(filter)) {
                nodes[i].style.display = "block";
            } else {
                nodes[i].style.display = "none";
            }
        }
    }
</script>

{{-- ini yang nunjukin mukanya student with edit profile button --}}
{{-- tambahin check history(ini belum ada di uastemplate. check bagian admin uastemplate) --}}
{{-- tambahin export di deketnya edit sm history juga  --}}

<div class="col-12 col-xl-4">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card border-light text-center p-0">
                <div class="profile-cover rounded-top"
                     data-background="{{ asset('assets/img/profile-cover.jpg') }}"
                     style="height: 146.5px"></div>
                <div class="card-body pb-3"><img
                        src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                        class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait"
                        style="height: 8rem; width: 8rem; min-height: 8rem; min-width: 8rem">
                    <h4 class="h3">Marshall Ovierdo Kurniawan</h4>
                    <h5 class="font-weight-normal">Student</h5>
                    <p class="text-gray mb-3">Informatics (IMT)</p>
                    <a class="btn btn-sm btn-primary" href="{{ route('student.user.edit', 1) }}">
                        <span class="fa fa-edit"></span> Edit Profile
                    </a>
                    <a class="btn btn-sm btn-secondary" href="{{route('admin.history.index')}}">
                        <span class="fa fa-history"></span> Time History
                    </a>
                </div>
            </div>
            @include('student.student.card.cv')
        </div>
    </div>
</div>

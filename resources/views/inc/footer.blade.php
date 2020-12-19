<footer class="footer section py-5">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            @if(Auth::user()->isAdmin())
            <p class="mb-0 text-center text-xl-left h6">Admin | UC Internship</p>
            @endif
            @if(Auth::user()->isSupervisor())
            <p class="mb-0 text-center text-xl-left h6">Supervisor | UC Internship</p>
            @endif
            @if(Auth::user()->isStudent())
            <p class="mb-0 text-center text-xl-left h6">Student | UC Internship</p>
            @endif
        </div>
        <div class="col-12 col-lg-6">
            <ul class="list-inline list-group-flush list-group-borderless text-center text-xl-right mb-0 small">
                <span class="fas fa-sun"></span> Join us in living life on the bright side.
            </ul>
        </div>
    </div>
</footer>

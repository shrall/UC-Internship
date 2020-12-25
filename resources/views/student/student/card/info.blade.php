{{-- ini yang nunjukin general information dari student  --}}
<div class="card card-body bg-white border-light shadow-sm mb-4">
    <h2 class="h5 mb-4">General information</h2>
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <div>
                <label for="full_name">Full Name</label>
                <input class="form-control" id="full_name" type="text" placeholder="Enter your first name"
                       value="Marshall Ovierdo Kurniawan" required>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="phone"><span class="fab fa-whatsapp"></span> Phone Number</label>
            <input class="form-control" id="phone" type="number" placeholder="Phone Number"
                   value="081233129966" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="email"><span class="fa fa-map-marker-alt"></span> Address</label>
            <input class="form-control" id="address" type="text" placeholder="Enter your home address"
                   value="CitraLand CBD Boulevard, Surabaya, East Java" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="email"><span class="fa fa-book"></span> Scholarship</label>
            <select class="form-select w-100 mb-0" id="scholarship" name="scholarship"
                    aria-label="Scholarship select example">
                <option value="iddarischolarshipnya" selected="selected">Beasiswa Sosial Ekonomi (A)
                </option>
                <option value="iddarischolarshipnya">Beasiswa Sosial Ekonomi (B)</option>
                <option value="iddarischolarshipnya">Beasiswa Sosial Ekonomi (C)</option>
                <option value="iddarischolarshipnya">Beasiswa Sosial Ekonomi (D)</option>
                <option value="iddarischolarshipnya">Beasiswa Prestasi Unggulan (A)</option>
                <option value="iddarischolarshipnya">Beasiswa Prestasi Unggulan (B)</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="department"><span class="fa fa-building"></span> Department</label>
            <select class="form-select w-100 mb-0" id="department" name="department"
                    aria-label="Department select example">
                <option value="iddaridepartmentnya" selected="selected">Informatics (IMT)
                </option>
                <option value="iddaridepartmentnya">Information System for Business (ISB)</option>
                <option value=iddaridepartmentnya">Culinary Business (CB)</option>
                <option value="iddaridepartmentnya">Hotel Tourism and Business (HTB)</option>
                <option value="iddaridepartmentnya">International Business and Management - Regular Class
                    (IBM-RC)</option>
                <option value="iddaridepartmentnya">International Business and Management - International
                    Class (IBM-IC)</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="title"><span class="fa fa-user-edit"></span> Title</label>
            <input class="form-control" id="title" type="text" placeholder="Title" value="Student" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <h2 class="h5 mb-4">Select profile photo</h2>
            <div class="d-xl-flex align-items-center">
                <div class="file-field">
                    <div class="d-flex justify-content-xl-center ml-xl-3">
                        <div class="d-flex">
                                <span class="icon icon-md">
                                    <span class="fas fa-paperclip mr-3"></span>
                                </span>
                            <input type="file">
                            <div class="d-md-block text-left">
                                <div class="font-weight-normal text-dark mb-1" id="pp-name">Choose Image</div>
                                <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <h2 class="h5 mb-4">Portfolio and CV</h2>
            <div class="d-xl-flex align-items-center">
                <div class="file-field">
                    <div class="d-flex justify-content-xl-center ml-xl-3">
                        <div class="d-flex">
                                <span class="icon icon-md">
                                    <span class="fas fa-file-pdf mr-3"></span>
                                </span>
                            <input type="file">
                            <div class="d-md-block text-left">
                                <div class="font-weight-normal text-dark mb-1" id="pp-name">Choose File</div>
                                <div class="text-gray small">PDF Max size of 800K</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </div>
</div>

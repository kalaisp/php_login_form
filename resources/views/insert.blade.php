@include('templates.css_header')
@include('templates.admin.staff')
<main id="main" class="main">
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <div class="card">
        <div class="card-header ">
            <div class="col-md-12 d-flex p-0">
                <div class="col-md-8 pl-0">
                    {{-- <h5 class="mb-0"><span class="text-primary">{{ $posData->pos_name }}</span> - Create New User</h5> --}}
                </div>
                <div class="col-md-4 text-right pr-0">
                    <a href="javascript:history.back()"><button class="btn btn-sm btn-info">Back</button></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form name="myForm" action="{{ route('insert.submit') }}" onsubmit="return validate()" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12 p-0 d-md-flex">
                        <div class="col-md-8  ">
                            <div class="form-group d-flex">
                                <label for="name" class="col-md-3 p-0">Name:</label>
                                <input type="text" name="name" class="form-control form-control-sm " ><br>
                            </div>
                            <div class="form-group d-flex">
                                <label for="dateofbirth"class="col-md-3 p-0">Date of Birth:</label>
                                <input type="date"class="form-control form-control-sm " name="dateofbirth" ><br>
                                @error('dateofbirth') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="form-group d-flex">
                                <label for="address" class="col-md-3 p-0">Address:</label>
                                <input type="text"class="form-control form-control-sm " name="address" ><br>
                                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            <div class="form-group d-flex">
                                <label for="mobileno"class="col-md-3 p-0">Mobile No:</label>
                                <input type="text" class="form-control form-control-sm" name="mobileno" ><br>
                                @error('mobileno') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        </div>


                </div>
                <div class="col-md-9 text-center">
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>

@include('templates.admin.footer')
@include('templates.js_footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
<script>

    document.addEventListener("DOMContentLoaded", () => {
    const closeBtn = document.getElementById("closeBtn");
    const sidebar = document.querySelector(".sidebar");
    const navList = document.querySelector(".nav-list");
    sidebar.classList.add("open");
    navList.classList.add("scroll");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        navList.classList.toggle("scroll");
        menuBtnChange();
    });
});
function menuBtnChange() {
 }
 function validate() {
        debugger;
            let name = document.forms["myForm"]["name"].value;
            let dateofbirth = document.forms["myForm"]["dateofbirth"].value;
            let address = document.forms["myForm"]["address"].value;
            let mobileno = document.forms["myForm"]["mobileno"].value;

            // Validate Name
            if (name == "") {
                alert("Name must be filled out");
                return false;
            }

            // Validate Date of Birth
            if (dateofbirth == "") {
                alert("Date of Birth must be filled out");
                return false;
            }

            // Validate Address
            if (address == "") {
                alert("Address must be filled out");
                return false;
            }

            // Validate Mobile Number
            if (mobileno == "") {
                alert("Mobile Number must be filled out");
                return false;
            }

            // Optional: Mobile number should contain only digits and have a certain length (e.g., 10 digits)
            var phonePattern = /^[0-9]{10}$/;
            if (!phonePattern.test(mobileno)) {
                alert("Please enter a valid 10-digit mobile number");
                return false;
            }

            // If all validations pass
            return true;
        }
</script>

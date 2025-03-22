@include('templates.css_header')
@include('templates.admin.header')

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
        <form action="{{ route('editemp.submit',$member->id) }}"onsubmit="return validate()" name="myForm" method="POST">    @csrf
            @csrf
            @method('PUT')
            <div class="row ">
                    <div class="col-md-12 p-0 d-flex">
                        <div class="col-md-6 pt-1">
                            <div class="form-group d-flex">
                                <label for="emp_name"class="col-md-3 p-md-0">Emp Name:</label>
                                <input type="text" class="form-control form-control-sm"value="{{ old('name', $member->emp_name) }}" name="emp_name"><br>
                                @error('emp_name') <span class="text-danger">{{ $message }}</span> @enderror
                                {{--
                                <label for="pos_name" class="col-md-3 p-md-0">POS Name :</label>
                                <input class="form-control form-control-sm" type="text" name="pos_name" required> --}}
                            </div>
                            <div class="form-group d-flex">
                                <label for="phone" class="col-md-3 p-md-0">Phone:</label>
                                <input type="text" class="form-control form-control-sm" value="{{ old('phone', $member->phone) }}" name="phone" ><br>
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                {{-- <label for="contact_person" class="col-md-3 p-md-0">Contact Person :</label>
                                <input class="form-control form-control-sm" type="text" name="contact_person" required> --}}
                            </div>
                            <div class="form-group d-flex">
                                <label for="address"class="col-md-3 p-md-0">Address:</label>
                                <textarea id="w3review" name="address" rows="4" cols="50"  class="form-control form-control-sm" >{{ old('address', $member->address) }}</textarea>
                                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                {{-- <label for="email_id" class="col-md-3 p-md-0">Email ID :</label>
                                <input class="form-control form-control-sm" type="email" name="email_id" required> --}}
                            </div>
                            <div class="form-group d-flex">
                                <p>Gender:</p>
                                <div class="radio-group">
                                    <label class="radio-label">
                                        <input type="radio" id="male" name="gender" value="Male" {{ old('gender', $member->gender) == 'Male' ? 'checked' : '' }}> Male
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" id="female" name="gender" value="Female" {{ old('gender', $member->gender) == 'Female' ? 'checked' : '' }} > Female
                                    </label>
                                </div>
                                @error('gender') <span class="text-danger">{{ $message }}</span> @enderror

                                {{-- <label for="contact_no" class="col-md-3 p-md-0">Contact No :</label>
                                <input class="form-control form-control-sm" type="text" pattern="\d{10}" maxlength="10" name="contact_no" required> --}}
                            </div>

                        </div>
                        <div class="col-md-6 pt-1">
                            <div class="form-group d-flex">
                                <label for="email"class="col-md-3 p-md-0">Email:</label>
                                <input type="email" name="email"class="form-control form-control-sm" value="{{ old('email', $member->email) }}"><br>
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror

                                {{-- <label for="pos_gstin" class="col-md-3 p-md-0">GSTIN :</label>
                                <input class="form-control form-control-sm" type="text" name="pos_gstin" required> --}}
                            </div>
                            <div class="form-group d-flex">
                                <label for="state"  class="col-md-3 p-md-0">State:</label>

                                    <select name="state" id="state" class="form-control form-control-sm select2" value="{{ old('name', $member->state) }}">
                                        <option selected="selected" value="0">--Select State--</option>
                                        <option value="bangalore" {{ old('state', $member->state) == 'bangalore' ? 'selected' : '' }}>Bangalore</option>
                                        <option value="chennai"{{ old('state', $member->state) == 'chennai' ? 'selected' : '' }}>Chennai</option>
                                        <option value="madurai"{{ old('state', $member->state) == 'madurai' ? 'selected' : '' }}>Madurai</option>
                                        <option value="theni"{{ old('state', $member->state) == 'theni' ? 'selected' : '' }}>Theni</option>
                                    </select>

                                @error('state') <span class="text-danger">{{ $message }}</span> @enderror

                                {{-- <label for="country" class="col-md-3 p-md-0">Country :</label>
                                <select name="country" id="country" class="form-control form-control-sm select2" >
                                    <option selected="selected" value="0">--Select Country--</option>
                                    <option value="India">India</option>
                                </select> --}}
                            </div>

                            <div class="form-group d-flex">
                                <label for="salary"class="col-md-3 p-md-0">Salary:</label>
                                <input type="text" name="salary"class="form-control form-control-sm select2"value="{{ old('name', $member->salary) }}"  ><br>
                                @error('salary') <span class="text-danger">{{ $message }}</span> @enderror

                                {{-- <label for="district" class="col-md-3 p-md-0">District :</label>
                                <select name="district" id="district" class="form-control form-control-sm select2">
                                    <option selected="selected" value="0">--Select District--</option>
                                </select> --}}
                            </div>
                            <div class="form-group d-flex">
                                <p>Hobbies:</p>
                                <div class="checkbox-group">
                                    <input type="checkbox" id="hobbies1" name="hobbies[]" value="Reading books"{{ in_array('Reading books', old('hobbies', explode(',', $member->hobbies))) ? 'checked' : '' }}>
                                    <label for="hobbies1">Reading Books</label>
                                </div>
                                <div class="checkbox-group">
                                    <input type="checkbox" id="hobbies2" name="hobbies[]" value="Playing Carrom"{{ in_array('Playing Carrom', old('hobbies', explode(',', $member->hobbies))) ? 'checked' : '' }}>
                                    <label for="hobbies2">Playing Carrom</label>
                                </div>
                                <div class="checkbox-group">
                                    <input type="checkbox" id="hobbies3" name="hobbies[]" value="Cricket" {{ in_array('Cricket', old('hobbies', explode(',', $member->hobbies))) ? 'checked' : '' }}>
                                    <label for="hobbies3">Cricket</label>
                                </div>
                                @error('hobbies') <span class="text-danger">{{ $message }}</span> @enderror

                                {{-- <label for="pos_status" class="col-md-3 p-md-0">Status :</label>
                                <select name="pos_status" id="pos_status" class="form-control form-control-sm select2">
                                    <option selected="selected" value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-sm btn-success">Save</button>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
<script>

$("input:checkbox").on('click', function() {
  var $box = $(this);
  if ($box.is(":checked")) {
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});

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
    debugger
    let emp_name = document.forms["myForm"]["emp_name"].value;
    let email = document.forms["myForm"]["email"].value;
    let address = document.forms["myForm"]["address"].value;
    let mobileno = document.forms["myForm"]["phone"].value;
    let gender = document.forms["myForm"]["gender"].value;
    let state = document.forms["myForm"]["state"].value;
    let salary = document.forms["myForm"]["salary"].value;
if (emp_name == "") {
    alert("Name must be filled out");
    return false;
}
if (mobileno == "") {
    alert("Mobile Number must be filled out");
    return false;
}
var phonePattern = /^[0-9]{10}$/;
if (!phonePattern.test(mobileno)) {
    alert("Please enter a valid 10-digit mobile number");
    return false;
}if (address == "") {
    alert("Address must be filled out");
    return false;
}
var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (email == "") {
        alert("Email must be filled out");
        return false;
    } else if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

if (gender == "") {
    alert("gender Number must be filled out");
    return false;
}if (state == 0) {
    alert("Please select state");
    return false;
}
if (salary == "") {
    alert("salary must be filled out");
    return false;
}
let salaryRegex = /^[0-9]+(\.[0-9]{1,2})?$/;

    if (!salaryRegex.test(salary)) {
        alert("Please enter a valid salary (e.g., 1000 or 1000.50)");
        return false;
    }
    let hobbiesChecked = false;
        let hobbies = document.getElementsByName("hobbies[]");

        for (let i = 0; i < hobbies.length; i++) {
            if (hobbies[i].checked) {
                hobbiesChecked = true;
                break;
            }
        }

        if (!hobbiesChecked) {
            alert("Please select at least one hobby");
            return false;
        }

        return true;
    }
</script>

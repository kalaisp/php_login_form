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
    <div class="card-body">
        <div class="card-header ">
            <div class="col-md-12 d-flex p-0">
                <div class="col-md-8 pl-0">
                    {{-- <h5 class="mb-0"><span class="text-primary">{{ $posData->pos_name }}</span> - Create New User</h5> --}}
                </div>
                <div class="col-md-4 text-right pr-0">
                    <a class="btn btn-sm btn-success move-left" href={{ route('insert.submit') }}>Add Post</a>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="table-responsive"> <!-- Added this for responsiveness of the table -->
                <table id="mytable">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Address</th>
                            <th scope="col">Mobile No</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staff as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->dateofbirth }}</td>
                                <td>{{ $member->address }}</td>
                                <td>{{ $member->mobileno }}</td>
                                <td>
                                    <a href="{{ route('edit.submit', $member->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('delete.submit', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this staff member?');" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
      $(document).ready(function() {
        $('#mytable').DataTable();
    });
    document.addEventListener("DOMContentLoaded", () => {
    // Get elements
    const closeBtn = document.getElementById("closeBtn");
    const sidebar = document.querySelector(".sidebar");
    const navList = document.querySelector(".nav-list");

    // Set the sidebar to be open by default
    sidebar.classList.add("open");
    navList.classList.add("scroll");

    // Toggle function for the button
    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        navList.classList.toggle("scroll");
        menuBtnChange();
    });
});

// Function to change the button (if required, modify as per your button)
function menuBtnChange() {
    // You can add code here to change the button's appearance when clicked (e.g., change icon or text)
}
</script>

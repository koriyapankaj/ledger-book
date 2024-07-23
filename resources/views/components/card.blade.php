<div class="card shadow mb-4">
    <div class="card-header py-3" id="table-card-title">
        <h6 class="m-0 font-weight-bold text-primary">Users</h6>
        <div>
            @can('add user')
            <button class="btn btn-primary" id="addUser" data-toggle="modal" data-target="#userModal"><i class="fas fa-plus"></i></button>
            @endcan

            @can('delete user')
            <button id="delete-selected" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            @endcan
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><input type="checkbox" id="check-all"></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    @can('edit user')
                    <th>Edit</th>
                    @endcan
                    @can('delete user')
                    <th>Delete</th>
                    @endcan
                </tr>
            </thead>
        </table>  
        </div>
    </div>
</div>

<!-- Page level plugins -->
<script src="{{ asset('vendors/datatables/dataTables.js') }}"></script>
<script src="{{ asset('vendors/datatables/dataTables.bootstrap5.js') }}"></script>

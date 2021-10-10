{{View::make('master/header')}}

<div class="container p-5">

    <h3 class="text-center text-warning">Edit notice</h3>
    <table class="table table-striped">
        <thead class="bg-warning text-white">
            <tr>
                <th scope="col">Notice ID</th>
                <th scope="col">Title</th>
                <th scope="col">Department</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Vaccine</td>
                <td>All</td>
                <td>
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Student loan</td>
                <td>All</td>
                <td>
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>



</div>

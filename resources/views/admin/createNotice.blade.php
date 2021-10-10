{{View::make('master/header')}}


    <div class="container p-5">

        <div class="container text-center p-3">
            <h4>Create a notice here</h4>
        </div>


        <form action="/createNotice" method="POST">
            @csrf 
            <h3>
                <textarea class="form-control" id="title" name="title" rows="1" placeholder="Title of the notice"></textarea>
                <br>
                <label for="dept">Department :</label>
                <select class="form-control col-lg-4" id="department" name="department">
                    <option value="ICT">ICT</option>
                    <option value="ICT">CSE</option>
                    <option value="TE">TE</option>
                    
                    <option value="All">All</option>
                </select>
                <br>
            </h3>

            <h3>Description :</h3>
            <textarea class="form-control" id="description" name="description" rows="12"></textarea>
            <br>
            <button class="btn btn-success" type="submit">Send Notice</button>
        </form>


    </div>


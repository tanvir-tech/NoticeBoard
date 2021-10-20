{{View::make('master/header')}}


    <div class="container p-5">

        <div class="container text-center p-3">
            <h4>Create a notice here</h4>
        </div>


        <form action="/createNotice" method="POST" enctype="multipart/form-data">
            @csrf 
            <h3>
                <textarea class="form-control" id="title" name="title" rows="1" placeholder="Title of the notice"></textarea>
                <br>
                <label for="dept">Target Department :</label>
                <select class="form-control col-lg-4" id="department" name="department">
                    <option value="ICT">ICT</option>
                    <option value="CSE">CSE</option>
                    <option value="TE">TE</option>
                    <option value="ESRM">ESRM</option>
                    <option value="CPS">CPS</option>
                    <option value="FTNS">FTNS</option>
                    <option value="BGE">BGE</option>
                    <option value="Pharmacy">Pharmacy</option>
                    <option value="BMB">BMB</option>
                    <option value="BBA">BBA</option>
                    <option value="Management">Management</option>
                    <option value="Accounting">Accounting</option>
                    <option value="Math">Math</option>
                    <option value="Physics">Physics</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Statistics">Statistics</option>
                    <option value="Economics">Economics</option>
                    <option value="English">English</option>
                    <option value="All">All</option>
                </select>
             
<br>
            </h3>

            <h3>Description :</h3>
            <textarea class="form-control" id="description" name="description" rows="12"></textarea>
            <br>
            {{-- file  --}}
            <label for="noticefile">Select a file:</label>
            <input type="file" id="noticefile" name="noticefile">
            
            <button class="btn btn-success" type="submit">Send Notice</button>
        </form>


    </div>

    {{View::make('master/footer')}}
{{View::make('master/header')}}


        <div class="container">
    
            <div class="container p-5 text-center">
                Welcome 
                <br> to
                <br> Department of
                <h3>
                    {{Session::get('user')['department']}}
                </h3>
            </div>
    
    
    
            <div class="container p-5">
                <h4 class="text-center text-info" id="noticeTitle" name="noticeTitle">
                    বিজ্ঞপ্তি
                </h4>
                <p id="generalNotice" id="noticeDescription" name="noticeDescription">
                    THERE IS NO NOTICE AT THE MOMENT..!
                </p>
            </div>
    
    
        </div>
    
 
{{View::make('master/header')}}


        <div class="container">
    
            <div class="container p-5 text-center">
                Welcome 
                <br> to
                <br> Department of
                <h3>
                    {{$notices[0]['department']}}
                </h3>
            </div>
    

    
            @foreach ($notices as $notice)

            <div class="container p-5">
                <h3 class="text-center text-info" id="noticeTitle" name="noticeTitle">
                    {{$notice['title']}}
                </h3>
                <h6 class="text-center text-info" id="noticeOwner" name="noticeOwner">
                    From : {{$notice['ownerName']}},{{$notice['ownerType']}}
                    <br>
                    Time : {{$notice['created_at']}}
                </h6>
                <p id="generalNotice" id="noticeDescription" name="noticeDescription">
                    {{$notice['description']}}
                </p>
            </div>
        
            @endforeach
        
    
    
        </div>
    
        {{View::make('master/footer')}}
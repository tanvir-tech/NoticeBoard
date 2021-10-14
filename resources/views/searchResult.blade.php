{{View::make('master/header')}}


        <div class="container">
    
            <div class="container p-5 text-center">
                
                <h3>
                    Search result
                </h3>
            </div>
    
    
    
            @foreach ($notices as $notice)

            From : {{$notice['ownerName']}},{{$notice['ownerType']}}
            <br>
            Time : {{$notice['created_at']}}

            <br>
            <div class="container p-5">
                <h4 class="text-center text-info" id="noticeTitle" name="noticeTitle">
                    {{$notice['title']}}
                </h4>
                <p id="generalNotice" id="noticeDescription" name="noticeDescription">
                    {{$notice['description']}}
                </p>
            </div>
        
            @endforeach
    
    
        </div>
    
 
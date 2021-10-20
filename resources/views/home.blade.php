{{View::make('master/header')}}


    <div class="container text-warning p-3">
        <marquee width="100%" direction="left" height="40px" scrollamount="5">
            <h4>
                করোনা ঝুঁকি যাচাই করতে ৩৩৩ বা *৩৩৩২# ডায়াল করুন। ভিজিট করুন corona.gov.bd অথবা ডাউনলোড করুন CoronaBD
                অ্যাপ। ৩৩৩ নম্বরে অপ্রয়োজনে কল করা থেকে বিরত থাকুন।
            </h4>
        </marquee>
    </div>

    @foreach ($notices as $notice)

    <div class="container p-5">
        <h3 class="text-center text-info" id="noticeTitle" name="noticeTitle">
            {{$notice['title']}}
        </h3>
        <h6 class="text-center text-info" id="noticeOwner" name="noticeOwner">
            From : {{$notice['ownerName']}},{{$notice['ownerType']}}
            <br><br>
            {{$notice['created_at']}}
        </h6>
        <br>
        <p id="generalNotice" id="noticeDescription" name="noticeDescription">
            {{$notice['description']}}
        </p>
        file : 
        {{$notice['fileName']}}
    </div>

    @endforeach

    {{View::make('master/footer')}}
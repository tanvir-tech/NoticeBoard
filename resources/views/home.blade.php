{{View::make('master/header')}}


    <div class="container text-warning p-3">
        <marquee width="100%" direction="left" height="40px" scrollamount="5">
            <h4>
                করোনা ঝুঁকি যাচাই করতে ৩৩৩ বা *৩৩৩২# ডায়াল করুন। ভিজিট করুন corona.gov.bd অথবা ডাউনলোড করুন CoronaBD
                অ্যাপ। ৩৩৩ নম্বরে অপ্রয়োজনে কল করা থেকে বিরত থাকুন।
            </h4>
        </marquee>
    </div>


    <div class="container p-5">
        <h4 class="text-center text-info">
            সাধারণ বিজ্ঞপ্তি
        </h4>
        <p id="generalNotice">
            মাওলানা ভাসানী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের শিক্ষক, কর্মকর্তা ও কর্মচারীদের অবগতির জন্য জানানো যাচ্ছে
            যে, গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের অর্থ মন্ত্রণালয়ের অর্থ বিভাগ কর্তৃক জারিকৃত ‘‘পাবলিক বিশ্ববিদ্যালয় ও
            বিশ্ববিদ্যালয় মঞ্জুরী কমিশনের শিক্ষক, কর্মচারীদের জন্য ব্যাংকিং ব্যবস্থার মাধ্যমে গৃহ নির্মাণ ঋণ
            নীতিমালা-২০১৯’’-এর আওতায় ৪% হারে গৃহ নির্মাণ ঋণ প্রদানের লক্ষ্যে যাবতীয় প্রস্তুতিকাজ ইতোমধ্যে সম্পন্ন হয়েছে
            মর্মে রূপালী ব্যাংক লিঃ, টাঙ্গাইল কর্পোরেট শাখা জানিয়েছেন।
            <br>
            এমতাবস্থায় ৪% হারে গৃহ নির্মাণ ঋণ নিতে আগ্রহী শিক্ষক/কর্মকর্তা/কর্মচারীদের নির্ধারিত আবেদনপত্রের (নিম্নে
            সংযুক্ত) মাধ্যমে আবেদন করার জন্য নির্দেশক্রমে অনুরোধ করা হয়েছে।
        </p>
    </div>

    
    @foreach ($notices as $notice)

    <div class="container p-5">
        <h4 class="text-center text-info" id="noticeTitle" name="noticeTitle">
            {{$notice['title']}}
        </h4>
        <p id="generalNotice" id="noticeDescription" name="noticeDescription">
            {{$notice['description']}}
        </p>
    </div>

    @endforeach




    {{-- @yield('content') --}}
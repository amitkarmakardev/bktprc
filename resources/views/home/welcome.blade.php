@extends('layout.layout')

@section('subcontent')
    <div id="banner">
    </div>
    <div class="container main-container">
        <div class="row">
            <div class="col-md-2">
                @include('layout.sidemenu')
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-9">
                    <div class="article row">
                        <div class="col-md-8"><span class="subject"><i class="fa fa-bookmark" style="color: #887fd1"></i>&nbsp; The Man Who Knew: The Life and Times of Alan Greenspan by Sebastian Mallaby</span></div>
                        <div class="col-md-4"><span class="time pull-right">3 minutes ago</span></div>
                        <div class="col-md-12"><hr></div>
                        <div class="col-md-12 content">
                            <p>I agree that Sebastian Mallaby’s detailed and well-sourced The Man Who Knew: The Life and Times of Alan Greenspan, will be essential for every future economic historian studying the Greenspan era. That said, Mallaby does not convey to his readers a sound understanding of monetary policy. I disagree with Mallaby’s claim that Greenspan could and should have done something about the housing and subprime mortgage bubbles. Peter Wallison makes a strong case that the affordable housing quotas did not just “encourage” but forced the GSEs to buy subprime mortgages. Information available in real time on aggregate subprime mortgage issuance was seriously flawed because the GSEs did not report accurately. Greenspan cannot be held responsible for the GSEs hiding the subprime debt on their balance sheets. These mortgages were central to the crisis. It seems improbable that any monetary policy mistake of 2001–05 was large enough to create the crisis. Mallaby could have written a final chapter emphasizing the Maestro resisting the power of a malign and evil pair of GSEs and the power of the President and Congress of the United States pursuing a disastrous housing policy. Despite the Maestro’s best efforts, Leviathan triumphed and brought ruin upon the Nation.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box notice-box">
                            <h4> <i class="fa fa-pencil-square-o"></i> Notice</h4>
                            <hr>
                            <a href="#">Online quiz result <br> May 2017</a>
                            <a href="#">Online application for badminton, volleyball</a>
                            <a href="#"> অনলাইন কুইজ প্রতিযোগিতা</a>
                        </div>
                        <div class="box birthday-box">
                            <h4><i class="fa fa-birthday-cake"></i> Birthdays</h4>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
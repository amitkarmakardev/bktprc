@extends('layout.layout')

@section('subcontent')
    <div class="row">
        <div class="col-md-9">
            <div class="content">
                <h4>The Township</h4>
                <hr>
                <p>Connected to major cities of West Bengal by the NH60, Bakreswar Thermal Power Plant Township is
                    home to more than 800 BKTPP employees and their family members.
                </p>
                <p>Covered in lush greenery, the BKTPP township is quiet and serene. Far from the usual fast-paced
                    and noisy life, the township offers you relaxed and comfortable life, surrounded by
                    nature. If you are a city lover, you will definitely miss the traffic and the crowd here, for the
                    environment is a complete opposite. You would find empty roads, green trees covered with multicolor
                    flowers on them scattered here and there.
                </p>
                <p>However, the township is also equipped with modern facilities. Electricity and water is available
                    24*7 here. It also has departmental store for daily commodities, a market, a post office, a huge
                    auditorium with 1200 seat capacity, clubs, gym, swimming pool, high speed broadband connectivity --
                    everything for a modern and care-free life. A medical unit is present inside the township with
                    qualified resident doctors for meeting the medical needs of the employees.
                </p>
                <br>
                <h4>Recreation</h4>
                <hr>
                <p>There are two big clubs, <a href="{{ url('recreation-club') }}">BKTPP Recreation Club</a> and <a
                            href="{{ url('officers-club') }}">BKTP Officer's Recreation Club</a> for the employees.
                    Both the club organize many activities, such as cultural event, drama, get together party, food
                    festival, trekking and outing etc throughout the year. Both the club organize annual cultural
                    program where many renowned celebrity has already performed. Apart from this, during the first week
                    of January, BKTPP Rural and Industrial Fair is organized.
                </p>
                <br>
                <h4>Connectivity</h4>
                <hr>
                <p>BKTPP Township is well connected by NH60 with cities like Suri, Baharampur, Durgapur, Asansol etc. SBSTC
                    and NBSTC buses halt at Kochujore bustand near the Township Gate - 2. There are local buses also. Besides
                    BKTPP authority provides bus from township to Suri and back in regular basis.
                </p>
                <p>Trains which runs between Howrah and Suri, can be availed to reach the township.</p>
            </div>
        </div>
        <div class="col-md-3">
            @include('layout.right-pane')
        </div>
    </div>
@stop
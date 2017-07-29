@extends('layout.layout')

@section('subcontent')
    <div class="row">
        <div class="col-md-9">
            <div class="content">
                <h4>Connectivity</h4>
                <hr>
                <p style="font-weight: bold">Road</p>
                <p>BKTPP Township is well connected by NH60 with cities like Suri, Baharampur, Durgapur, Asansol etc.
                    SBSTC and NBSTC buses halt at Kochujore busstand near the Township Gate 2. You can also avail local
                    buses that runs through the locality.
                </p>
                <p>Buses from Kolkata to Suri</p>
                <table class="table table-bordered">
                    <tr>
                        <th>Bus</th>
                        <th>Departure time</th>
                        <th>Fare</th>
                        <th>Booking</th>
                    </tr>
                    <tr>
                        <td>Kolkata-Suri/Bakreswar/Tarapith <br><small>(All buses halt at Township)</small></td>
                        <td style="word-break: keep-all">5:30AM, 6:30 AM, 7:30 AM, <br> 11:00 AM, 12:00 PM, 1:00 PM,
                            <br>2:00 PM, 3:00 PM, 5:00 PM</td>
                        <td>140</td>
                        <td><a target="_blank" href="http://online.sbstcbooking.co.in">Online</a></td>
                    </tr>
                </table>
                <p style="font-weight: bold">Train</p>
                <p>Trains which runs between Howrah and Suri, can be availed to reach the township.</p>
                <table class="table table-bordered">
                    <tr>
                        <th>Train</th>
                        <th>Leaving Station</th>
                        <th>Timing</th>
                        <th>Arriving Station</th>
                    </tr>
                    <tr>
                        <td>Hool Express</td>
                        <td>Howrah</td>
                        <td>6:45 AM</td>
                        <td>Suri</td>
                    </tr>
                    <tr>
                        <td>Mayurakshi Fast Passenger</td>
                        <td>Howrah <br><small>(Generally Platform no 6 )</small></td>
                        <td>4:25 PM</td>
                        <td>Kochujore</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@stop
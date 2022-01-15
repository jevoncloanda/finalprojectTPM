<section id="payment">
    <section id="team">
        <h1>Approval List</h1>
        <img class="_line_" src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
        <div class="team-members">
            @foreach ($users as $user)
                <div class="member-1">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/profile-pfp.png')}}" alt="">
                    </div>
                    <div class="member-text">
                        <h3>{{$user->group_name}}</h3>
                        <h3>Leader : {{$user->leader_name}}</h3>
                    </div>
                    <button onclick="openForm()"><img src="{{asset('Assets/Dashboard Icon/view.png')}}" alt=""></button>
                </div>
                {{-- <div class="member-2">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/pfp-female.png')}}" alt="">
                    </div>
                    <div class="member-text">
                        <h3>Brooklyn Visions</h3>
                        <h3>Leader : Miles Morales</h3>
                    </div>
                    <button onclick="openForm()"><img src="{{asset('Assets/Dashboard Icon/view.png')}}" alt=""></button>
                </div> --}}
            @endforeach
        </div>
    </section>
</section>

<section id="pay-approved">
    <section id="team">
        <h1>Approval List</h1>
        <img class="_line_" src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
        <div class="pay-success">
            <img src="{{asset('Assets/Dashboard Icon/success.png')}}" alt="">
            <h1>All payments have been approved</h1>
            <p>There are no recent payment updates currently.</p>
        </div>
    </section>
</section>

<div class="receipt-popup" id="myForm">
    <section id="pay-popup">
        <div class="pay-popup2">
            <img onclick="closeForm()" src="{{asset('Assets/Home/close-form.png')}}" alt="">
            <div class="receipt">
                <img src="{{asset('Assets/Dashboard Icon/receipt.png')}}" alt="">
            </div>
            <div class="acc">
                <button><img src="{{asset('Assets/Dashboard Icon/reject.png')}}" alt=""></button>
                <button><img src="{{asset('Assets/Dashboard Icon/accept.png')}}" alt=""></button>
            </div>
        </div>
    </section>
</div>

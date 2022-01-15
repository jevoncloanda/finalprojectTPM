            <section id="team">
                <h1>Team Members</h1>
                <img class="_line_" src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
                <div class="test">
                    <div class="team-name">
                        <h1>Team Members</h1>
                        <span class="verif-span">BINUSIAN</span>
                        <p class="verif">Verified</p>
                    </div>
                    <div class="team-members">
                        <div class="member-1">
                            <div>
                                <img src="{{asset('Assets/Dashboard Icon/profile-pfp.png')}}" alt="">
                            </div>
                            <div class="member-text">
                                <h3>{{$user->leader_name}}</h3>
                                <h3>Team Leader</h3>
                            </div>
                            <a href="{{route('viewLeaderData', ['id'=>$user->id])}}"><img src="{{asset('Assets/Dashboard Icon/ellipse-arrow.png')}}" alt=""></a>
                        </div>
                        @foreach ($members as $member)
                        <div class="member-2">
                            <div>
                                <img src="{{asset('Assets/Dashboard Icon/pfp-female.png')}}" alt="">
                            </div>
                            <div class="member-text">
                                <h3>{{$member->name}}</h3>
                                <h3>Team Member</h3>
                            </div>
                            <a href="{{route('viewMemberData',['id'=>$member->id])}}"><img src="{{asset('Assets/Dashboard Icon/ellipse-arrow.png')}}" alt=""></a>
                        </div>
                        @endforeach
                    </div>
                    <form action="{{route('deleteTeam', ['id'=>$user->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <button class="delete" type="submit"><img src="{{asset('Assets/Dashboard Icon/delete.png')}}" alt=""></button>
                    </form>
                </div>
            </section>

<section id="participant">
    <div class="part-left">
        <form action="{{route('updateMemberData', ['id'=>$member->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <?php
                use App\Models\User;
                $leader = User::where('id',$member->group_id)->get();
            ?>
            <div>
                <div>
                    <h1>Member Edit Panel :</h1>
                <div>
                    <div>
                        <label for="name">Full Name :</label>
                        <input type="text" name="name" id="name" value="{{$member->name}}">

                        <label for="place">Place of Birth :</label>
                        <input type="text" name="birth_place" id="place" value="{{$member->birth_place}}">

                        <label for="role">Role :</label>
                        <label for="role">Team Member</label>

                        <label for="team">Team :</label>
                        <label for="team">{{$leader->group_name}}</label>
                    </div>
                    <div>
                        <img class="square-delete" src="{{asset('Assets/Dashboard Icon/square-img.png')}}" alt="">
                        <img class="delete" src="{{asset('Assets/Dashboard Icon/delete.png')}}" alt="">

                        <label for="date">Date of Birth :</label>
                        <input type="text" name="birth_date" id="date" value="{{$member->birth_place}}">

                        <label for="type">Reg Type :</label>
                        <label for="type">{{$leader->status}}</label>
                    </div>
                    <div>
                    </div>
                </div>
                <br>
                <h1>Social Media :</h1>
                <div>
                    <div>
                        <label for="email">Email :</label>
                        <input type="text" name="email" id="email" value="{{$member->email}}">

                        <label for="line">Line :</label>
                        <input type="text" name="line_id" id="line" value="{{$member->line_id}}">
                    </div>
                    <div>
                        <label for="wa">Whatsapp :</label>
                        <input type="text" name="wa_number" id="wa" value="{{$member->wa_number}}">

                        <label for="git">Github :</label>
                        <input type="text" name="github" id="git" value="{{$member->github}}">
                    </div>
                </div>
            </div>
            <div class="buttons">
                <button class="buttons-b"><label for="upload-cv">CV</label></button>
                <button class="buttons-b"><label for="upload-flazz">Flazz</label></button>

                <input class="upload-input" type="file" style="visibility: hidden;" name="CV" id="upload-cv" accept="image/png, image/gif, image/jpeg, application/pdf" onchange="validateFileType()">
                <input class="upload-input" type="file" style="visibility: hidden;" name="card" id="upload-flazz" accept="image/png, image/gif, image/jpeg, application/pdf" onchange="validateFileType()">

            </div>
            <label for="edit-docs">Accept this changes?</label>
            <div>
                <button class="edit-submit" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>

    <div class="part-right">
        <section id="team-edit">
            <div>
                <h1>Team Edit Panel :</h1>
            </div>
            <div class="team-info">
                <div>
                    <span>1</span>
                </div>
                <div>
                    <img src="{{asset('Assets/Dashboard Icon/square-img.png')}}" alt="">
                </div>
                <div>
                    <p>Name :</p>
                    <h1>Steven Nathaniel</h1>
                    <p>Status : Team Leader</p>
                    <button>Edit Profile</button>
                </div>
            </div>
            <div class="team-info">
                <div>
                    <span>2</span>
                </div>
                <div>
                    <img src="{{asset('Assets/Dashboard Icon/square-img.png')}}" alt="">
                </div>
                <div>
                    <p>Name :</p>
                    <h1>Aurellia Gita Elysia</h1>
                    <p>Status : Team Member</p>
                    <button>Edit Profile</button>
                </div>
            </div>
        </section>
    </div>

</section>

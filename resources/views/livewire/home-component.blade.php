<link rel="stylesheet" href="{{ asset('/css/style.css') }}">



<header>

    <div class="container">

        <div class="profile">

            <div class="profile-image">

                <img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces" alt="">

            </div>

            <div class="profile-user-settings">

                <h1 class="profile-user-name">({{Auth::user()->name}})</h1>

                <button class="btn profile-edit-btn">Edit Profile</button>
                <a href="{{ route('logout') }}" class="btn profile-edit-btn" onclick="event.preventDefault();document.getElementById('log_out').submit();">log out</a>

                <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>

                <form id="log_out" method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>

            </div>

            <div class="profile-stats">
                @php
                    $followers = DB::table('folow__users')
                    ->where('folow__users.following' , Auth::user()->id)
                    ->count('folow__users.followers');

                    $following = DB::table('folow__users')
                    ->where('folow__users.followers' , Auth::user()->id)
                    ->count('folow__users.following');
                @endphp

                <ul>
                    <li><span class="profile-stat-count">164</span> posts</li>
                    <li><span class="profile-stat-count">{{$following}}</span> followers</li>
                    <li><span class="profile-stat-count">{{$followers}}</span> following</li>
                </ul>

            </div>

            <div class="profile-bio">

                <p><span class="profile-real-name">Jane Doe</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit 📷✈️🏕️</p>

            </div>

        </div>
        <!-- End of profile section -->

    </div>
    <!-- End of container -->

</header>

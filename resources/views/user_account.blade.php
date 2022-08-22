<link rel="stylesheet" href="{{ asset('/css/style.css') }}">

@php
$followers = DB::table('folow__users')
            ->where('folow__users.following' , Auth::user()->id)
            ->where('folow__users.followers' , $data->id)
            ->get();
@endphp

<header>

    <div class="container">

        <div class="profile">

            <div class="profile-image">

                <img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces" alt="">

            </div>

            <div class="profile-user-settings">
                    <h1 class="profile-user-name">{{$data->name}}</h1>
                    @if($id_auth == null)
                        <a href="{{route('login')}}" class="btn profile-edit-btn">Follow</a>
                        @else
                            @forelse($followers as $follow)
                                @if($follow->followers == $data->id)
                                    <td><button href="#" class="btn btn-secondary profile-edit-btn">Followed</button></td>
                                @endif    
                                @empty
                                    <form action="{{route('follow')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="followers" value="{{$data->id}}">
                                        <input type="hidden" name="following" value="{{$id_auth}}">
                                        <input type="submit" class="btn profile-edit-btn" value="Follow">
                                    </form>
                            @endforelse
                    @endif
            </div>

            <div class="profile-stats">

                <ul>
                    <li><span class="profile-stat-count">164</span> posts</li>
                    <li><span class="profile-stat-count">188</span> followers</li>
                    <li><span class="profile-stat-count">206</span> following</li>
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

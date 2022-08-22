<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@php
$count = 0;
$followers = DB::table('folow__users')
            ->where('folow__users.following' , Auth::user()->id)
            ->get();
@endphp

<div class="container">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">show</th>
        <!-- <th scope="col">follow</th> -->
        </tr>
    </thead>
    <tbody>
        @foreach($data as $user)
            <tr>
                <th scope="row">{{++$count}}</th>
                <td>{{$user->name}}</td>
                @if($ids == $user->id)
                    <td><a  href="{{route('dashboard')}}" class="btn btn-secondary">Your Account</a></td>
                    @elseif($ids == null)
                        <td><button type="button" class="btn btn-dark">Show Account</button></td>
                        <td><a href="{{route('login')}}" class="btn btn-secondary">Follow</a></td>
                    @endelseif
                    @else
                        <td><a href="{{route('user_account' , $user->id)}}" class="btn btn-dark">Show Account</a></td>
                @endif
            </tr>
        @endforeach
    </tbody>
    </table>


</div>



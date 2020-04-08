<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="tab-container">
        <ul class="nav nav-tabs" role="tablist">
{{--            <li class="nav-item"><a class="nav-link active" href="#home" role="tab">Home</a></li>--}}
{{--            <li class="nav-item"><a class="nav-link" href="#profile" role="tab">Profile</a></li>--}}
{{--            <li class="nav-item"><a class="nav-link" href="#messages" role="tab">Messages</a></li>--}}
            {{$nav}}
        </ul>
        <div class="tab-content">
           {{$body}}
        </div>
    </div>
</div>
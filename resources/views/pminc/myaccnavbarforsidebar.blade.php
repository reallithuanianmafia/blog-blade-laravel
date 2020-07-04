<div class="col-md-4 playlist">
    <div class="list-group">
        <a class="list-group-item list-group-item-action text-center">Navigation</a>
            <a href="{{route('pm.myaccount.index')}}" class="list-group-item list-group-item-action {{ Route::is('pm.myaccount.index') ? 'active btn-dark' : '' }}">General</a>
            <a href="{{route('pm.myaccount.savedposts.index')}}" class="list-group-item list-group-item-action {{ Route::is('pm.myaccount.savedposts.index') ? 'active btn-dark' : '' }}">Read Later (Saved Posts)</a>
            <a href="{{route('pm.myaccount.likedposts.index')}}" class="list-group-item list-group-item-action {{ Route::is('pm.myaccount.likedposts.index') ? 'active btn-dark' : '' }}">Liked Posts</a>
            <a href="{{route('pm.myaccount.basicsettings')}}" class="list-group-item list-group-item-action {{ Route::is('pm.myaccount.basicsettings') ? 'active btn-dark' : '' }}">Basic Settings</a>
            <a href="{{route('pm.myaccount.newpassword')}}" class="list-group-item list-group-item-action {{ Route::is('pm.myaccount.newpassword') ? 'active btn-dark' : '' }}">New Password</a>
            <a href="{{route('pm.myaccount.dangerous')}}" class="list-group-item list-group-item-action {{ Route::is('pm.myaccount.dangerous') ? 'active btn-dark' : '' }}">Dangerous</a>
            
    </div>
</div>
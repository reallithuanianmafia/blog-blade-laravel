<div class="col-md-4 playlist">
    <div class="list-group">
        <a class="list-group-item list-group-item-action text-center">Navigation</a>
            <a href="#" class="list-group-item list-group-item-action {{ Route::is('pm.myaccount.index') ? 'active btn-dark' : '' }}">General</a>
            <a href="#" class="list-group-item list-group-item-action {{ Route::is('pm.myaccount.newpassword') ? 'active btn-dark' : '' }}">New Password</a>
            <a href="#" class="list-group-item list-group-item-action {{ Route::is('pm.myaccount.dangerous') ? 'active btn-dark' : '' }}">Dangerous</a>
            
    </div>
</div>
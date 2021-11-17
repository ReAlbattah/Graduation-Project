<div class="col-sm-2 bg-dark vh-100 p-0" id="mySideBar">
    <div class="card bg-transparent border-0">
        <div class="card-body card-link py-0 ">
            <a href="/home"><i class="fas fa-home mr-2"></i><small id="products">Home</small></a>
        </div>
    </div>
    @if(Auth::user()->role_id == 1)
        <div class="card bg-transparent border-0">
            <div class="card-body card-link py-0 ">
                <a href="/admin/groups"><i class="fas fa-users mr-2"></i><small id="products">Groups</small></a>
            </div>
        </div>              

    @elseif(Auth::user()->role_id == 2)
    
        <div class="card bg-transparent border-0">
            <div class="card-body card-link py-0 ">
                <a href="/supervisor/display_groups"><i class="fas fa-users mr-2"></i><small id="products">Groups</small></a>
            </div>
        </div>
    
    
    @else
    
    
    @endif

    
    <div class="card bg-transparent border-0">
        <div class="card-body card-link py-0 ">
            <a href="/previousProject"><i class="fas fa-file-archive mr-2 previousProjects"></i><small class="previousProjects">Previous Projects</small></a>
        </div>
    </div>
</div>
@php
        $student_group = Auth::user()->student_group;
        $project = null;
        if($student_group != null) {
            $project = Auth::user()->student_group->project;
        }
    @endphp

<div class="col-sm-3 bg-dark vh-100 p-0" id="mySideBar">
    <div class="card bg-transparent border-0">
        <div class="card-body card-link py-0 ">
            <a href="/home"><i class="fas fa-home mr-2-archive mr-2 home"></i><small class="home">Home</small></a>
        </div>
    </div>
    <div class="card bg-transparent border-0">
        <div class="card-body card-link py-0 ">
            <a href="/aboutus"><i class="fas fa-question-circle mr-2-archive mr-2 aboutus"></i><small class="aboutus">About Us</small></a>
        </div>   
    </div>
    <div class="card bg-transparent border-0">
        <div class="card-body card-link py-0 ">
            <a href="#"><i class="fas fa-home mr-2"></i><small id="products">Templates</small></a>
        </div>
    </div>
    @if(Auth::user())
        @if(Auth::user()->role_id == 1)
                    

        @elseif(Auth::user()->role_id == 2)
        
            <div class="card bg-transparent border-0">
                <div class="card-body card-link py-0 ">
                    <a href="/supervisor/display_groups"><i class="fas fa-users mr-2"></i><small id="products">Groups</small></a>
                </div>
            </div>

        
        @else
        <div class="card bg-transparent border-0">
            <div class="card-body card-link py-0 ">
                <a href="/group"><i class="fas fa-users mr-2 groups"></i>
                    <small class="groups">
                        @if($student_group == null)
                            Add Group
                        @else
                            Your Group
                        @endif
                    </small></a>
            </div>
        </div>
        <div class="card bg-transparent border-0">
            <div class="card-body card-link py-0 ">
                <a href="/project"><i class="fas fa-users mr-2 projects"></i>
                    <small class="projects">
                        @if($project == null)
                            Add Project
                        @else
                            Your Project
                        @endif
                    </small></a>
            </div>
        </div>
        
        @endif

    @endif
    <div class="card bg-transparent border-0">
        <div class="card-body card-link py-0 ">
            <a href="/previousProject"><i class="fas fa-file-alt mr-2-archive mr-2 previousProjects detiles"></i><small class="previousProjects detiles">Previous Projects</small></a>
        </div>      
    </div>
    
    <div class="card bg-transparent border-0">
        <div class="card-body card-link py-0 ">
            <a href="#" data-toggle="collapse" data-target="#companiesCollapse" aria-expanded="false" aria-controls="companiesCollapse"><i class="fas fa-building mr-2-archive mr-2"></i><small id="products">Companies</small></a>
        </div>  
    </div>
    <div class="collapse" id="companiesCollapse">
        <div class="card bg-transparent border-0 ml-5">
            <div class="card-body card-link py-0 ">
                <a href="#" data-toggle="modal" data-target="#sendJobModal"><i class="fas fa-briefcase mr-2-archive mr-2"></i><small>Send Job</small></a>
            </div>      
        </div>
    </div>
    <div class="card bg-transparent border-0">
        <div class="card-body card-link py-0 ">
            <a href="mailto:"><i class="fas fa-envelope mr-2"></i><small class="email">Contact</small></a>
        </div>
    </div>
</div>
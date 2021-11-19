@extends('layouts.app')

@section('content')
@include('layouts.sideBar')

    <div class="container mt-5">
        <h3>Announcement Job</h3>

        <form action="/admin/AD_Management/{{$announcement->id}}" method="post">
            @method('put')
            @csrf 
            <div class="form-group">
                <label>Company Name:</label>
                <input type="text" class="form-control" name="company_name" value="{{$announcement->company_name}}" readonly>
            </div>

            <div class="form-group">
                <label>Job Name:</label>
                <input type="text" class="form-control" name="job_name" value="{{$announcement->job_name}}" readonly>
            </div>

            <div class="form-group">
                <label>Location:</label>
                <input type="text" class="form-control" name="location" value="{{$announcement->location}}" readonly>
            </div>

            <div class="form-group">
                <label>More detiles:</label>
                <input type="text" class="form-control" name="description" value="{{$announcement->description}}" readonly>
            </div>

            <div class="form-group">
             <label>File:</label>
             <p> <a class="btn btn-secondary mx-1" type="button" href="/admin/announcement/download/{{ $announcement->id }}"> {{ $announcement->file }}</a></p>
            </div>
            
            <div class="form-group">
                <label>Status:</label>
                <select class="form-control" name="status">
                <option value="acceptable">Acceptable</option>
                <option value="unacceptable">Unacceptable</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    
    </div>
@endsection 


<x-header name="{{$LoggedUserName}}"/>

<div style="padding: 2rem">
    @foreach ($users as $item)
    <div class="card" style="width: 18rem; margin: 1rem">
        <div class="card-body">
          <h5 class="card-title">{{$item['name']}} </h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"> Roll : {{$item['user_roll']}} </h6>
          <p class="card-text">DOB: {{$item['dob']}} </br> Joined date:{{$item['joined_date']}} <br> Hourly rate:{{$item['hourly_rate']}}  </p>
          <a href="#" class="card-link"> Edit </a>
          <a href="#" class="card-link"> Delete </a>
        </div>
      </div>
    @endforeach
</div>

<x-footer/>
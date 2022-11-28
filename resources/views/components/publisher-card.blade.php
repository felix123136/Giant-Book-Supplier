@props(['publisher'])

<div class="card col-md-3">
    <img src="{{$publisher->image}}" class="card-img-top" alt="publisher logo">
    <div class="card-body">
      <h5 class="card-title mb-1">{{$publisher->name}}</h5>
      <h6 class="card-text">{{$publisher->address}}</h6>
      <a href="/publishers/{{$publisher->id}}" class="btn btn-primary">Detail</a>
    </div>
</div>

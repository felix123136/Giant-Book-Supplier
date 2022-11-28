@props(['book'])

<div class="card col-md-3">
    <img src="{{$book->image}}" class="card-img-top" alt="book image">
    <div class="card-body">
      <h5 class="card-title mb-1">{{$book->title}}</h5>
      <p class="card-text mb-0">by</p>
      <h6 class="card-text">{{$book->author}}</h6>
      <a href="/books/{{$book->id}}" class="btn btn-primary">Detail</a>
    </div>
</div>

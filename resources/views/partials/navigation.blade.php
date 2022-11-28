@php
    use App\Models\Category;
    $categories = Category::all();
@endphp

<div class="bg-warning bg-gradient text-white text-center p-4">
    <h1 class="fw-normal">Giant Book Supplier</h1>
</div>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto my-2 my-lg-0 mx-auto">
            <li class="nav-item">
            <a class="nav-link text-primary" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown">
                Category
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="/categories/{{$category->id}}">Category {{$category->name}}</a></li>
                @endforeach
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link text-primary" href="/publishers">Publisher</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-primary" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
  </nav>

  <style>
    .nav-link:hover {
        text-decoration: underline;
    }
  </style>
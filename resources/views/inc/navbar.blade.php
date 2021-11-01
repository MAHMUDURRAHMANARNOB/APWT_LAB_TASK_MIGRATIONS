<nav class="nav nav-tabs justify-content-center">
    <ul class="nav">
      <li class="nav-item"><a class="{{'/' == request()->path() ? 'nav-link active' : 'nav-link'}}" aria-current="page" href="{{route('home')}}">Home</a></li>
      <li class="nav-item"><a class="{{'products' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('products')}}">Product List</a></li>
      <li class="nav-item"><a class="{{'add' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('add')}}">Add Product</a></li>
      <li class="nav-item"><a class="{{'contactus' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('contactus')}}">Contact Us</a></li>
    </ul>
  </div>
</nav>
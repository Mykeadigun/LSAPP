@extends('layouts.app')

@section('content')    
  
<body class=" text text-center">
  <form class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label><input type="checkbox" value="remember-me"> Remember me</label>
      </div>
      <button class="btn  btn-primary " type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>
</body>
</html>

@endsection
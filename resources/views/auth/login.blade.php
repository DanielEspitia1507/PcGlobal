<form action="{{route('login')}}" method="post">

    @csrf

    <div class="mb-3">
      <label for="" class="form-label">Name</label>
      <input type="email"
        class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Name</label>
      <input type="password"
        class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>

    <button type="submit" class="btn btn-primary">Login</button>

</form>
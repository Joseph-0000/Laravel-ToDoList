<x-layout>
    <section class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="col-6 mx-auto ">
            <div class="card px-4 py-3  ">
                <form action="" method="post">
                    @csrf
                    <h1 class="text-center">Welcome back!</h1>
                    <div>
                        <div class="form-group mb-3">
                            <label  for="email">Email</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input class="form-control" type="password">
                            <div>
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">Remember me</label>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100 mb-3" type="submit">Login</button>
                    </div>
                    <div>
                        <p class="text-center fw-semibold">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
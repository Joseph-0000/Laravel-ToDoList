<x-layout>
    <section class="d-flex align-items-center justify-content-center container gap-3">

        <aside class="bg-black">
            <div class="card px-4 py-3  ">
                <div>
                    <img src="" alt="">
                    <h3>Username</h3>
                </div>
                <ul>
                    <li></li>
                    <li><a href="" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Task</a></li>
                </ul>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button >Logout</button>
                </form>
            </div>
        </aside>
        <div class="container min-vh-100 d-flex align-items-center ">
            <div class="card row   w-100">
                <div class=" mx-auto ">
                    <div class=" px-4 py-3  ">
                        <h1>Welcome</h1>
                    </div>
                </div>
            </div>
              

            @include('modal.addModal')
        </div>
    </section>
</x-layout>
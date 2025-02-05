<x-layout>
    <section class="row gap-3">

            <aside class="col-3 py-5">
                <div class="card px-4 py-3 bg-black text-white h-100  ">
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <img src="" alt="">
                        <h3>{{ auth()->user()->name }}</h3>
                    </div>
                    <ul class="nav ms-0">
                        <li class="nav-item"></li>
                        <li class="nav-item "><a class="nav-link ps-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-lg"></i> Add Task</a></li>
                    </ul>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button >Logout</button>
                    </form>
                </div>
            </aside>
            <div class="col-8 container min-vh-100 d-flex align-items-center ">
                <div class="row w-100">
                    <div class="card px-auto ">
                        <div class=" px-4 py-3  ">
                            <h1>Welcome</h1>
                        </div>
                        <div>
                            {{ $todos->links() }}
                        </div>
                    </div>
                </div>
            
                @include('todos.addModal')
            </div>
    </section>
</x-layout>
<x-layout>
    <section class="row ">

            <aside class="col-3 py-5">
                <div class="card px-4 py-3 bg-black text-white h-100 w-100 ">
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
            <div class="col-9 container  d-flex align-items-center ">
                <div class="row w-100 h-100 py-5">
                    <div class="card px-auto ">
                        <div class=" px-4 py-3  ">
                            <h1>Welcome</h1>
                        </div>
                        <div>
                            <table class="table">
                                <thead>
                                    <th>Title</th>
                                    <th class="text-start">Description</th>
                                    <th class="text-end">Action</th>
                                </thead>

                                <tbody>
                                @foreach ($todos as $todo)
                                    <tr>
                                        <td>{{ $todo->title }}</td>
                                        <td class="text-start">{{ $todo->description }}</td>
                                        <td class="text-end"><a href="">Edit</a> <a href="">Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
                @include('todos.addModal')
            </div>
    </section>
</x-layout>
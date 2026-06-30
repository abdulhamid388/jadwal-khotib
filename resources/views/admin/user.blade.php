@extends('layouts.app')


@section('content')


<div class="container-fluid px-4 mt-4">


    <div class="card shadow border-0">


        <div class="card-header bg-white">

            <h4 class="mb-0 fw-bold">
                Data User
            </h4>

        </div>





        <div class="card-body">



            @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

            @endif







            <div class="table-responsive">


            <table class="table table-hover align-middle">


                <thead class="table-primary">


                    <tr>


                        <th width="80">
                            No
                        </th>


                        <th>
                            Email
                        </th>


                        <th width="220">
                            Aksi
                        </th>


                    </tr>


                </thead>





                <tbody>



                @foreach($users as $u)



                <tr>


                    <td>

                        {{ $loop->iteration }}

                    </td>





                    <td>

                        {{ $u->email }}

                    </td>







                    <td>



                        <a href="{{ route('admin.user.edit',$u->id) }}"

                        class="btn btn-warning btn-sm">


                            <i class="bi bi-pencil"></i>

                            Edit


                        </a>








                        <form

                        action="{{ route('admin.user.delete',$u->id) }}"

                        method="POST"

                        class="d-inline">


                            @csrf

                            @method('DELETE')



                            <button

                            class="btn btn-danger btn-sm"

                            onclick="return confirm('Hapus user ini?')">


                                Hapus


                            </button>



                        </form>




                    </td>



                </tr>



                @endforeach





                </tbody>



            </table>



            </div>



        </div>



    </div>



</div>



@endsection
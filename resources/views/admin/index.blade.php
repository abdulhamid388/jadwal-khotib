@extends('admin.layout')


@section('content')


<div class="d-flex justify-content-between align-items-center mb-4">


    <h2>
        Jadwal Khotib Jumat
    </h2>



    <a href="{{ route('admin.jadwal.create') }}"
       class="btn btn-primary">

        + Tambah Jadwal

    </a>


</div>





<div class="card border-0 shadow-sm">


    <div class="card-body p-0">


        <div class="table-responsive">



            <table class="table table-hover mb-0">



                <thead class="table-light">


                    <tr>

                        <th>No</th>

                        <th>Masjid</th>

                        <th>Tanggal</th>

                        <th>Khotib</th>

                        <th>Foto</th>

                        <th>Aksi</th>


                    </tr>



                </thead>





                <tbody>



                @forelse($jadwals as $j)



                    <tr>


                        <td>

                            {{ $loop->iteration }}

                        </td>



                        <td>

                            {{ $j->nama_masjid }}

                        </td>




                        <td>


                            {{ \Carbon\Carbon::parse($j->tanggal)->translatedFormat('d F Y') }}


                        </td>




                        <td>


                            {{ $j->nama_khotib }}


                        </td>





                        <td>



                            @if($j->foto)



                                <img 
                                src="{{ asset('storage/'.$j->foto) }}"
                                width="60"
                                height="60"
                                class="rounded-circle"
                                style="object-fit:cover;">



                            @else


                                <span class="badge bg-secondary">

                                    Tidak ada foto

                                </span>



                            @endif



                        </td>






                        <td>




                            <a href="{{ route('admin.jadwal.edit',$j->id) }}"
                               class="btn btn-warning btn-sm">


                                Edit


                            </a>







                            <form 
                            action="{{ route('admin.jadwal.destroy',$j->id) }}"
                            method="POST"
                            style="display:inline;">



                                @csrf

                                @method('DELETE')



                                <button 
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus data ini?')">


                                    Hapus


                                </button>



                            </form>





                        </td>





                    </tr>





                @empty




                    <tr>


                        <td colspan="6" 
                        class="text-center py-4">


                            Belum ada data jadwal


                        </td>


                    </tr>





                @endforelse





                </tbody>



            </table>




        </div>


    </div>



</div>





@endsection
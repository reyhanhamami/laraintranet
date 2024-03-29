@extends('templates.main')
@section('title', 'Intranet - Personal Calender')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Personal Calender')
    @section('sub', 'BWA')

    @section('konten')
    <div class="row">
        <div class="col-12">
            <div class=" mt-4">
            @if(!Auth::user())
            @elseif(Auth::user()->name == 'admin' or Auth::user()->login == 'Indra.Purnama')
            <a href="{{ route('addpersonalevent') }}" class="btn btn-primary mb-2">Tambah Acara</a>
            @endif
            <a href="{{ route('editpersonalevent') }}" class="btn btn-warning mb-2">Lihat detail acara personal</a>
            @if(session('success'))
                <div class="alert alert-success">
                {{session('success')}}
                </div>
            @endif
            @if(session('update'))
                <div class="alert alert-info">
                {{session('update')}}
                </div>
            @endif

            <!-- <a href="/DeleteCooporateCalender" class="btn btn-danger mb-2">Hapus Acara</a> -->
            
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! $calendar->calendar() !!}
                </div>
            </div>
            </div>
        </div>
    </div>
    @endsection('konten')
</div>
<!-- end container fluid -->
@section('scriptExternal')
{!! $calendar->script() !!}
@endsection('scriptExternal')
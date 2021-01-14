@extends('layout/main')

@section('title','index')

@section('container')
<div class="container mt-4">
    <div>
        <div>
            <h1 class="text-center">Hitung Zakat Mal</h1>
        </div>
    </div>
</div>

<br>
    <div class="container">
        <div class="col-md-4 offset-md-3"  style="max-width:550px;">
            <div class="card bg-info text-white">
                <img src="Blue.jpg">
                <div class="card-img-overlay">
                    <form method="POST" action="/zakathitung">
                        @csrf
                        <div class="text-center">
                            <div>
                                <input class="form-control" name="box1" placeholder="Pendapatan Per Bulan">
                            </div>
                            <br>
                            <div>
                                <input class="form-control" name="box2" placeholder="Bonus THR dan lainnya">
                            </div>
                            <br>
                            @if(session('info'))
                            <div class="alert alert-info">
                                {{ session('info') }}
                            </div>
                            @endif
                            <br>
                            <div>
                                <button class="btn btn-primary" type="submit">Submit
                            </div>
                        </div>
                    </form>
                </div>    
            </div>
        </div>        
    </div>


 

@endsection
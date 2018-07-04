@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">You have {{$diff >= 0 ? $diff : ''}} days Remaining for Premium Package</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- You are logged in! --}}
                @if($status ==  true)
                    <div class="row first">
                        <div class="col-md-12" data-wow-delay="0.3s">
                            <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                      </tr>
                                    </tbody>
                                  </table>
                    <!-- <img src="img/app/five.jpg" alt="" class="first img-fluid">
                    <img src="img/app/second.jpg" alt="" class="second img-fluid"> -->
                  </div> 
                    </div>
                @else
                    <div class="row">
                        <p>Please Click</p>
                        <a href="{{url('subscribe',1)}}" class="btn btn-success">Subscribe</a>
                        <p>To view premium Tips.</p>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<section class="section">
   <div class="section-header">
       <h3 class="page__heading">Example Consume API</h3>
   </div>
   <div class="section-body">
       <div class="row">
           <div class="col-lg-12">
               <div class="card">
                   <div class="card-body">
                       
                     <h1>Consumo Endpoint Users</h1>
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>USERNAME</th>
                                    <th>EMAIL</th>
                                    <th>ADDRESS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->username}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->address->street}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
@endsection
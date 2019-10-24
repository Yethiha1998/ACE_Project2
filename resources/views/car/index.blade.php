@include('layouts.partial.header')
@extends('layouts.master')
@section('title','Car Listing')
@section('content')

<div class="main-content">
    

        
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12">
                <div class="card">
                <div class="card-body">
                    <div class="section-title mt-0">Light</div>
                    <table class="table table-striped">
                      <thead>
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
                   
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">

            </div>
        </div>
    </section>
</div>


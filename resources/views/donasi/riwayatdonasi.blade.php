@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Riwayat Donasi')

@section('content')
@include('layout.main-layout')

<div class="table-responsive small ms-3 mt-3">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Username</th>
              <th scope="col">Kategori</th>
              <th scope="col">Donasi</th>
              <th scope="col">Action  </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
          </tbody>
        </table>
      </div>
@extends('layouts/main-layout')

@section('component')
    <div class="w-50 m-auto mt-5">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Orario di arrivo</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <td>{{ $train['Azienda'] }}</td>
                    <td>{{ $train['Stazione di partenza'] }}</td>
                    @if ($train['Cancellato'] != 0)
                    <td class="text-danger">Cancellato</td>
                    @else
                    <td>{{ $train['Orario di arrivo'] }}</td>
                  @endif
                </tr> 
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
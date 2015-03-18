@extends('layouts.admin')
@section('title')
    Server info
@endsection

@section('content')
        @if ($serverInfo)
{{--             {{ dd($serverInfo) }}--}}
        <h1 class="page-header">Server info</h1>

        <h2 class="sub-header">Redis Server</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Property</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Version</td>
                    <td>{{ $serverInfo['Server']['redis_version'] }}</td>
                </tr>
                <tr>
                    <td>Build Id</td>
                    <td>{{ $serverInfo['Server']['redis_build_id'] }}</td>
                </tr>
                <tr>
                    <td>Arch Bits</td>
                    <td>{{ $serverInfo['Server']['arch_bits'] }}</td>
                </tr>
                <tr>
                    <td>Port</td>
                    <td>{{ $serverInfo['Server']['arch_bits'] }}</td>
                </tr>
                <tr>
                    <td>Up Time In Seconds</td>
                    <td>{{ $serverInfo['Server']['uptime_in_seconds'] }}</td>
                </tr>
                <tr>
                    <td>Up Time In Days</td>
                    <td>{{ $serverInfo['Server']['uptime_in_days'] }}</td>
                </tr>
                </tbody>
            </table>
        </div>

         <h2 class="sub-header">Clients</h2>
         <div class="table-responsive">
             <table class="table table-striped">
                 <thead>
                 <tr>
                     <th>Property</th>
                     <th>Value</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <td>Connected clients</td>
                     <td>{{ $serverInfo['Clients']['connected_clients'] }}</td>
                 </tr>
                 </tbody>
             </table>
         </div>
        @endif
@endsection
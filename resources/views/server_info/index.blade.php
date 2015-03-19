@extends('layouts.admin')
@section('title')
    Server info
@endsection

@section('content')
        @if ($serverInfo)
        <h1 class="page-header">Server info</h1>

        <h3 class="sub-header">Redis Server</h3>
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

        <h3 class="sub-header">Memory</h3>
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
                    <td>Used Memory</td>
                    <td>{{ $serverInfo['Memory']['used_memory_human'] }}</td>
                </tr>
                <tr>
                    <td>Used Memory Peak</td>
                    <td>{{ $serverInfo['Memory']['used_memory_peak_human'] }}</td>
                </tr>
                </tbody>
            </table>
        </div>

         <h3 class="sub-header">Clients</h3>
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
                 <tr>
                     <td>Client Longest Output List</td>
                     <td>{{ $serverInfo['Clients']['client_longest_output_list'] }}</td>
                 </tr>
                 <tr>
                     <td>Client Biggest Input Buffer</td>
                     <td>{{ $serverInfo['Clients']['client_biggest_input_buf'] }}</td>
                 </tr>
                 <tr>
                     <td>Blocked Clients</td>
                     <td>{{ $serverInfo['Clients']['blocked_clients'] }}</td>
                 </tr>
                 </tbody>
             </table>
         </div>

        <h3 class="sub-header">Statistics</h3>
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
                    <td>Total connections received</td>
                    <td>{{ $serverInfo['Stats']['total_connections_received'] }}</td>
                </tr>
                <tr>
                    <td>Total commands processed</td>
                    <td>{{ $serverInfo['Stats']['total_commands_processed'] }}</td>
                </tr>
                <tr>
                    <td>Total net input bytes</td>
                    <td>{{ $serverInfo['Stats']['total_net_input_bytes'] }}</td>
                </tr>
                <tr>
                    <td>Total net output bytes</td>
                    <td>{{ $serverInfo['Stats']['total_net_output_bytes'] }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        @endif
@endsection
@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Pending')}}</h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons">
                            <thead>
                                <tr>
                                    <th>{{__('S/N')}}</th>
                                    <th></th>
                                    <th>{{__('Ref')}}</th>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Amount')}}</th>                                                                       
                                    <th>{{__('Plan')}}</th>
                                    <th>{{__('Daily percent')}}</th>
                                    <th>{{__('Duration')}}</th>
                                    <th>{{__('Profit')}}</th>
                                    <th>{{__('Bonus')}}</th>                                                                    
                                    <th>{{__('Claimed')}}</th>     
                                    <th>{{__('Created')}}</th>
                                    <th>{{__('Updated')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($profit as $k=>$val)
                                <tr>
                                    <td>{{++$k}}.</td>
                                    <td class="text-center">
                                        <a href="{{route('py.approve', ['id' => $val->id])}}" class="btn btn-sm btn-success">{{ __('Approve')}}</a>
                                        <a href="{{route('py.decline', ['id' => $val->id])}}" class="btn btn-sm btn-danger">{{ __('Decline')}}</a>
                                    </td>   
                                    <td>{{$val->trx}}</td>
                                    <td><a href="{{url('admin/manage-user')}}/{{$val->user['id']}}">{{$val->user['username']}}</a></td>
                                    <td>{{$currency->symbol.number_format($val->amount)}}</td>
                                    <td>{{$val->plan->name}}</td>
                                    <td>{{$val->percent}}%</td>
                                    <td>{{$val->duration}}(s)</td>
                                    <td>{{$currency->symbol.number_format($val->profit)}}</td> 
                                    <td>{{$currency->symbol.$val->bonus}}</td> 
                                    <td>{{$currency->symbol.$val->claimed}}</td> 
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>  
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>                
                                </tr>

                                <div class="modal fade" id="delete{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="card bg-white border-0 mb-0">
                                                    <div class="card-header">
                                                        <h3 class="mb-0">{{__('Are you sure you want to delete this?')}}</h3>
                                                    </div>
                                                    <div class="card-body px-lg-5 py-lg-5 text-right">
                                                        <button type="button" class="btn btn-neutral btn-sm" data-dismiss="modal">{{ __('Close')}}</button>
                                                        <a  href="{{route('py.delete', ['id' => $val->id])}}" class="btn btn-danger btn-sm">{{ __('Proceed')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach               
                            </tbody>                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
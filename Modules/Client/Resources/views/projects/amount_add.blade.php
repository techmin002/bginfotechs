<a data-toggle="modal" data-id="{{ $value->id }}"
    data-target="#addAmount{{ $value->id }}" title="Add Amount"
    class="btn btn-primary btn-xs">Add Amount</a>
<div class="modal fade" id="addAmount{{ $value->id }}">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('projects.admount.pay', $value->id) }}"
            method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @php(
                    $methods = [
                        'cash' => 'Cash',
                        'cheque' => 'Cheque',
                        'online' => 'Online',
                    ]
                )
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Amount</h4>
                    <button type="button" class="close"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                    
                            {!! Form::label('paid_amount', 'Paid Price', ['class' => 'form-label']) !!}
                            {!! Form::number('paid_amount', null, ['class' => 'form-control', 'placeholder' => 'Enter Paid Price']) !!}
                       
                            {!! Form::label('methods', 'Methodas', ['class' => 'form-label']) !!}
                            {!! Form::select('methods', $methods, null, ['class' => 'form-control']) !!}
                        
                   
                            {!! Form::label('start_date', 'Start Date', ['class' => 'form-label']) !!}
                            {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                        
                    {!! Form::label('image', 'Invoice', ['class' => 'form-label']) !!}
                    {!! Form::file('image', ['class' => 'form-control', 'onchange' => 'showPreview3(event);']) !!}
                    <div class="preview mt-2">
                        <img src="" id="file-ip-3-preview"
                            width="200px">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Close</button>
                    <button type="submit"
                        class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>

</div>
<div class="modal fade" id="editModal{{ $value->id }}">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('projects.update', $value->id) }}"
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
                    <h4 class="modal-title">Edit Package</h4>
                    <button type="button" class="close"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                    {!! Form::text('title', $value->title, ['class' => 'form-control', 'placeholder' => 'Enter Project title']) !!}
                    {!! Form::label('client_id', 'Client', ['class' => 'form-label']) !!}
                    {!! Form::select('client_id', $clients, $value->client_id, ['class' => 'form-control']) !!}
                    {!! Form::label('price', 'Total Price', ['class' => 'form-label']) !!}
                    {!! Form::number('price', $value->price, ['class' => 'form-control', 'placeholder' => 'Enter Price']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::label('paid_amount', 'Paid Price', ['class' => 'form-label']) !!}
                            {!! Form::number('paid_amount', $value->paid_amount, ['class' => 'form-control', 'placeholder' => 'Enter Paid Price', 'disabled']) !!}
                        </div>
                        {{-- @dd($value->clientPayment) --}}
                        <div class="col-md-6">
                            {!! Form::label('methods', 'Methodas', ['class' => 'form-label']) !!}
                            {!! Form::select('methods', $methods, $value->clientPayment->methods ?? '', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    {!! Form::label('package_id', 'Package', ['class' => 'form-label']) !!}
                    {!! Form::select('package_id', $packages, $value->package_id, ['class' => 'form-control']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::label('start_date', 'Start Date', ['class' => 'form-label']) !!}
                            {!! Form::date('start_date', $value->start_date, ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('end_date', 'End Date', ['class' => 'form-label']) !!}
                            {!! Form::date('end_date', $value->end_date, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    {!! Form::label('image', 'Invoice', ['class' => 'form-label']) !!}
                    {!! Form::file('image', ['class' => 'form-control', 'onchange' => 'showPreview2(event);']) !!}
                    <div class="preview mt-2">
                        <img src="" id="file-ip-2-preview"
                            width="200px">
                            @if(isset($value->clientPayment))
                            <img src="{{ asset('upload/images/projects/'.$value->clientPayment->receipt) }}" width="200px">
                        @endif

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
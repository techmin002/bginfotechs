<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right" data-toggle="modal"
data-target="#exampleModal">
Create
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Project</h5>
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ route('projects.store') }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @php(
                    $methods = [
                        'cash' => 'Cash',
                        'cheque' => 'Cheque',
                        'online' => 'Online',
                    ]
                )
            <div class="modal-body">
                {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Project title']) !!}
                {!! Form::label('client_id', 'Client', ['class' => 'form-label']) !!}
                {!! Form::select('client_id', $clients, null, ['class' => 'form-control']) !!}
                {!! Form::label('price', 'Total Price', ['class' => 'form-label']) !!}
                {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Enter Price']) !!}
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::label('paid_amount', 'Paid Price', ['class' => 'form-label']) !!}
                        {!! Form::number('paid_amount', null, ['class' => 'form-control', 'placeholder' => 'Enter Paid Price']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('methods', 'Methodas', ['class' => 'form-label']) !!}
                        {!! Form::select('methods', $methods, null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                {!! Form::label('package_id', 'Package', ['class' => 'form-label']) !!}
                {!! Form::select('package_id', $packages, null, ['class' => 'form-control']) !!}
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::label('start_date', 'Start Date', ['class' => 'form-label']) !!}
                        {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('end_date', 'End Date', ['class' => 'form-label']) !!}
                        {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                {!! Form::label('image', 'Invoice', ['class' => 'form-label']) !!}
                {!! Form::file('image', ['class' => 'form-control', 'onchange' => 'showPreview1(event);']) !!}
                <div class="preview mt-2">
                    <img src="" id="file-ip-1-preview" width="200px">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>
</div>
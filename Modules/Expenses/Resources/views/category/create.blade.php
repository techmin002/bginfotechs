<form action="{{ isset($type) ? route('expensescategories.update', $type->id) : route('expensescategories.store') }}" id="expenseForm" method="post">
    @csrf
    @if(isset($type))
        @method('PUT')
    @endif
    <div class="modal-body">
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-12 text-center">
                    <label class="form-label12">Expense Types @if(isset($type)) Edit @else Create @endif</label>
                </div>
                <div class="col-lg-12">
                    <label class="form-label12">Types Name</label>
                    <input class="form-control" placeholder="Enter Name" type="text" name="title" id="title" value="{{ isset($type) ? $type->title : '' }}">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer justify-content-start">
        <button type="submit" name="submit" id="btnSubmit" class="btn btn-success">{{ isset($type) ? 'Update' : 'Save' }} Item</button>
        <a href="{{ route('expensescategories.index') }}" type="cancel" data-dismiss="modal" class="btn btn-danger">Cancel</a>
    </div>
</form>

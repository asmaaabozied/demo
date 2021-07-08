@can('create', \App\Models\Customer::class)
    <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#pushModal">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('customers.actions.new_push_notification')
    </button>
@endcan

{{ BsForm::resource('orders')->get(url()->current()) }}
@component('dashboard::components.box')
    @slot('title', trans('orders.filter'))

    <div class="row">
        <input type="hidden" name="status" value="{{ request()->get('status') }}">
        <div class="col-md-4">
            {{ BsForm::date('date_from')->label(trans('offers.attributes.from')) }}
        </div>
        <div class="col-md-4">
            {{ BsForm::date('date_to')->label(trans('offers.attributes.to')) }}
        </div>
        <!--div class="col-md-4">
            {{ BsForm::number('perPage')
                ->value(request('perPage', 15))
                ->min(1)
                 ->label(trans('orders.perPage')) }}
        </div-->
    </div>
    @slot('footer')
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fas fa fa-fw fa-filter"></i>
            @lang('orders.actions.filter')
        </button>
    @endslot
@endcomponent
{{ BsForm::close() }}

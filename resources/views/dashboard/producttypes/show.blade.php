<x-layout :title="Str::limit($product->name, 50)" :breadcrumbs="['dashboard.producttypes.show', $product]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('product_types.attributes.name')</th>
                        <td>{{ $product->name }}</td>
                    </tr>

                </tbody>
                </table>

                @slot('footer')

                        <a href="{{ route('dashboard.producttypes.edit', $product) }}" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa fa-fw fa-edit"></i>
                        </a>


                        <a href="#product-{{ $product->id }}-delete-model"
                           class="btn btn-outline-danger btn-sm"
                           data-toggle="modal">
                            <i class="fas fa fa-fw fa-trash"></i>
                        </a>


                        <!-- Modal -->
                        <div class="modal fade" id="product-{{ $product->id }}-delete-model" tabindex="-1" role="dialog"
                             aria-labelledby="modal-title-{{ $product->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal-title-{{ $product->id }}">@lang('products.dialogs.delete.title')</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @lang('product_types.dialogs.delete.info')
                                    </div>
                                    <div class="modal-footer">
                                        {{ BsForm::delete(route('dashboard.producttypes.destroy', $product)) }}
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            @lang('product_types.dialogs.delete.cancel')
                                        </button>
                                        <button type="submit" class="btn btn-danger">
                                            @lang('product_types.dialogs.delete.confirm')
                                        </button>
                                        {{ BsForm::close() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>


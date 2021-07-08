<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body onload="window.print()">
    <div class="invoice-box @if(Locales::getDir() == 'rtl') rtl @endif">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{ asset('front/dezato/img/logo.png') }}" style="width:100%; max-width:300px;">
                            </td>

                            <td>
                                @lang('orders.invoice.singular') #: {{ $order->id }}<br>
                                @lang('orders.invoice.created'): {{ date( "m/d/Y", strtotime($order->created_at)) }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                {{ $order->city }}<br>
                                {{ $order->area }}<br>
                                {{ $order->street }} {{ $order->address }}
                            </td>

                            <td>
                                {{ $order->name }}<br>
                                {{ $order->phone }}<br>
                                {{ $order->email }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    @lang('orders.invoice.payment_method')
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr class="details">
                <td>
                    {{$order->payment_method}}
                </td>

                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr class="heading">
                <td>
                    @lang('orders.invoice.items')
                </td>

                <td>
                    @lang('orders.invoice.price')
                </td>

                <td>
                    @lang('orders.invoice.qty')
                </td>

                <td>
                    @lang('orders.invoice.total')
                </td>
            </tr>

            @forelse($order->items as $orderItem)
                @php($item = $orderItem->item)
                <tr class="item">
                    <td width="50%">
                        {{ $item->name }}
                    </td>
                    <td>{{ price($item->price) }}</td>
                    <td>{{ $orderItem->qty }}</td>
                    <td>{{ price($orderItem->total) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="100" class="text-center">@lang('products.empty')</td>
                </tr>
            @endforelse
            <tr class="total">
                <td></td>
                <td></td>
                <td></td>

                <td>
                    @lang('orders.invoice.final_total'): {{ price($order->total+$order->shipping_price) }}
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

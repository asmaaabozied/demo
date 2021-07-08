<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use App\Http\Filters\Orders\OrderFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Order
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $status
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $pickup
 * @property string|null $country
 * @property string|null $city
 * @property string|null $area
 * @property string|null $street
 * @property string|null $block
 * @property string|null $avenue
 * @property string|null $house
 * @property string|null $address
 * @property string|null $gift_message
 * @property string|null $payment_method
 * @property string|null $payment_id
 * @property string|null $shipping_price
 * @property string|null $discount
 * @property string $paid
 * @property string|null $sub_total
 * @property string|null $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $opened_at
 * @property int|null $coupon_id
 * @property int|null $shipping_company_id
 * @property-read \App\Models\User|null $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrderItem[] $items
 * @property-read int|null $items_count
 * @property-read \App\Models\Location|null $location
 * @property-read \App\Models\ShippingCompany|null $shippingCompany
 * @method static \Illuminate\Database\Eloquent\Builder|Order filter(\App\Http\Filters\BaseFilters $filters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAvenue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereBlock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereGiftMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereHouse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOpenedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePickup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    use HasFactory;
    use Filterable;

    const PENDING = 'pending';

    const IN_PROGRESS = 'in-progress';

    const CANCELED = 'canceled';

    const REJECTED = 'rejected';

    const DELIVERED = 'delivered';

    protected $fillable = [
        'user_id',
        'coupon_id',
        'country',
        'city',
        'shipping_company_id',
        'shipping_price',
        'discount',
        'sub_total',
        'total',
        'name',
        'phone',
        'status',
        'pickup',
        'area',
        'block',
        'street',
        'avenue',
        'house',
        'address',
        'gift_message',
        'payment_method',
        'payment_id',
        'opened_at',
    ];

    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = OrderFilter::class;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'pickup');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shippingCompany()
    {
        return $this->belongsTo(ShippingCompany::class, 'shipping_company_id');
    }
    public function getTotal()
    {

    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Order $order) {
            $order->forceFill(['status' => Order::PENDING]);
        });
    }
}

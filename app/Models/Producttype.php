<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use App\Http\Filters\producttypes\producttypeFilter;
use Spatie\MediaLibrary\HasMedia;
use App\Support\Traits\Selectable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Http\Filters\Governorates\GovernorateFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Producttype extends Model implements HasMedia, TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia, HasUploader, Filterable, Selectable;

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "producttypes";
    public $translatedAttributes = ['name'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'translations',
        'media',
    ];

    /**
     * The query parameter's filter of the model.
     *
     * @var string
     */
    protected $filter = producttypeFilter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    /**
     * Retrieve all the governorate's categories.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    /**
     * Retrieve all the governorate's merchants.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */


    /**
     * Define the media collections.
     *
     * @return void
     */

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function attrinutesproducts()
    {
        return $this->hasMany(Attribueproduct::class);
    }

    public function getDashboardUrl()
    {
        return route('dashboard.producttypes.show', $this);
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('flags')
            ->useFallbackUrl('https://www.governorateflags.io/' . $this->code . '/shiny/64.png')
            ->singleFile();
    }

    /**
     * Bootstrap the model and its traits.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

    }

    /**
     * Scope the query to include only default governorate.
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @return \Illuminate\Database\Eloquent\Builder
     */

}

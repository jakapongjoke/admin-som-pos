<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property string $company_name
 * @property string $company_store_name
 * @property string|null $company_business_type
 * @property string|null $company_tax_id
 * @property string|null $company_address
 * @property string|null $company_phone
 * @property string|null $company_logo
 * @property string|null $company_fax
 * @property string|null $company_email
 * @property int|null $company_country
 * @property string|null $company_province
 * @property string|null $company_city
 * @property string|null $company_zipcode
 * @property string|null $general_footer
 * @property string|null $certificate_footer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCertificateFooter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyBusinessType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyStoreName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyTaxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyZipcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereGeneralFooter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}


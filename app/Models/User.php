<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'email',
        'password',
        'hr',
        'nameEnglish',
        'nameArabic',
        'nationalId',
        'company',
        'workType',
        'companyCode',
        'location',
        'telephone',
        'telephone2',
        'startDate',
        'birthDate',
        'jobTitle',
        'education',
        'area',
        'vp',
        'dataChecked',
        'photoDone',
        'idDone',
        'allThingsDone',
        'leaveDate',
        'reasonOfLeaving',
        'address',
        'notes',
        'out',
        'personalPhoto',
        'nationalIdFront',
        'nationalIdBack',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'hr' => 'boolean',
            'dataChecked' => 'boolean',
            'photoDone' => 'boolean',
            'idDone' => 'boolean',
            'allThingsDone' => 'boolean',
            'out' => 'boolean',
            'startDate' => 'date',
            'birthDate' => 'date',
            'leaveDate' => 'date',
        ];
    }
}

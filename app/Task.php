<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";
    protected $fillable = ["fullNameAr",
        "fullNameEn",
        "notionalId",
        "workStation",
        "email",
        "phone",
        "whatsAppNumber",
        "educationdegree",
        "mejor",
        "mejor2",
        "joinDate",
        "reashrchType",
        "GPA",
        "reasarchNameEn",
        "superNameAr",
        "orgSuperName",
        "superAssestNameEn",
        "orgnizationName",
        "numberOfApprove"];
}

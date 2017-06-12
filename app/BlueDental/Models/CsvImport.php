<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CsvImport extends Model
{
    protected $table = "csv_import";
    public $timestamps = false;
}

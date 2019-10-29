<?php

namespace App\Models;

use App\Models\Simple\XMLModel;

class Places extends XMLModel
{
    protected $origin = WRITEPATH . 'data/placesData.xml';
    protected $keyField = 'id';
    protected $validationRules = [];
}

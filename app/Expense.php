<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['cost', 'category_id', 'date_expense'];

    public function category() {
        return $this->hasOne(Category::class);
    }
}

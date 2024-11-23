<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookseat extends Model
{
    use HasFactory;

    // Add the fillable properties
    protected $fillable = ['name', 'email', 'course_id'];
}

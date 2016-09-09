<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

  protected $fillable = array('slug');

  public function singleViewUrl () {

    return url('blog/' . $this->slug);

  }

}

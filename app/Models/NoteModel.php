<?php

namespace App\Models;

use CodeIgniter\Model;

class NoteModel extends Model
{
    //sesuai nama tabel
    protected $table                = 'note';
    protected $primaryKey           = 'note_id';
    protected $allowedFields        = ['judul', 'deskripsi', 'kategori', 'slug', 'created_at', 'updated_at'];
    protected $useTimestamps        = true;

    public function getPosts($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}

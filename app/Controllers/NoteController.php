<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NoteModel;

class NoteController extends BaseController
{
    protected $NoteModel;
    public function __construct()
    {
        $this->NoteModel = new NoteModel(); //nah ini contruct utk usermodel
    }
    public function index()
    {
        $note = $this->NoteModel->findAll();
        $data = [
            'title' => "Dashboard",
            'note' => $note
        ];
        return view('v_home', $data);
    }
    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Note',
            'note' => $this->NoteModel->getNote($slug)
        ];

        //jika note tidak ada
        if (empty($data['note'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Catatan ' . $slug . ' tidak ditemukan.');
        }
        return view('v_detail', $data);
    }
    public function create()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation(),
            'title' => 'Create Note'
        ];
        return view('v_tambahnote', $data);
    }
    public function save()
    {
        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[note.judul]',
                'errors' => [
                    'required' => '{field} catatan harus diisi!',
                    'is_unique' => '{field} catatan sudah terdaftar!'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} catatan harus diisi!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} catatan harus diisi!'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/notes/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->NoteModel->save([
            'judul' => $this->request->getVar('judul'),
            //getPost ini utk ambil data dari item POST yng ada di form v_blog
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);

        session()->setFlashdata('pesan', 'Catatan berhasil ditambahkan.');
        return redirect()->to('/');
    }

    public function editnote($slug)
    {
        session();
        $data = [
            'validation' => \Config\Services::validation(),
            'title' => 'Create Note',
            'note' => $this->NoteModel->getNote($slug)
        ];
        return view('v_editnote', $data);
    }
}

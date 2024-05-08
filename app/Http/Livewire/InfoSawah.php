<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Infotanah;
use Livewire\WithPagination;

class InfoSawah extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $perPage = 10;
    protected $queryString = ['search' => ['except' => ''], 'perPage'];

    protected $infotanahs;
    public function mount()
    {
        $this->infotanahs = Infotanah::paginate($this->perPage);
    }
    public $jenis_tnm, $produksi, $produktivitas, $infotanah_id;

    public function resetInput()
    {
        $this->jenis_tnm = '';
        $this->produksi = '';
        $this->produktivitas = '';
        $this->infotanah_id = '';
    }
    public function render()
    {
        $this->infotanahs = Infotanah::where('jenis_tnm', 'like', '%' . $this->search . '%')->paginate($this->perPage);

        return view('livewire.info-sawah',[
            'infotanahs' => $this->infotanahs,
        ])->extends('layouts.app')->section('content');
    }

    public function store(){
        $this->validate([
            'jenis_tnm' => 'required',
            'produksi' => 'required',
            'produktivitas' => 'required',
        ]);

        Infotanah::create([
            'jenis_tnm' => $this->jenis_tnm,
            'produksi' => $this->produksi,
            'produktivitas' => $this->produktivitas,
        ]);

        $this->resetInput();
        $this->emit('infotanahStore');
    }

    public function tanahId($id){
        $tanah = Infotanah::find($id);
        $this->infotanah_id = $id;
        $this->jenis_tnm = $tanah->jenis_tnm;
        $this->produksi = $tanah->produksi;
        $this->produktivitas = $tanah->produktivitas;
    }

    public function update(){
        $this->validate([
            'jenis_tnm' => 'required',
            'produksi' => 'required',
            'produktivitas' => 'required',
        ]);

        if($this->infotanah_id){
            $tanah = Infotanah::find($this->infotanah_id);
            $tanah->update([
                'jenis_tnm' => $this->jenis_tnm,
                'produksi' => $this->produksi,
                'produktivitas' => $this->produktivitas,
            ]);
            $this->resetInput();
            $this->emit('infotanahUpdate');
        }
    }

    public function delete(){
        if($this->infotanah_id){
            Infotanah::find($this->infotanah_id)->delete();
            $this->emit('infotanahDelete');
        }
    }

}

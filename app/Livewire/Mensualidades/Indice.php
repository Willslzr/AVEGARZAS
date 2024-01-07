<?php

namespace App\Livewire\Mensualidades;

use Livewire\Component;
use App\Models\Titulares;
use Livewire\WithPagination;

class Indice extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'manzana';
    public $sortDirection = 'asc';
    protected $queryString = ['search'];
    public $perPage = 5;
    protected $paginationTheme = 'bootstrap';


    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function updateSearch()
{
    $this->resetPage(); // Reinicia la paginación
}

    public function updatePage(){
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.mensualidades.indice', [
            'usuarios' => Titulares::query()
            ->where('nombres', 'like', '%'.strtoupper($this->search).'%')
            ->orWhere('apellidos', 'like', '%'.strtoupper($this->search).'%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage)
        ]);
    }
}

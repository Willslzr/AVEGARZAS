<?php

namespace App\Livewire\Cobros;

use Livewire\Component;
use App\Models\Titulares;
use Livewire\WithPagination;
use App\Models\mensualidades;
use Illuminate\Support\Carbon;

class Indice extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'id';
    public $sortDirection = 'asc';
    protected $queryString = ['search'];
    public $perPage = 10;
    public $fechaActual;

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

        return view('livewire.cobros.indice', [
            'mensualidades' => mensualidades::query()
            ->selectRaw('*, COUNT(*) as num_meses') // Selecciona todas las columnas y cuenta el número de meses
            ->where('estado', 'pendiente')
            ->groupBy('id', 'numero_de_referencia') // Incluye todas las columnas en la cláusula GROUP BY
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage),
        ]);

    }
}


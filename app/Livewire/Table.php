<?php
namespace App\Livewire;

use App\Models\Xcrate;
use Livewire\Component;
use Livewire\WithPagination;

abstract class Table extends Component
{
    use WithPagination;
  
    public $perPage = 50;
    public $page = 1;
    public $sortBy = '';
    public $sortDirection = 'asc';
  
    abstract public function query() : \Illuminate\Database\Eloquent\Builder;
    abstract public function columns() : array;
  
    public function data()
    {
        return $this
          ->query()
          ->when($this->sortBy !== '', function ($query) {
              $query->orderBy($this->sortBy, $this->sortDirection);
          })
          ->paginate($this->perPage);
    }
    
    public function sort($key)
    {
        $this->resetPage();//??reset pagination?
      
        if ($this->sortBy === $key) {
            $direction = $this->sortDirection === 'asc' ? 'desc' : 'asc';
            $this->sortDirection = $direction;
      
            return;
        }
      
        $this->sortBy = $key;
        $this->sortDirection = 'asc';
    }
      
    
    // public function render()
    // {
    //     return view('livewire.table', ['xrdata'=>Xcrate::get() 
    //     //->where('period', '01/Jan/2023 to 31/Jan/2023')
    // ]);
    // }
}

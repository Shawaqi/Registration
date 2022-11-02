<?php

namespace App\Http\Livewire;
use App\Models\Listings;

use App\Http\Livewire\Field;

use Livewire\Component;

class Counter extends Component
{
    public $request;
    public $students=[];
    public $updateMode= false;
    public $inputs= [];
    public $i=1;
    public $totalSteps = 5;
    public $currentStep = 1;

    public function mount(){
        $this->students[] = [
            'fs_name'=>'',
            'ss_name'=>'',
            'ts_name'=>'',
            'ic_student'=>'',
            's_dob'=>'',
            'sno_tel'=>'',
            's_gender'=>'',
            's_email'=>'',
            's_school'=>'',
            's_state'=>'',
            's_city'=>'',

        ];
        $this->currentStep = 1;
    }

    public function increaseStep(){
        // $this->resetErrorBag();
        //$this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep(){
        // $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }
    public function add()//add new row
    {
        $this->students[] = [
        'fs_name'=>'',
        'ss_name'=>'',
        'ts_name'=>'',
        'ic_student'=>'',
        's_dob'=>'',
        'sno_tel'=>'',
        's_gender'=>'',
        's_email'=>'',
        's_school'=>'',
        's_state'=>'',
        's_city'=>'',

    ];
    }

    public function deletestudent($index)
    {
        unset($this->students[$index]);
        $this->students = array_values($this->students);
    }



    public function render()
    {
        return view('livewire.counter');
    }


}

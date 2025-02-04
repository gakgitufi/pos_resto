<?php

namespace App\Livewire\Forms;

use App\Models\Menu;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MenuForm extends Form
{
    public $name;
    public $price;
    public $desc;
    public $type = 'coffee';
    public $photo;
    public ?Menu $menu;

    public function setMenu(Menu $menu) {
        $this->menu = $menu;

        $this->name = $menu->name;
        $this->price = $menu->price;
        $this->desc = $menu->desc;
        $this->type = $menu->type;
    }

    public function store() {
        $validate = $this->validate([
            'name' => 'required',
            'price' => 'required',
            'desc' => 'nullable',
            'type' => 'nullable',
        ]);

        Menu::create($validate);

        $this->menu->update($validate);
        $this->reset();

    }
}

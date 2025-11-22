<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteModal extends Component
{
    public $id;      // ID của bản ghi cần xóa
    public $name;    // Tên hiển thị (ví dụ: tên user)
    public $route;   // Route để submit xóa (ví dụ: users.destroy)

    public function __construct($id, $name, $route)
    {
        $this->id = $id;
        $this->name = $name;
        $this->route = $route;
    }

    public function render()
    {
        return view('components.delete-modal');
    }
}
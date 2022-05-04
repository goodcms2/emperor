<?php

namespace App\Http\Livewire\Admin\Roles;

use App\Models\Admin\Permissions\Role;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;

class Edit extends Component
{
    public Role $role;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $permissions;

    protected $rules = [
        'role.title'    => 'required',
        'role.description'     => 'required',
    ];

    public function RoleForm()
    {
        $this->validate();
        $this->role->update($this->validate());
        $this->role->permissions()->sync($this->permissions);
        //Create Log
        Log::logWritter('update', 'نقش کاربری ویرایش شد - ' . $this->role->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ویرایش شد');
    }

    public function render()
    {
        $role = $this->role;
        $roles = $this->readyToLoad ? Role::where('title', 'LIKE', '%' . $this->search . '%')->orWhere('description', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];

        return view('livewire.admin.roles.edit', compact('role', 'roles'));
    }

    public function loadRole()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $role = Role::find($this->deleteId);
        $role->delete();

        //Create Log
        Log::logWritter('delete', 'نقش کاربری حذف شد - ' . $role->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }
}

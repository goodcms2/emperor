<?php

namespace App\Http\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\settings\Footerlogo;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Logo extends Component
{

    use WithFileUploads;

    public $image;
    public Footerlogo $Footerlogo;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->Footerlogo = new Footerlogo;
    }

    protected $rules = [
        'Footerlogo.title'    => 'required',
        'Footerlogo.type'     => 'required',
        'Footerlogo.image'     => 'nullable',
    ];

    public function LogoForm()
    {
        $this->validate();
        $logo = $this->Footerlogo->query()->create([
            'title'    => $this->Footerlogo->title,
            'type'     => $this->Footerlogo->type,
            'isActive' => 1,
        ]);
        if ($this->image) {
            $logo->update([
                'image' => $this->uploadImage()
            ]);
        }
        $this->resetForm();

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "footerlogo/$year/$month";
        $name = time() . '-' . $this->image->getClientOriginalName();
        $name = str_replace(' ','-',$name);
        $this->image->storeAs($directory, $name);
        return "/$directory/$name";
    }

    public function render()
    {
        $logos = $this->readyToLoad ? Footerlogo::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];
        return view('livewire.admin.settings.footer.logo', compact('logos'));
    }

    public function loadLogo()
    {
        $this->readyToLoad = true;
    }

    public function changeStatus($id)
    {
        $logo = Footerlogo::find($id);
        if ($logo->isActive == 1) {
            $logo->update([
                'isActive' => 0
            ]);
        } else {
            $logo->update([
                'isActive' => 1
            ]);
        }
        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $logo = Footerlogo::find($this->deleteId);
        $logo->delete();
        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function resetForm()
    {
        $this->Footerlogo->title = null;
        $this->Footerlogo->type = null;
        $this->Footerlogo->image = null;
        $this->image = null;

    }
}

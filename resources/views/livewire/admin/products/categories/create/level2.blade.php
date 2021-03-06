@section('title', 'دسته بندی محصولات(سطح دو)')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/default-assets/select.bootstrap4.css') }}">

@endsection
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    @can('product-categories-create')
                        <div class="col-xl-4 box-margin height-card">
                            <div class="card card-body">
                                <div class="row">
                                    <a href="{{ route('admin.product.categories') }}" class="btn btn-info col-6"
                                        style="max-height:30px;margin-bottom:10px;border-left:2px solid white"><i class="fa fa-plus-square"></i> دسته
                                        بندی سطح یک</a>
                                    <a href="{{ route('admin.product.categories.level3') }}" class="btn btn-info col-6"
                                        style="max-height:30px;margin-bottom:10px"><i class="fa fa-plus-square"></i> دسته
                                        بندی سطح سه</a>
                                </div>

                                <h4 class="card-title">افزودن دسته بندی در سطح دو</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form wire:submit.prevent='CategoryForm'>
                                            @include('errors.error')
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">دسته بندی مادر:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" wire:model.lazy="parent_id" id="parents"
                                                        required="required" style="width: 100%;">
                                                        @foreach ($parent as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail111">عنوان دسته بندی:</label>
                                                <input type="text" wire:model.lazy='category.title' class="form-control"
                                                    id="exampleInputEmail111">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail111">توضیحات دسته بندی:</label>
                                                <textarea wire:model.lazy='category.description' class="form-control" id="exampleInputEmail111"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail111">عنوان متا:</label>
                                                <input type="text" wire:model.lazy='category.metaTitle'
                                                    class="form-control" id="meta-title">
                                                <div id="counter1" style="font-size:12px"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail111">توضیحات متا:</label>
                                                <textarea wire:model.lazy='category.metaDescription' class="form-control" id="meta-description"></textarea>
                                                <div id="counter2" style="font-size:12px"></div>
                                            </div>


                                            <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                                style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan

                    @cannot('product-categories-create')
                        <div class="col-lg-12 box-margin">
                        @endcannot
                        @can('product-categories-create')
                            <div class="col-12 col-lg-8 box-margin">
                            @endcan
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-2">لیست دسته بندی ها</h4>
                                    @can('product-categories-trash')
                                        <a href="{{ route('admin.product.categories.trash') }}" type="button"
                                            class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                                class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                                {{ \App\Models\Admin\products\Category::onlyTrashed()->count() }}
                                            </span></a>
                                    @endcan
                                    {{-- <button type="button" class="btn btn-primary mb-2 mr-2"
                                        style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                        اکسل</button> --}}
                                    <hr>
                                    <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadCategory'>
                                        <thead>
                                            <tr>
                                                <th>نام دسته بندی</th>
                                                <th>دسته مادر</th>
                                                <th>سطح</th>
                                                <th>وضعیت</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        @if ($readyToLoad)
                                            <tbody>
                                                @foreach ($categories as $category)
                                                    <tr>
                                                        <td>{{ $category->title }}</td>
                                                        <td>{{ isset($category->parent->title) ? $category->parent->title : '-' }}
                                                        </td>
                                                        <td>سطح {{ $category->level }}</td>
                                                        <td>
                                                            @can('product-categories-edit')
                                                                @if ($category->isActive == 1)
                                                                    <a wire:click="changeStatus({{ $category->id }})"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></a>
                                                                @else
                                                                    <a wire:click="changeStatus({{ $category->id }})"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></a>
                                                                @endif
                                                            @endcan
                                                            @cannot('product-categories-edit')
                                                                @if ($category->isActive == 1)
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></span>
                                                                @else
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></span>
                                                                @endif
                                                            @endcannot

                                                        </td>
                                                        <td>
                                                            @can('product-categories-edit')
                                                                @if ($category->level == 1)
                                                                    <a href="{{ route('admin.product.categories.edit', $category->id) }}"
                                                                        class="action-icon"> <i
                                                                            class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                                @elseif($category->level == 2)
                                                                    <a href="{{ route('admin.product.categories.edit.level2', $category->id) }}"
                                                                        class="action-icon"> <i
                                                                            class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                                @else
                                                                    <a href="{{ route('admin.product.categories.edit.level3', $category->id) }}"
                                                                        class="action-icon"> <i
                                                                            class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                                @endif
                                                            @endcan
                                                            @can('product-categories-delete')
                                                                <button wire:click="deleteId({{ $category->id }})"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            {{ $categories->links() }}
                                        @else
                                            <div class="alert alert-warning">
                                                در حال بارگزاری اطلاعات از پایگاه داده ....
                                            </div>
                                        @endif
                                    </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->

                </div>
            </div>
        </div>
        @include('livewire.admin.include.modal')
        @section('scripts')
            <script src="{{ asset('admin/js/MaxLength.min.js') }}"></script>
            <script>
                $(document).ready(function() {

                    //Specifying the Character Count control explicitly
                    $("#meta-title").MaxLength({
                        MaxLength: 60,
                        CharacterCountControl: $('#counter1')
                    });
                    $("#meta-description").MaxLength({
                        MaxLength: 160,
                        CharacterCountControl: $('#counter2')
                    });

                });

                $(document).ready(function() {
                    $('#parents').select2();
                    $('#parents').on('change', function(e) {
                        let data = $(this).val();
                        @this.set('parent_id', data);
                    });
                    window.livewire.on('ParentStore', () => {
                        $('#parents').select2();
                    });
                });
            </script>
        @endsection

        <script>
            document.addEventListener('livewire:load', () => {
                let progressSection = document.querySelector('#progressbar'),
                    progressBar = progressSection.querySelector('.progress-bar');

                document.addEventListener('livewire-upload-start', () => {
                    console.log('شروع بارگزاری');
                    progressSection.style.display = 'flex';
                });

                document.addEventListener('livewire-upload-finish', () => {
                    console.log('اتمام بارگزاری');
                    progressSection.style.display = 'none';
                });

                document.addEventListener('livewire-upload-error', () => {
                    console.log('خطا در بارگزاری');
                    progressSection.style.display = 'none';
                });

                document.addEventListener('livewire-upload-progress', (event) => {
                    console.log(`${event.detail.progress}%`);
                    progressBar.style.width = `${event.detail.progress}%`;
                    progressBar.textContent = `${event.detail.progress}%`;
                });
            });
        </script>
    </div>

@section('title', 'ویرایش دسته محصول سطح یک')
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 box-margin height-card">
                        <div class="card card-body">
                            <div class="row">
                                <a href="{{ route('admin.product.categories.level2') }}" class="btn btn-info col-6"
                                    style="max-height:30px;margin-bottom:10px;border-left:2px solid white"><i class="fa fa-plus-square"></i> دسته
                                    بندی سطح دو</a>
                                <a href="{{ route('admin.product.categories.level3') }}" class="btn btn-info col-6"
                                    style="max-height:30px;margin-bottom:10px"><i class="fa fa-plus-square"></i> دسته
                                    بندی سطح سه</a>
                            </div>

                            <h4 class="card-title">ویرایش دسته محصول سطح یک</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form wire:submit.prevent='CategoryForm'>
                                        @include('errors.error')
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
                                            <label for="exampleInputEmail111">کد آیکون:</label>
                                            <input type="text" wire:model.lazy='category.icon' class="form-control"
                                                id="exampleInputEmail111">
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

                                        <div class="checkbox checkbox-primary d-inline">
                                            <input type="checkbox"
                                                wire:model="category.isActive"
                                                id="checkbox-p-1">
                                            <label for="checkbox-p-1"
                                                class="cr">فعال</label>
                                        </div>
                                        
                                        <div class="input-group cust-file-button mb-3">
                                            <div class="custom-file">
                                                <input type="file" wire:model="image"
                                                    class="custom-file-input form-control" id="inputGroupFile03">
                                                <label class="custom-file-label" for="inputGroupFile03">تصویر
                                                    دسته بندی</label>
                                                <span class="text-info" wire:target='image' wire:loading>درحال
                                                    بارگزاری...</span>
                                            </div>
                                        </div>

                                        <div wire:ignore id="progressbar" class="progress mb-0 mt-1 mb-1"
                                            style="display: none">
                                            <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0٪
                                            </div>
                                        </div>

                                        @if ($image)
                                            <img class="form-control mt-3 mb-3" src="{{ $image->temporaryUrl() }}"
                                                alt="">
                                        @endif


                                        <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                            style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست دسته بندی های محصولات</h4>
                                @can('role-trash')
                                    <a href="{{ route('admin.product.categories.trash') }}" type="button"
                                        class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                            class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                            {{ \App\Models\Admin\products\Category::onlyTrashed()->count() }}
                                        </span></a>
                                @endcan
                                {{-- <button type="button" class="btn btn-primary mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                    اکسل</button> --}}
                                <a href="{{ route('admin.product.categories') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-plus-square"></i> افزودن</a>

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

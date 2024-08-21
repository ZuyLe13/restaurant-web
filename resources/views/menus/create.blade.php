@extends('layouts.app')

@section('content')

    <style>
        .create {
            margin-top: 100px;
        }

        .create__input {
            display: block;
            width: 100%;
            height: 60px;
            margin-top: 20px;
            background: var(--Dark);
            border-bottom: 1px solid var(--primary-color);
        }

        .categories {
            display: flex;
            align-items: center;
            gap: 40px;
            margin-top: 40px;
        }

        select {
            width: 100px;
            height: 30px;
            background: transparent;
            color: var(--primary-color);
        }

        .create__btn {
            margin-top: 40px;
            padding: 10px 40px;
        }
    </style>

    {{-------------- Create --------------}}
    <section class="create">
        <div class="container">
            <form action="/menus" method="post" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <input class="section-desc create__input" type="text" name="name" placeholder="Tên món ăn">
                <input class="section-desc create__input" type="text" name="description" placeholder="Mô tả món ăn">
                <input class="section-desc create__input" type="text" name="price" placeholder="Giá món ăn">
                <input style="margin-top: 40px" type="file" name="image" >
                <div class="categories">
                    <label>Chọn loại món ăn</label>
                    <select name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option> 
                        @endforeach
                    </select>
                </div>
                <button class="btn create__btn" type="submit">Create</button>
            </form>

            @if ($errors->any())
                <div>
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
    </section>


@endsection